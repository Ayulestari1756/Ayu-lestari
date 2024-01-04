<script setup>

  import { onMounted, ref } from 'vue';
  import { useRouter } from 'vue-router';

  const router = useRouter()

  let form = ref ({  id: ''   })

  const props = defineProps({
    id: {
        type: string,
        default: '',
    }
  })

  onMounted(async () => {
    CreateForm()
    getProduct()
  })

  const CreateForm = async () => {
    let response = await axios.get('/api/produk_form')
    // console.log('form', form.data)
       form.value = response.data
  }
 
   const getProduct = async () => {
    let response = await axios.get(`/api/produk/${props.id}`)
    // console.log(response)
    form.value = response.data
   }

  const onUpdate= async () => {
    const formData = new formData()
    formData.append('api_product', form.value.product)
    formData.append('api_price', form.value.price)
    formData.append('api_stock', form.value.stock)

    axios.post(`/api/produk_update/${props.id}`, formData)
    router.push('/produk_vue')
  }

  const onBack = () => {
    router.push('/produk_vue')
  }

</script>
<template>
    <h1>Edit produk</h1>
    <hr>
    <table>
        <tr>
            <td>Product</td>
            <td><input type="text" v-model="form.product" required></td>
        </tr>
        <tr>
            <td>Price</td>
            <td><input type="number" v-model="form.price" required></td>
        </tr>
        <tr>
            <td>Stock</td>
            <td><input type="number" v-model="form.stock" required></td>
        </tr>
        <tr>
            <td>
                <button @click="onUpdate">Update</button>
            </td>
            <td>
                <button @click="onBack">Back</button>
            </td>
        </tr>  
    </table>
</template>
</template>
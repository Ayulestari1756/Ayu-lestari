<script setup>

import { onMounted, ref } from 'vue';
import { useRouter } from 'vue-router';

const router = useRouter()

   let product = ref ([])

   onMounted(async ()  => {
       getProduct()
})

const getProduct = async () => {
    let response = await axios.get('/api/produk')
    // console.log('response', response)
    product.value = response.data
}

const CreateProduk = async () => {
    router.push('/produk_vue/create')
}

 const EditProduk = (id) => {
    router.push('/produk_vue/edit/'+id)
 }

const DeleteProduk = (id) => {
    if(confirm("Do you really want to delete?")){
        axios.delete('/api/produk/'+id)
        getProduct()
    }
}
 
</script>
<template>
    <div class="container">
        <h1>List produk</h1>
        <button @click="CreateProduk">Add</button>
        <hr />
        <table>
            <tr>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Option</th>
                    </tr>
                </thead>
                <tbody v-for="item in product" :key="item.id" v-if="product.length > 0">
                    <tr>
                        <td>{{ item.id }}</td>
                        <td>{{ item.product }}</td>
                        <td>{{ item.price }}</td>
                        <td>{{ item.stock }}</td>
                        <td style="display: flex">
                            <button @click="EditProduk(item.id)">Edit</button>
                            <button @click="DeleteProduk(item.id)">Delete</button>
                        </td>
                    </tr>
                </tbody>
                <tbody v-else>
                    <tr>
                        <td colspan="5">Data Not Found</td>
                    </tr>
                </tbody>
            </tr>
        </table>
    </div>
</template>

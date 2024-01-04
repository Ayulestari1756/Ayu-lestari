import { createRouter, createWebHistory } from "vue-router";

import ProdukIndex from '../components/produk/index.vue'
import ProdukCreate from '../components/produk/create.vue'
import ProdukEdit from '../components/produk/edit.vue'

const routes = [
    {
        path: '/produk_vue/',
        component: ProdukIndex,
    },
    {
        path: '/produk_vue/create',
        component: ProdukCreate,
    },
    {
        path: '/produk_vue/edit/:id',
        component: ProdukEdit,
        props: true,
    },
]


const router =  createRouter({
    history: createWebHistory(),
    routes
})

export default router
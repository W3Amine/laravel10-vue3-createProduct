import { createRouter, createWebHistory } from 'vue-router'
import ProductsPage from './pages/ProductsPage.vue';
import CreateProductPage from './pages/CreateProductPage.vue';
import PageNotFound from './pages/PageNotFound.vue';

const routes = [
    {
      path: '/',
      name: 'products.page',
      component: ProductsPage
    },
    {
      path: '/products/create',
      name: 'products.create',
      component: CreateProductPage
    },
    {
        path: '/:pathMatch(.*)*',
        name: 'PageNotFound',
        component: PageNotFound
      },
  ]
  
const router = createRouter({
    history: createWebHistory(),
    routes
  })
  
  export default router

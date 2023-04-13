import { createRouter, createWebHashHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'

const routes = [
  {
    path: '/',
    component: HomeView
  },
  {
    path: '/home',
    name: 'home',
    component: () => import(/* webpackChunkName: "home" */ '../views/HomeView.vue')
  },
  {
    path: '/contactanos',
    name: 'contactanos',
    component: () => import(/* webpackChunkName: "contactanos" */ '../views/ContactanosView.vue')
  },
  {
    path: '/productos',
    name: 'productos',
    component: () => import('../views/ProductosView.vue')
  },
  {
    path: '/productos/:id',
    name: 'productdetail',
    component: () => import('../views/ProductDetail.vue'),
  },
]


const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router

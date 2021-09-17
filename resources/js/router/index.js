import {createWebHistory, createRouter} from "vue-router";

// PAGES
import Home from '../pages/Home.vue';
import About from '../pages/About.vue';
import Register from '../pages/Register.vue';
import Login from '../pages/Login.vue';
import Dashboard from '../pages/Dashboard.vue';

// PRODUCTS
import Products from '../components/products/Products.vue';
// CATEGORY
import Category from '../components/category/Categories.vue';
export const routes = [
    //home
    {
        name: 'home',
        path: '/',
        component: Home
    },
    //about
    {
        name: 'about',
        path: '/about',
        component: About
    },
    //register
    {
        name: 'register',
        path: '/register',
        component: Register
    },
    //login
    {
        name: 'login',
        path: '/login',
        component: Login
    },
    //dashboard
    {
        name: 'dashboard',
        path: '/dashboard',
        component: Dashboard
    },
    //products
    {
        name: 'products',
        path: '/products',
        component: Products
    },
    //categories
    {
        name: 'categories',
        path: '/categories',
        component: Category
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

export default router;

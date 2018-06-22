import Vue from 'vue'
import VueRouter from 'vue-router'

import Login from './views/Login'

Vue.use(VueRouter)

const Router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/login',
            name: 'login',
            component: Login
        }
    ]
})

export default Router
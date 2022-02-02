
import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)
 import Forum from '../components/forum/Forum';
const routes = [
    { path: '/home', component: Forum , name:'home' },
]

const router = new VueRouter({
    routes, // short for `routes: routes`
    hashbang : false,
    mode : 'history'
})


export default router;
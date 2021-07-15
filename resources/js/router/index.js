import Vue from 'vue'
import VueRouter from 'vue-router'
import routes from './routes.js'

const router = new VueRouter({
  mode: 'history',
  routes
})

// Load routes
Vue.use(VueRouter)

export default router
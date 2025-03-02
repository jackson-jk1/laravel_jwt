// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import { sync } from 'vuex-router-sync'
import Vue from 'vue'
import Vuex from 'vuex'
import VueResource from 'vue-resource'
import VueRouter from 'vue-router'

Vue.use(Vuex)
Vue.use(VueResource)
Vue.use(VueRouter)

Vue.http.options.root = process.env.SERVER

import App from './App'
import routes from './router'
import VuexStore from './vuex/store'



Vue.config.productionTip = false
console.log(process.env.SERVER)
/* eslint-disable no-new */

const store = new Vuex.Store(VuexStore)
const router = new VueRouter({
  routes
})
sync(store,router)
new Vue({
  el: '#app',
  router,
  store,
  components: { App },
  template: '<App/>'
})

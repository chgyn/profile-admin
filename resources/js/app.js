import './bootstrap'
import Vue from 'vue'
import Index from './Index'
import axios from 'axios'
import VueAxios from 'vue-axios'
// import 'bootstrap/dist/css/bootstrap.css'
// import 'bootstrap-vue/dist/bootstrap-vue.css'
// import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'


// Set Vue globally
window.Vue = Vue

// VueAxios axios
Vue.use(VueAxios, axios)

// // Install BootstrapVue
// Vue.use(BootstrapVue)

// // Optionally install the BootstrapVue icon components plugin
// Vue.use(IconsPlugin)

// Load Index
Vue.component('index', Index)
const app = new Vue({
  el: '#app'
});
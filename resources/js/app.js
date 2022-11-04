require('./bootstrap');
import * as Vue from 'vue'
window.Vue = Vue;
window.$ = window.jQuery = require('jquery');

import 'bootstrap-vue/dist/bootstrap-vue.css';
import "bootstrap/dist/js/bootstrap.min.js"

import Datepicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css';

import App from './App.vue';

import store from './store/index';

//importamos y configuramos el vue-router
import * as VueRouter from 'vue-router';
import {routes} from './routes.js';

import { vfmPlugin } from 'vue-final-modal';

const router = VueRouter.createRouter({
  history: VueRouter.createWebHistory(),
  routes
});

const app = Vue.createApp(App)
      .use(store)
      .use(router)
      .use(vfmPlugin)
      .component('Datepicker',Datepicker)
      .mount('#app');
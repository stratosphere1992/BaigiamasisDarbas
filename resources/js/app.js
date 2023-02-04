import './bootstrap';
import '../sass/app.scss'
import jQuery from 'jquery';
window.$ = jQuery;

// window.Vue = require('Vue');
// window.axios = require('axios');
// Vue.component('example-component', require('./components/ExampleComponent.vue').default);

// const app = new Vue({
//     el: '#app',
// });

import { createApp } from 'vue';

import CategoryDropDown from './components/CategoryDropDown.vue';
createApp(CategoryDropDown).mount('#cat');

import AdressDropDown from './components/AdressDropDown.vue';
createApp(AdressDropDown).mount('#csc');

// import Example from './components/Example.vue';
// createApp(Example).mount('#app');

// import FeatureImage from './components/imagepreview/FeatureImage.vue';
// createApp(FeatureImage).mount('#featureImg');

// const app = createApp({});
// app.component('example', Example);
// app.mount('#app');


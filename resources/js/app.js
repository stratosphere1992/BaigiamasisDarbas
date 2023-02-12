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


// import { createApp } from "vue";
import { createApp } from "vue/dist/vue.esm-bundler.js";

import CategoryDropDown from './components/CategoryDropDown.vue';
import AdressDropDown from './components/AdressDropDown.vue';
import Message from './components/Message.vue';
import Conversation from './components/Conversation.vue';
import ShowPhoneNumber from './components/ShowPhoneNumber.vue';
import SaveAd from './components/SaveAd.vue';

const app = createApp({
    components: {
      CategoryDropDown,
      AdressDropDown,
      Message,
      Conversation,
      ShowPhoneNumber,
      SaveAd,
    }
});

app.component('category-component', CategoryDropDown);
app.component('adress-component', AdressDropDown);
app.component('message-component', Message);
app.component('conversation-component', Conversation);
app.component('show-number', ShowPhoneNumber);
app.component('save-ad', SaveAd);

app.mount('#app');
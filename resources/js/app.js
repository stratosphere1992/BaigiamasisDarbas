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

// import { createApp } from "vue/dist/vue.esm-bundler.js";

// import CategoryDropDown from './components/CategoryDropDown.vue';
// createApp(CategoryDropDown).mount('#cat');

// import AdressDropDown from './components/AdressDropDown.vue';
// createApp(AdressDropDown).mount('#csc');

// import Message from './components/Message.vue';
// const app = createApp({});
// app.component('message-component', Message);
// app.mount('#msg');

// import Conversation from './components/Conversation.vue';
// const app2 = createApp({});
// app2.component('conversation-component', Conversation);
// app2.mount('#con');

// import ShowPhoneNumber from './components/ShowPhoneNumber.vue';
// const app3 = createApp({});
// app3.component('show-number', ShowPhoneNumber);
// app3.mount('#num');




import { createApp } from "vue/dist/vue.esm-bundler.js";

import CategoryDropDown from './components/CategoryDropDown.vue';
import AdressDropDown from './components/AdressDropDown.vue';
import Message from './components/Message.vue';
import Conversation from './components/Conversation.vue';
import ShowPhoneNumber from './components/ShowPhoneNumber.vue';

const app = createApp({
    components: {
      CategoryDropDown,
      AdressDropDown,
      Message,
      Conversation,
      ShowPhoneNumber,
    }
});

  app.component('category-component', CategoryDropDown);
  app.component('adress-component', AdressDropDown);
  app.component('message-component', Message);
  app.component('conversation-component', Conversation);
  app.component('show-number', ShowPhoneNumber);

  app.mount('#app');

  // const app = createApp({
  //   components: {
  //     Message
  //   }
  // });
  // app.component('message-component', Message);
  // app.mount('#app');
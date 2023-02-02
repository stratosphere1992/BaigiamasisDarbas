import './bootstrap';
import '../sass/app.scss'
import jQuery from 'jquery';
window.$ = jQuery;
import { createApp } from 'vue';
import Welcome from './Welcome.vue';
createApp(Welcome).mount('#app');
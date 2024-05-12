import './bootstrap'; 

import { createApp } from 'vue';
import App from '../js/layout/App.vue';
import router from './router/index.js';
import 'bootstrap/dist/css/bootstrap.css';

createApp(App).use(router).mount("#app");

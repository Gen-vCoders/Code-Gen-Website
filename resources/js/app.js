import './bootstrap'; 

import { createApp } from 'vue';
import ToastPlugin from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-bootstrap.css';
import App from '../js/layout/App.vue';
import router from './router/index.js';


const app = createApp(App); // Creating a Vue app instance

app.use(router); // Mounting the router instance on the Vue app
app.use(ToastPlugin); // Mounting the ToastPlugin on the Vue app
app.mount('#app');
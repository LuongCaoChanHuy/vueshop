import {createApp} from 'vue';
require('./bootstrap');
import App from './App.vue';
import axios from 'axios';
import router from './router';
import { BootstrapIconsPlugin } from 'bootstrap-icons-vue';
// import Autocomplete from 'vue3-autocomplete';
// import 'vue3-autocomplete/dist/vue3-autocomplete.css';

const app = createApp(App);
app.config.globalProperties.$axios = axios;
app.use(router);
// app.component('Autocomplete', Autocomplete)
app.use(BootstrapIconsPlugin);
app.mount('#app');
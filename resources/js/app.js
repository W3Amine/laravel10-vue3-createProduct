import './bootstrap';
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap/dist/js/bootstrap.min.js";

import {createApp} from 'vue';
import router from './vue/router.js'
import Index from './vue/Index.vue';

createApp(Index).use(router).mount("#app")
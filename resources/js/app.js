import './bootstrap';
import '../css/app.css';
import '../css/media-library.css';
import '../css/style.bundle.css';
import { createApp } from 'vue';
import App from './components/app.vue'; // Main Vue component
import router from './router'; // Router setup
// import store from './store'; // Vuex store setup



const app = createApp(App);
app.use(router);
// app.use(store);
app.mount('#app');
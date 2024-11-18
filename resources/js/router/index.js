import { createRouter, createWebHistory } from 'vue-router';
import Dashboard from '../components/master_dashboard.vue';

const routes = [
  { path: '/', component: Dashboard }
];

const router = createRouter({
  history: createWebHistory(),
  routes
});

export default router;
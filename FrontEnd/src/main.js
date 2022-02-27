import Vue from 'vue'
import App from './App.vue'
import router from './router'
import Axios from 'axios'
import 'bootstrap' 
import 'bootstrap/dist/css/bootstrap.min.css';

Axios.defaults.baseURL = (process.env.API_PATH !== 'production') ? 'http://localhost:8000/api/' : '';

Vue.prototype.$http = Axios;
Vue.config.productionTip = false

new Vue({
  router,
  render: h => h(App)
}).$mount('#app')

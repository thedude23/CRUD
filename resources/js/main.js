import Vue from 'vue'
import ThemeMode from './ThemeMode.vue' // App

Vue.config.productionTip = false

new Vue({
  render: h => h(ThemeMode), // (App)
}).$mount('#tmode') // before: #app

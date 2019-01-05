import Vue from 'vue'
import App from './App.vue'
import axios from 'axios'
import VueAxios from 'vue-axios'
import vueModx from 'vuemodx'

Vue.config.productionTip = false

window.onload = function () {
  Vue.use(VueAxios, axios)
  Vue.use(vueModx, {
    lexicon: MODx.lang,
    appId: 'modextra-panel-home-div'
  })

  Vue.prototype.$httpConfig = { headers: { 'modAuth': modExtra.modAuth } }

  new Vue({
    render: h => h(App)
  }).$mount('#modextra-panel-home-div')
}

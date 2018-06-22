import Vue from 'vue'
import Vuetify from 'vuetify'
import Vuelidate from 'vuelidate'
import axios from 'axios'
import VueAxios from 'vue-axios'
import VueAuth from '@websanova/vue-auth'
import VueDisqus from 'vue-disqus'
import Meta from 'vue-meta'
import router from './route'
import App from './App'

Vue.use(Vuetify)
Vue.use(Vuelidate)
Vue.use(VueAxios, axios)
Vue.use(VueDisqus)
Vue.use(Meta)

Vue.prototype.$baseURL = 'http://localhost:8000/'
axios.defaults.baseURL = 'http://localhost:8000/api/v1'

Vue.router = router

Vue.use(VueAuth, {
	auth: require('@websanova/vue-auth/drivers/auth/bearer.js'),
	http: require('@websanova/vue-auth/drivers/http/axios.1.x.js'),
	router: require('@websanova/vue-auth/drivers/router/vue-router.2.x.js')
})

const app = new Vue({
	el: '#app',
	components: { App },
	router,
});
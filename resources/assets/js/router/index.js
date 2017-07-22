import Vue from 'vue'
import Router from 'vue-router'
// import Dashboard from '../components/Dashboard.vue'
// import NotFound from '../components/shared/NotFound.vue'
const Dashboard = () => import('../components/Dashboard.vue')
const NotFound  = () => import('../components/shared/NotFound.vue')
let routes = [
  { path: '/', component: Dashboard },
  // Route with sub route
  // { path: '/{route}',
  //   component: {component},
  //   children: [{ path: '{sub-route}', component: {sub-component} } ]
  // },
 { path: '*', component: NotFound }
]
Vue.use(Router)
export default new Router({ routes })
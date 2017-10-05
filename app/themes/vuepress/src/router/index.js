import Vue from 'vue'
import Router from 'vue-router'
import Home from '../pages/Home.vue'
import Page from '../pages/Page.vue'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/:pageSlug',
      name: 'Page',
      component: Page
    }
  ],
  mode: 'history'
})

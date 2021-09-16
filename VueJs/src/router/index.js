import Vue from 'vue'
import Router from 'vue-router'
import HelloWorld from '@/components/HelloWorld'
import About from '@/components/About'
import History from '@/components/History'
import Team from '@/components/Team'
import Parent from '@/components/Parent'
import Product from '@/components/Product'
import Create from '@/components/Create'
import Update from '@/components/Update'

Vue.use(Router)

export default new Router({
  mode:'history',
  routes: [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {
      path: '/about-us',
      name: 'About',
      component: About  
    },
    {
      path: '/history',
      name: 'History',
      component: History  
    },
    {
      path: '/team',
      name: 'Team',
      component: Team  
    },
    {
      path: '/parent',
      name: 'Parent',
      component: Parent  
    },
    {
      path: '/product',
      name: 'Product',
      component: Product  
    },
    {
      path: '/create',
      name: 'Create-Product',
      component: Create  
    },
    {
      path: '/update/:id',
      name: 'Update',
      component: Update  
    }
  ]
})

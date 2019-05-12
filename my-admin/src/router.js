import Vue from 'vue'
import VueRouter from 'vue-router'
import blog from './views/blog.vue'
import issue from './views/issue.vue'
import showblog from './views/showblog.vue'
import home from './views/home.vue'
import admin from './views/admin.vue'
import add from './views/add.vue'
import list from './views/list.vue'
import login from './views/login.vue'
Vue.use(VueRouter)
export default new VueRouter({
  mode: 'history',
  routes: [
    {
      path: '/',
      component: home ,
      redirect:"blog",
      children:[
        {
          path: '/blog',
          component: blog,
          meta:{
            title:"首页"
          },

        },

        { path: '/issue',
          component: issue,
          meta:{
            title:"发布"
          }
        },
        { path: '/showblog/:id',
          component: showblog ,
          meta:{
            title:"详情"
          }
        },
        { path: '/login',
          component: login ,
          meta:{
            title:"登录"
          }
        }
      ]


    },


    {
      path: '/admin',
      component: admin ,
      meta:{
        title:"后台管理"
      },
      children:[
        { path: '/admin/add',
          component: add ,
          meta:{
            title:"添加管理员"
          }
        },
        { path: '/admin/list',
          component: list ,
          meta:{
            title:"管理员列表"
          }
        },

      ]



    },

  ]
})


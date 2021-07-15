const routes = [
  {
    path: '/',
    component: () => import('../pages/Home.vue'),
    name: 'home'
  },
  {
    path: '/country/:code',
    component: () => import('../pages/Country.vue'),
    props: true,
    name: 'country'
  }
]

export default routes
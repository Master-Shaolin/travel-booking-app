const Home = () => import('./pages/Home.vue')
const Activity = () => import('./pages/Activity.vue')

//impotamos los componentes para el blog
//const Mostrar = () => import('./components/blog/Mostrar.vue')
//const Crear = () => import('./components/blog/Crear.vue')
//const Editar = () => import('./components/blog/Editar.vue')

export const routes = [
  {
    name: 'home',
    path: '/',
    component: Home
  },
  {
    name: 'activity',
    path: '/activity/:slug',
    component: Activity
  }
  /*{
    name: 'contacto',
    path: '/contacto',
    component: Contacto
  },
  {
    name: 'mostrarBlogs',
    path: '/blogs',
    component: Mostrar
  },
  {
    name: 'crearBlogs',
    path: '/crear',
    component: Crear
  },
  {
    name: 'editarBlog',
    path: '/editar/:id',
    component: Editar
  }*/
]
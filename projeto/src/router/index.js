
import HelloWorld from '@/components/HelloWorld'
import users from "../components/usuarios/users";
  const routes = [
    {
      path: '/',
      name: 'HelloWorld',
      component: HelloWorld
    },
    {path: '/Contas', component: users}
  ]
export default routes

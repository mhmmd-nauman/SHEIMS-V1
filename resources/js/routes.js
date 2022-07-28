import AllPosts from './components/AllPost.vue';
import AddPost from './components/AddPost.vue';
import EditPost from './components/EditPost.vue';
import Register from './components/Register.vue';
import City from './components/City.vue';
export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllPosts
    },
    {
        name: 'add',
        path: '/add',
        component: AddPost
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditPost
    }
    ,
    {
        name: 'Register',
        path: '/register',
        component: Register
    },
    {
        name: 'addCity',
        path:'/addcity',
        component: City
    }
];
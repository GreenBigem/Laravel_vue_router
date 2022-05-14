import Vue from 'vue'
import VueRouter from 'vue-router';
import PostComponent from './components/PostComponent'
import TagComponent from './components/TagComponent'

Vue.use(VueRouter);

export default new VueRouter({
    mode: 'history',

    routes: [
        {
            path: '/people', component: function() {
                return import('./components/Person/Index')
            },
            name: 'person.index'
        },
        {
            path: '/people/create', component: () => import('./components/Person/Create'),
            name: 'person.create'
        },
        {
            path: '/tags',
            component: TagComponent
        }
    ]

})

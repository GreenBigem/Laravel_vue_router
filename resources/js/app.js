import Vue from 'vue'
import router from './router'
import Index from './components/Index'
import store from './store'

require('./bootstrap');

const app = new Vue({
    el: '#app',

    components: {
        Index
    },

    router,
    store

});


// ! One more method without 'el'

// const app = new Vue({

//     components: {
//         Index
//     },

//     router

// }).$mount('#app')
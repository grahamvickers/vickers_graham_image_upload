// require('./bootstrap');
import Vue from 'vue';
// import Vuex from 'vuex';

import App from './components/App.vue';
import router from './router';

// Vue.use(Vuex);

// const store = new Vuex.Store({
//     state: {
//         user: null,
//     },
//     mutations: {
//         user (state, UserData) {
//             state.user = UserData;
//         }
//     }
// });

new Vue ({
    el: '#app',
    router,
    // store,
    components: {App}
});

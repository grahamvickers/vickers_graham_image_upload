// require('./bootstrap');
import Vue from 'vue';
import Vuex from 'vuex';

import App from './components/App.vue';
import router from './router';

Vue.use(Vuex);

const store = new Vuex.Store({
    mutations: {
        image (state, ImageData) {
            state.image = ImageData;
        }
    }
});

new Vue ({
    el: '#app',
    router,
    store,
    components: {App}
});

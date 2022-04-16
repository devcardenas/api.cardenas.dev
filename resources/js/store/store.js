import { createStore } from 'vuex';
import axios from 'axios';
import { Global } from '../Global';

// Create a new store instance.
const store = createStore({
    state() {
        return {
            social_medias: null,
            profile: null
        }
    },
    mutations: {
        getSocialsMedias(state) {
            axios
                .get(Global.url + "v1/social-media")
                .then((response) => {
                    state.social_medias = response.data.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getProfile(state) {
            axios
                .get(Global.url + "v1/profile")
                .then((response) => {
                    state.profile = response.data.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    }
});

store.commit('getSocialsMedias');
store.commit('getProfile');

export default store;

<template>
    <!-- Navigation-->
    <nav
        class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top"
        id="sideNav"
    >
        <a
            class="navbar-brand js-scroll-trigger"
            href="#page-top"
            v-if="profile"
        >
            <span class="d-block d-lg-none">{{ profile.name }}</span>
            <span class="d-none d-lg-block"
                ><img
                    class="img-fluid img-profile rounded-circle mx-auto mb-2"
                    :src="profile.profile_image_path"
                    :alt="profile.name"
            /></span>
        </a>
        <div v-else>
            <div class="text-center">
                <div class="spinner-grow text-secondary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link
                        class="nav-link js-scroll-trigger"
                        to="/about"
                        active-class="active"
                    >
                        Acerca de</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link
                        class="nav-link js-scroll-trigger"
                        to="/experience"
                        active-class="active"
                        >Experiencia</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link
                        class="nav-link js-scroll-trigger"
                        to="/education"
                        active-class="active"
                        >Educación</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link
                        class="nav-link js-scroll-trigger"
                        to="/skills"
                        active-class="active"
                        >Skills</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link
                        class="nav-link js-scroll-trigger"
                        to="/portfolio"
                        active-class="active"
                        >Portafolio</router-link
                    >
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
import { Global } from "../Global.js";
import axios from "axios";

export default {
    mounted() {
        this.getProfile();
    },
    data() {
        return {
            profile: null,
        };
    },
    methods: {
        getProfile() {
            axios
                .get(Global.url + "v1/profile")
                .then((response) => {
                    this.profile = response.data.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>

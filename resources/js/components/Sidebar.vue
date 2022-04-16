<template>
    <!-- Navigation-->
    <nav
        class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top"
        id="sideNav"
    >
        <a
            class="navbar-brand js-scroll-trigger"
            href="#page-top"
            v-if="this.$store.state.profile && this.$store.state.profile !== null"
        >
            <span class="d-block d-lg-none">{{ this.$store.state.profile.name }}</span>
            <span class="d-none d-lg-block"
                ><img
                    class="img-fluid img-profile rounded-circle mx-auto mb-2"
                    :src="this.$store.state.profile.profile_image_path"
                    :alt="this.$store.state.profile.name"
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
                    <!-- Se activa por defecto -->
                    <router-link
                        class="nav-link js-scroll-trigger"
                        :class="{ active: isActive('/') }"
                        to="/about"
                        active-class="active"
                        @click="closeNav(event)"
                    >
                        Acerca de</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link
                        class="nav-link js-scroll-trigger"
                        to="/experience"
                        active-class="active"
                        @click="closeNav(event)"
                        >Experiencia</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link
                        class="nav-link js-scroll-trigger"
                        to="/education"
                        active-class="active"
                        @click="closeNav(event)"
                        >Educación</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link
                        class="nav-link js-scroll-trigger"
                        to="/skills"
                        active-class="active"
                        @click="closeNav(event)"
                        >Skills</router-link
                    >
                </li>
                <li class="nav-item">
                    <router-link
                        class="nav-link js-scroll-trigger"
                        to="/portfolio"
                        active-class="active"
                        @click="closeNav(event)"
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
    methods: {
        isActive(route) {
            return this.$route.path === route;
        },
        closeNav() {
            const nav = document.querySelector(".navbar-toggler");
            nav.classList.remove("collapsed");
            nav.setAttribute("aria-expanded", "false");

            document.querySelector("#navbarResponsive").classList.remove("show");
        },
    },
};
</script>
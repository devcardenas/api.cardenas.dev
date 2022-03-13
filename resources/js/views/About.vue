<template>
    <!-- About-->
    <div class="row" v-if="profile">
        <div class="col-md-10 col-xl-12">
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <div class="text-center">
                        <span class="d-none-block d-lg-none"
                            ><img
                                class="img-fluid img-profile rounded-circle mx-auto mb-2 w-50"
                                :src="profile.profile_image_path"
                                alt="..."
                        /></span>
                    </div>
                    <div class="row align-items-end">
                        <div class="col-md-auto">
                            <h1 class="mb-0 me-xl-4">
                                <span class="text-secondary" v-if="profile">{{
                                    profile.name
                                }}</span>
                            </h1>
                        </div>
                        <div class="col-md-auto">
                            <div class="d-flex align-items-end">
                                <h2 class="mb-0 text-primary" v-if="profile">
                                    {{ profile.subtitle }}
                                </h2>
                                <h3>
                                    <i
                                        class="fa-solid fa-code ms-3 text-secondary"
                                    ></i>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="subheading mb-5" v-if="profile">
                        {{ profile.age }} años · {{ profile.address }} ·
                        <a :href="'tel:55' + deleteSpaces(profile.phone)" target="_blank">{{
                            profile.phone
                        }}</a>
                        ·
                        <a
                            :href="'mailto:' + profile.email"
                            class="text-lowercase"
                            target="_blank"
                            >{{ profile.email }}</a
                        >
                    </div>
                    <p class="lead mb-5" v-if="profile">
                        {{ profile.excerpt }}
                    </p>
                    <div class="social-icons">
                        <SocialMedia
                            :socials_medias="socials_medias"
                        ></SocialMedia>
                    </div>
                    <br />
                    <a
                        v-if="profile"
                        class="btn btn-primary"
                        :href="profile.cv_path"
                        :download="formatNamePdf(profile.name)"
                        target="_blank"
                        ><i class="bi bi-download me-2"></i>Descargar CV</a
                    >
                </div>
            </section>
        </div>
    </div>
    <div v-else class="row">
        <div class="col-md-10 col-xl-12">
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                  <Preloader />
                </div>
            </section>
        </div>
    </div>
</template>

<script>
import SocialMedia from "../components/SocialMedia.vue";
import Preloader from "../components/Preloader.vue";
import { Global } from "../Global.js";
import axios from "axios";

export default {
    components: {
        SocialMedia,
        Preloader
    },
    mounted() {
        this.getSocialsMedias();
        this.getProfile();
    },
    data() {
        return {
            socials_medias: null,
            profile: null,
        };
    },
    methods: {
        formatNamePdf(name) {
            return ("CV_" + name.replace(/\s/g, "_")).toUpperCase() + ".pdf";
        },
        getSocialsMedias() {
            axios
                .get(Global.url + "v1/social-media")
                .then((response) => {
                    this.socials_medias = response.data.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
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
        deleteSpaces(string) {
            return string.replaceAll(" ", "");
        },
    },
};
</script>

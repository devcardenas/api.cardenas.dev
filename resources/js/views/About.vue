<template>
    <!-- About-->
    <div class="row" v-if="this.$store.state.profile">
        <div class="col-md-12">
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <div class="text-center">
                        <span class="d-none-block d-lg-none"
                            ><img
                                class="img-fluid img-profile rounded-circle mx-auto mb-2 w-50"
                                :src="this.$store.state.profile.profile_image_path"
                                alt="..."
                        /></span>
                    </div>
                    <div class="row align-items-end">
                        <div class="col-md-auto">
                            <h1 class="mb-0 me-xl-4">
                                <span class="text-secondary" v-if="this.$store.state.profile">{{
                                    this.$store.state.profile.name
                                }}</span>
                            </h1>
                        </div>
                        <div class="col-md-auto">
                            <div class="d-flex align-items-end">
                                <h2 class="mb-0 text-primary" v-if="this.$store.state.profile">
                                    {{ this.$store.state.profile.subtitle }}
                                </h2>
                                <h3>
                                    <i
                                        class="fa-solid fa-code ms-3 text-secondary"
                                    ></i>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="subheading mb-5" v-if="this.$store.state.profile">
                        {{ this.$store.state.profile.age }} años • {{ this.$store.state.profile.address }} •
                        <a
                            :href="'tel:55' + deleteSpaces(this.$store.state.profile.phone)"
                            target="_blank"
                            >{{ this.$store.state.profile.phone }}</a
                        >
                        •
                        <a
                            :href="'mailto:' + this.$store.state.profile.email"
                            class="text-lowercase"
                            target="_blank"
                            >{{ this.$store.state.profile.email }}</a
                        >
                    </div>
                    <p class="lead mb-5" v-if="this.$store.state.profile">
                        {{ this.$store.state.profile.excerpt }}
                    </p>
                   <div class="social-icons">
                        <SocialMedia
                            :social_medias="this.$store.state.social_medias"
                        ></SocialMedia>
                    </div>
                    <br />
                    <a
                        v-if="this.$store.state.profile"
                        class="btn btn-primary"
                        :href="this.$store.state.profile.cv_path"
                        :download="formatNamePdf(this.$store.state.profile.name)"
                        target="_blank"
                        ><i class="bi bi-download me-2"></i>Descargar CV</a
                    >
                </div>
            </section>
        </div>
    </div>
    <div v-else class="row">
        <div class="col-md-12">
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

export default {
    components: {
        SocialMedia,
        Preloader,
    },
    data() {
        return {
            Global,
        };
    },
    methods: {
        formatNamePdf(name) {
            return ("CV_" + name.replace(/\s/g, "_")).toUpperCase() + ".pdf";
        },
        deleteSpaces(string) {
            return string.replaceAll(" ", "");
        },
    },
};
</script>

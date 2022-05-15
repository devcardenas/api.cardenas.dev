<template>
    <!-- Experience-->
    <div class="row" v-if="experiences">
        <div class="col-md-12">
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <div class="mb-5 d-flex align-items-center">
                        <h2 class="m-0">Experiencia</h2>
                        <p class="h4 text-primary m-0 d-none">
                            <span class="text-secondary ms-2">+</span> 2 años
                        </p>
                    </div>
                    <ExperienceItem
                        :experiences="experiences"
                        v-if="experiences"
                    ></ExperienceItem>
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
import ExperienceItem from "../components/ExperienceItem.vue";
import Preloader from "../components/Preloader.vue";
import { Global } from "../Global.js";
import axios from "axios";

export default {
    components: {
        ExperienceItem,
        Preloader
    },
    mounted() {
        this.getExperiences();
    },
    data() {
        return {
            experiences: null,
        };
    },
    methods: {
        getExperiences() {
            axios
                .get(Global.url + "v1/experience")
                .then((response) => {
                    this.experiences = response.data.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>

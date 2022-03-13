<template>
    <!-- Education-->
    <div class="row" v-if="educations">
        <div class="col-md-12 col-lg-10">
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">Educación</h2>
                    <EducationItem
                        :educations="educations"
                        v-if="educations"
                    ></EducationItem>
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
import EducationItem from "../components/EducationItem.vue";
import Preloader from "../components/Preloader.vue";
import { Global } from "../Global.js";
import axios from "axios";

export default {
    components: {
        EducationItem,
        Preloader
    },
    mounted() {
        this.getEducations();
    },
    data() {
        return {
            educations: null,
        };
    },
    methods: {
        getEducations() {
            axios
                .get(Global.url + "v1/education")
                .then((response) => {
                    this.educations = response.data.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>

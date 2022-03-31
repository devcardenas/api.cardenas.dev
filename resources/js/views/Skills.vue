<template>
    <!-- Skills-->
    <div class="row" v-if="skills">
        <div class="col-md-12 col-lg-12">
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Habilidades</h2>
                    <div class="row">
                            <SkillItem
                                :skills="skills"
                                v-if="skills"
                            ></SkillItem>
                    </div>
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
import SkillItem from "../components/SkillItem.vue";
import Preloader from "../components/Preloader.vue";
import { Global } from "../Global.js";
import axios from "axios";

export default {
    components: {
        SkillItem,
        Preloader
    },
    mounted() {
        this.getSkills();
    },
    data() {
        return {
            skills: null,
        };
    },
    methods: {
        getSkills() {
            axios
                .get(Global.url + "v1/skills")
                .then((response) => {
                    this.skills = response.data.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>

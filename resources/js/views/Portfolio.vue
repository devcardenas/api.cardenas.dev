<template>
    <!-- portfolio-->
    <div class="row">
        <div class="col-md-12">
            <section class="resume-section" id="portfolio">
                <div class="resume-section-content">
                    <div class="mb-5 d-flex align-items-center">
                        <h2 class="m-0">Mi portafolio</h2>
                        <p class="h4 text-primary m-0" v-if="total_projects">
                            <span class="text-secondary ms-2">+</span>
                            {{ total_projects.total_projects }} proyectos
                        </p>
                        <div v-else>
                            <Preloader class="ms-2" />
                        </div>
                    </div>

                    <div v-if="projects_types && projects_types.length > 0">
                        <ul class="nav justify-content-left">
                            <NavPortfolioItem
                                :projects_types="projects_types"
                                @projects="getProjects"
                            ></NavPortfolioItem>
                        </ul>

                        <div class="tab-content mt-3" id="myTabContent">
                            <NavPortfolioContentItem
                                :projects="projects"
                            ></NavPortfolioContentItem>
                        </div>
                    </div>
                    <div
                        v-else-if="projects_types && projects_types.length == 0"
                        class="text-center"
                    >
                        <p>No hay proyectos para mostrar :(</p>
                    </div>
                    <div v-else>
                        <Preloader />
                    </div>
                </div>
            </section>
        </div>
    </div>
</template>

<script>
import NavPortfolioItem from "../components/NavPortfolioItem.vue";
import Preloader from "../components/Preloader.vue";
import NavPortfolioContentItem from "../components/NavPortfolioContentItem.vue";
import { Global } from "../Global.js";
import axios from "axios";

export default {
    components: {
        NavPortfolioItem,
        NavPortfolioContentItem,
        Preloader,
    },
    data() {
        return {
            projects_types: null,
            total_projects: null,
            projects: [],
        };
    },
    mounted() {
        this.getProjectsTypes();
        this.getTotalProjects();
    },
    methods: {
        getProjectsTypes() {
            axios
                .get(Global.url + "v1/projects/types")
                .then((response) => {
                    this.projects_types = response.data.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getTotalProjects() {
            axios
                .get(Global.url + "v1/projects/totals")
                .then((response) => {
                    this.total_projects = response.data.data;
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        getProjects(project){
            this.projects = project;
        }
    },
};
</script>

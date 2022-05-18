<template>
    <div class="row">
        <div class="col-md-6 col-lg-3" v-for="project in projects" :key="project">
            <div class="card my-3 portfolio-item">
                <img
                    :src="project.image_path"
                    class="card-img-top"
                    :alt="project.title"
                />
                <div class="card-body">
                    <p class="card-text m-0">
                        {{ project.title }}
                    </p>
                    <span
                        class="bg-secondary rounded p-1 span-info text-primary"
                        >{{ project.slogan }}</span
                    >
                    <div class="d-flex justify-content-between mt-4">
                        <a
                            :href="project.url"
                            target="_blank"
                            class="text-decoration-none"
                            >Visitar</a
                        >
                        <p class="mb-0" v-if="project.icons">
                            <span v-html="project.icons"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import moment from "moment";
moment.locale("es");

export default {
    props: ["projects"],
    methods: {
        formatDate(date) {
            return moment(date).format("YYYY");
        },
    },
};
</script>

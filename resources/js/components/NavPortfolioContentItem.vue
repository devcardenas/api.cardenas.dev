<template>
    <div
        class="tab-pane fade" :class="{ 'show active': projects }"
        id="content"
        role="tabpanel"
        aria-labelledby="content-tab"
    >
        <ProjectItem :projects="projects" v-if="projects && projects.length > 0"></ProjectItem>
        <div v-else-if="projects && projects.length == 0" class="text-center">
            <p>No hay proyectos para mostrar :(</p>
        </div>
        <Preloader v-else />
    </div>
</template>

<script>
import ProjectItem from "../components/ProjectItem.vue";
import Preloader from "../components/Preloader.vue";

export default {
    props: ["projects"],
    components: {
        ProjectItem,
        Preloader
    },
};
</script>

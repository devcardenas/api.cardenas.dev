<template>
    <li
        class="nav-item"
        v-for="project_type of projects_types"
        :key="project_type.project_type_id"
    >
        <a
            class="nav-link"
            :class="{
                active:
                    project_type.project_type_id ==
                    projects_types[0].project_type_id,
            }"
            active-class="active"
            data-bs-toggle="tab"
            data-bs-target="#content"
            type="button"
            role="tab"
            aria-controls="content"
            aria-selected="true"
            @click="getProjectsByType(project_type.project_type_id)"
            >{{ project_type.name }}</a
        >
    </li>
</template>

<script>
import { Global } from "../Global.js";
export default {
    props: ["projects_types"],
    mounted() {
        this.getProjectsByType(this.projects_types[0].project_type_id);
    },
    emits: ["projects"],
    setup(props, { emit }) {
        /**
         * Get projects by type and set to projects variable and send it to parent component 'Portfolio'
         */
        const getProjectsByType = (project_type_id) => {
            axios
                .get(Global.url + "v1/projects/types/" + project_type_id)
                .then((response) => {
                    emit("projects",response.data.data);
                })
                .catch((error) => {
                    console.log(error);
                });
        };
        return {getProjectsByType};
    },
};
</script>

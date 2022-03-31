<template>
    <div
        class="d-flex flex-column flex-md-row justify-content-between mb-5 item"
        v-for="education in educations"
        :key="education"
    >
        <div class="flex-grow-1">
            <h3 class="mb-0">{{ education.institution }}</h3>
            <div class="subheading mb-3">
                {{ education.degree }}
            </div>
            <div v-html="education.description"></div>
        </div>
        <div class="flex-shrink-0">
            <span class="text-primary"
                >{{ formatDate(education.start_date) }} -
                {{ formatDate(education.end_date) }}</span
            >
        </div>
    </div>
</template>

<script>
import moment from "moment";
moment.locale("es");

export default {
    props: ["educations"],
    methods: {
        formatDate(date) {
            return moment(date).format("YYYY");
        },
    },
};
</script>

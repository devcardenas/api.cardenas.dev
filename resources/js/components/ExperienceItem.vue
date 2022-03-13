<template>
    <div class="d-flex flex-column flex-md-row justify-content-between mb-5"  v-for="experience in experiences"
        :key="experience">
        <div class="flex-grow-1">
            <h3 class="mb-0">{{experience.title}}</h3>
            <div class="subheading mb-3">{{experience.company}}</div>
            <div v-html="experience.description"></div>
        </div>
        <div class="flex-shrink-0">
            <span class="text-primary">{{formatDate(experience.start_date)}} - {{isCurrentJob(experience)}}</span>
        </div>
    </div>
</template>

<script>
import moment from 'moment';
moment.locale('es');

export default {
    props: ["experiences"],
    methods: {
        isCurrentJob(experience) {
          return experience.current ? "Presente" : moment( experience.end_date).format("MMM YYYY");
        },
        formatDate(date) {
            return moment(date).format("MMM YYYY");
        }
    },
}
</script>
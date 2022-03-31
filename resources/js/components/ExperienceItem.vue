<template>
    <div
        class="d-flex flex-column flex-md-row justify-content-between mb-5 item"
        v-for="experience in experiences"
        :key="experience"
    >
        <div class="flex-grow-1">
            <div class="d-flex align-items-center mb-3">
                <img
                    :src="experience.logo_company_url ? experience.logo_company_url : '/img/logo-placeholder.png'"
                    alt="logo"
                    width="75"
                    height="75"
                    class="me-3 bg-white p-1"
                />
                <div>
                    <h3 class="mb-0">{{ experience.title }}</h3>
                    <div class="subheading">{{ experience.company }}</div>
                </div>
            </div>
            <div v-html="experience.description"></div>
        </div>

        <div class="flex-shrink-0">
            <span class="text-primary"
                >{{ formatDate(experience.start_date) }} -
                {{ isCurrentJob(experience) }}</span
            >
        </div>
    </div>
</template>

<script>
import moment from "moment";
moment.locale("es");

export default {
    props: ["experiences"],
    methods: {
        isCurrentJob(experience) {
            return experience.current
                ? "Presente"
                : moment(experience.end_date).format("MMM YYYY");
        },
        formatDate(date) {
            return moment(date).format("MMM YYYY");
        },
    },
};
</script>

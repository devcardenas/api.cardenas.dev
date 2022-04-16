<template>
    <div
        class="d-flex flex-column flex-md-row justify-content-between mb-5 item"
        v-for="experience in experiences"
        :key="experience"
    >
        <div class="flex-grow-1">
            <div class="d-flex align-items-center mb-3">
                <img
                    :src="
                        experience.logo_company_url
                            ? experience.logo_company_url
                            : '/img/logo-placeholder.png'
                    "
                    alt="logo"
                    width="65"
                    height="65"
                    class="me-3 bg-white p-1 rounded"
                />
                <div>
                    <h3 class="mb-0">{{ experience.title }}</h3>
                    <div>
                        <span class="subheading me-2">{{ experience.company }}</span>
                        <small><i class="bi bi-geo-alt me-1"></i>{{ experience.location }}</small>
                    </div>
                </div>
            </div>
            <div v-html="experience.description"></div>
        </div>

        <div class="flex-shrink-0 text-end">
            <span class="text-primary"
                >{{ formatDate(experience.start_date) }} -
                {{ isCurrentJob(experience) }}</span
            >
            <br />
            <span class="text-secondary">{{ experience.time }}</span>
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

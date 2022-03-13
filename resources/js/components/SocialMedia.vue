<template>
    <a
        v-for="socialmedia in socials_medias"
        :key="socialmedia"
        class="social-icon text-decoration-none"
        :href="socialmedia.url"
        target="_blank"
        ><span v-html="socialmedia.icon"></span>
    </a>
</template>

<script>
export default {
    props: ["socials_medias"],
};
</script>

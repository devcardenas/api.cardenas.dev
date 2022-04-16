<template>
<hr>
    <footer class="container px-1 pb-3 px-lg-5 pb-lg-3">
        <!-- Footer -->
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="copyright text-muted m-0">
                        Copyright &copy; cardenas.dev {{ year }}
                    </p>
                    <div class="social-icons">
                        <SocialMedia
                            :social_medias="this.$store.state.social_medias"
                        ></SocialMedia>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</template>

<script>
import SocialMedia from './SocialMedia.vue';
import moment from "moment";
moment.locale("es");

export default {
    components: {
        SocialMedia,
    },
    data() {
        return {
            year: moment().format("YYYY"),
        };
    },
};
</script>

<template>
    <Sidebar></Sidebar>
    <!-- Page Content-->
    <div class="container p-0">
        <router-view></router-view>
    </div>
    <Footer></Footer>
</template>

<script>
import Sidebar from './components/Sidebar.vue';
import Footer from './components/Footer.vue';

export default {
    components: {
        Sidebar,
        Footer,
    },
};
</script>

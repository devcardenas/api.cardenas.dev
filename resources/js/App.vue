<template>
    <Sidebar></Sidebar>
    <!-- Page Content-->
    <div class="container-fluid p-0">
        <router-view></router-view>
    </div>
</template>

<script>
import Sidebar from './components/Sidebar.vue';

export default {
    components: {
        Sidebar,
    },
};
</script>

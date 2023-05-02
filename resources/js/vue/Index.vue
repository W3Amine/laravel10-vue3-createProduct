<script setup>
import NavBar from './components/NavBar.vue';
import TheFooter from './components/TheFooter.vue';
</script>


<!-- the index.vue contain the navbar and the footer the current page component -->
<template>
<NavBar />
    <router-view></router-view>
<TheFooter />
</template>

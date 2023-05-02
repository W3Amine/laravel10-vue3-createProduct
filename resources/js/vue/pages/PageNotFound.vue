<script setup>
import TheHeader from '../components/TheHeader.vue';
</script>

<template>
<TheHeader TheTitle="404 page not found :("/>
<div class="row mx-auto col-md-8">
                <div class="col-md-6 mx-auto">
                    <img src="https://cdn.dribbble.com/users/1408464/screenshots/6377404/404_illustration.png" alt="404"
                        class="img-fluid d-block mx-auto" width="600">
                </div>
                <div class="col-md-6 my-auto  mx-auto">
                    <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
                    <p class="lead">
                        The page you’re looking for doesn’t exist.
                    </p>
                    <router-link to="/" class="btn btn-primary">Go Home</router-link>

                </div>
        </div>
</template>

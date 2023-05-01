
<script setup>

defineProps({
    TheTitle : {
    type: String,
    required: true
  },
});

</script>

<template>
    <!-- Heading -->
    <header>
        <div class="bg-primary mb-4">
            <div class="container py-4">
                <h3 class="text-white mt-2">{{TheTitle}}</h3>
            </div>
        </div>
    </header>
    <!-- Heading -->
</template>
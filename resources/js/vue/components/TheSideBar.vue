
<script setup>

import getCategories from '../composables/categories';

import { onMounted , ref , watch } from 'vue'

const selectedOptions = ref([]);



watch(selectedOptions, (selectedOptionsUpdated) => {
  console.log(selectedOptionsUpdated);
})


const { categories, getCategoriesData } = getCategories();


onMounted(() => {
    getCategoriesData();

});



</script>



<template>
    <!-- sidebar -->
    <div class="col-lg-3">
        <div class="card d-lg-block mb-5">
            <div class="accordion">
                <div class="accordion-item">
                    <div class="p-3 h4 text-center"> Brands </div>

                    <div class="accordion-body">
                            <!-- Checked checkbox -->
                            <div class="form-check" v-for="category in categories" :key="category.id">
                               
                                <input v-model="selectedOptions" class="form-check-input" type="checkbox" :value="category.name"
                                    :id="category.name + 'ID'">
                                <label class="form-check-label" :for="category.name + 'ID'">{{ category.name }}</label>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- sidebar -->


</template>
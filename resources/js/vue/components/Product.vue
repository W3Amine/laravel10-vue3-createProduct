<script setup>

defineProps({
    id : Number ,
    name : String,
    description : String ,
    price : [String, Number],
    image : String,
    categories : Array,
});

defineEmits(['deleteProduct']);

</script>



<template>
<div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                <div class="card w-100 my-2 shadow-2-strong"><img
                        :src="image"
                        class="card-img-top">
                    <div class="card-body d-flex flex-column">
                        <div class="">
                            <h5 class="mb-1 me-1">{{ name }}</h5> 
                            <h5 class="mb-1 me-1 text-success">{{ price }} $</h5>
                        </div>
                        <p class="card-text">{{description}}</p>
                        <div class="card-footer d-flex align-items-end pt-3 px-0 pb-0 mt-auto">
                            <a   @click="$emit('deleteProduct' ,id)" class="btn btn-danger shadow-0 me-1">Delete</a></div>
                    </div>
                </div>
            </div>
</template>

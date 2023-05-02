import { ref } from "vue";
import axios from "axios";

export default function getCategories() {
    const categories = ref([]);
    const getCategoriesData = async () => {
        let response = await axios.get("/api/categories/");
        categories.value = response.data;
    };

    return { categories, getCategoriesData };
}

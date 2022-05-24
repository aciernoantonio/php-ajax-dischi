<template>

    <div class="col">
        <select 
        class="form-select w-25" 
        aria-label="Default select example"
        @change="$emit('genreSelected')"
        @input="$emit('input', $event.target.value)">
            <option selected value="">Select Genre</option>
            <option value="rock">Rock</option>
            <option value="pop">Pop</option>
            <option value="jazz">Jazz</option>
            <option value="metal">Metal</option>
        </select>
    </div> 

</template>

<script>
export default {
    name: "genreComponent",
    props: {
        valueSelect: String,
    },

}
</script>
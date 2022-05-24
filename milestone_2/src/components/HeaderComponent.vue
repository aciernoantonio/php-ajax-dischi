<template>
    
    <header>

        <div class="container">

            <div class="row align-items-center justify-content-between">

               <div class="col">
                    <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/2048px-Spotify_logo_without_text.svg.png" alt="">
                </div>

            <GenreSelection v-model="valueSelect" @genreSelected="selected"/>

            </div>

    </div>
        
        
    </header>

</template>

<script>
import GenreSelection from "@/components/genreComponent.vue"
import state from "@/state"

export default {
    name: "HeaderComponent",
    components: {
        GenreSelection
    },

    data() {
        return {
            valueSelect: ""
        }
    },

    methods: {
        selected() {
            state.valueSelect = this.valueSelect
            console.log(state.valueSelect);
        }
    }
}
</script>

<style lang="scss" scoped>

.logo{
    width: 50px;
    margin: 1rem;
}

</style>
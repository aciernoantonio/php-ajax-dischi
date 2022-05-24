<template>

    <main>

      <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-2 offset-1 m-2 text-center px-2 py-1" v-for="(disk, index) in filterGenre" :key="index">

                <div class="card h-100 p-3">
                    <img :src="disk.poster" class="card-img-top" :alt="disk.title">
                    <div class="card-body p-0">

                        <h3 class="card-title my-2">{{disk.title}}</h3>
                        <div class="card-text mt-2 p-0 m-0">{{disk.author}}</div>
                        <div class="card-text p-0 m-0">{{disk.year}}</div>
                        
                    </div>
                </div>

            </div>
        </div>
    </div>  

    </main>

</template>

<style lang="scss" scoped>

main{
    img{
        width: 100%;
        height: 180px;
    }

    h3{
        color: white;
    }

    .card{
        background-color: #2e3a46;
    }

    .card-text{
        color: #656769;
    }

}

</style>

<script>


import state from "@/state"
import axios from "axios"

export default {
    
    data() {
        return {
            link: "http://localhost:8888/PHP/php-ajax-dischi/milestone_2/src/assets/php/db.php",
            disks: [],
            // disk: null,
        }
    },

    mounted() {
        axios
        .get(this.link)
        .then(response => {
            this.disks = response.data.response;
            // console.log(this.disk);
        })
    },

    computed: {
        filterGenre(){
                return this.disks.filter(disk => {
                    console.log(disk.genre);
                    console.log(state.valueSelect)
                    return disk.genre.toLowerCase().includes(state.valueSelect.toLowerCase())
            })
        }
    }

}
</script>


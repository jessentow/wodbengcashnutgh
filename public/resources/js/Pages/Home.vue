<template>
<div>

<app-layout>
<h1>hello world</h1>
    </app-layout>

    <!-- vue img src -->
    <img :src="image" alt="" srcset="">

    <h2>most of us become what we study </h2>

</div>

</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },
        data (){
            return{
                image : "./images/globe-b.png",
                img:    "images/globe-b.png"
            }
        }
    }

</script>

<style scoped>


</style>
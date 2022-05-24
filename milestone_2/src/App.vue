<template>
  <div id="app">

    <SiteHeader/>
    <SiteMain/>

  </div>
</template>

<style lang="scss">

@import "@/assets/scss/style.scss";

</style>

<script>
import SiteHeader from "@/components/HeaderComponent.vue"
import SiteMain from "@/components/MainComponent.vue"


export default {
  name: 'App',
  components: {
    SiteHeader,
    SiteMain
  }
}
</script>



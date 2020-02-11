<template>
  <div id="app">
    <Ticker></Ticker>
    <Navigation></Navigation>
    <router-view/>
  </div>
</template>

<script>
import Ticker from '@/components/Home/Ticker.vue'
import Navigation from '@/components/Home/Navbar.vue'
export default {
  components:{
    Ticker,
    Navigation,
  }
}
</script>

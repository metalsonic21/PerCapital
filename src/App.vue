<template>
  <div id="app">
    <Ticker></Ticker>
    <Navigation></Navigation>
    <router-view/>
    <MyFooter></MyFooter>
  </div>
</template>

<script>
import Ticker from '@/components/Home/Ticker.vue'
import Navigation from '@/components/Home/Navbar.vue'
import MyFooter from '@/components/Home/Footer.vue'
export default {
  components:{
    Ticker,
    Navigation,
    MyFooter,
  }
}
</script>

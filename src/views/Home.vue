<template>
  <div class="home">
    <br>
    <Slide></Slide>
    <Start></Start>
    <Numbers></Numbers>
    <div class="calculator-home">
      <ROI></ROI>
      <SO></SO>
    </div>
    <RSS></RSS>
    <Logos></Logos>
    <Contact></Contact>
    <br>
  </div>
</template>

<script>
// @ is an alias to /src
import Slide from '@/components/Home/Slide.vue'
import Start from '@/components/Home/Start.vue'
import Numbers from '@/components/Home/Numbers.vue'
import ROI from '@/components/Calculators/ROI.vue'
import SO from '@/components/Calculators/SO.vue'
import RSS from '@/components/Home/News.vue'
import Logos from '@/components/Home/Logos.vue'
import Contact from '@/components/Home/Contact.vue'

export default {
  name: 'Home',
  components: {
    Slide,
    Start,
    Numbers,
    ROI,
    SO,
    RSS,
    Logos,
    Contact,
  }
}
</script>

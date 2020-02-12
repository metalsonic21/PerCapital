<template>
  <div class="about">
    <br>
    <Why></Why>
    <Team></Team>
    <Corporate></Corporate>
    <Faq style="margin-bottom:1px"></Faq>
  </div>
</template>

<script>
import Why from '@/components/About/Why.vue'
import Team from '@/components/About/Team.vue'
import Corporate from '@/components/About/Corporate.vue'
import Faq from '@/components/About/Faq.vue'
export default {
  components:{
    Why,
    Team,
    Corporate,
    Faq,
  }
}
</script>
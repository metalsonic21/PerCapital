<template>
  <div class="about">
    <Why></Why>
    <Team></Team>
    <Corporate></Corporate>
  </div>
</template>

<script>
import Why from '@/components/About/Why.vue'
import Team from '@/components/About/Team.vue'
import Corporate from '@/components/About/Corporate.vue'
export default {
  components:{
    Why,
    Team,
    Corporate,
  }
}
</script>
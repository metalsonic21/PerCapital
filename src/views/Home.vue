<template>
  <div class="home">
    <br>
    <Slide></Slide>
  </div>
</template>

<script>
// @ is an alias to /src
import Slide from '@/components/Home/Slide.vue'

export default {
  name: 'Home',
  components: {
    Slide,
  }
}
</script>

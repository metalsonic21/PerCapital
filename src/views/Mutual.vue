<template>
  <div>
      <Description></Description>
      <br><br><br><br>
      <Graph></Graph>
      <br>
  </div>
</template>

<script>
import Description from "@/components/Mutual/Description.vue"
import Graph from '@/components/Mutual/Graph.vue'
export default {
    components:{
        Description,
        Graph,
    }
}
</script>

<style>

</style>
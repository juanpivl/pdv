<template>
  <v-container >
    <carruC />
   
    <nuestroS/>

    <productosP/>


  </v-container>
</template>

<script>
import { defineAsyncComponent } from 'vue';
export default {
  name: 'LandingPage',
  components: {
    carruC: defineAsyncComponent(() => import('@/components/carruC.vue')),
    nuestroS: defineAsyncComponent(()=>import('@/components/nuestroS.vue')),
    productosP: defineAsyncComponent(()=>import('@/components/productosP.vue'))

  }
}
</script>

<style >

.service-name {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.7);
  color: white;
  padding: 10px;
  text-align: center;
  font-weight: bold;
  border-bottom-left-radius: 10%;
  border-bottom-right-radius: 10%;
  font-size: 1.2rem;
}
.container1 {
  margin-top: 10px;
  margin-bottom: 10px;
  
}

.grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  grid-gap: 20px;
  
}

.col {
position: relative;
height: 200px;
}


</style>

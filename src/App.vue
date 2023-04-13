<template>
  <div class="container">

      <navBar/>
   
    <div class="router-view-container">
      <router-view/>
    </div>
    <whatsaC phone-number="+526624501230"/>
    
    <footBar/>
  </div>
</template>

<style>
.container {
  display: flex;
  flex-direction: column;
  height: 100vh;
}

.navBar {
  flex-shrink: 0;
}



.router-view-container {
  flex-grow: 1;
  display: flex;
  justify-content: center;
  align-items: center;
}
</style>

<script>
import { defineAsyncComponent } from 'vue'
export default{
  components:{
    navBar: defineAsyncComponent(()=>import('@/components/navBar.vue')),
    footBar: defineAsyncComponent(()=> import('@/components/footBar.vue')),
    whatsaC : defineAsyncComponent(()=>import('@/components/whatsaC.vue'))
  }
}
</script>

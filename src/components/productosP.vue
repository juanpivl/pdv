<template>
    <v-container fluid class="container1">
       <h1>Productos principales</h1>
       <br>
       <div class="grid">
         <div class="col col1"><div class="service-name">Medias Antiembolicas</div></div>
         <div class="col col2"><div class="service-name">Parches,Vendas y apositos</div></div>
         <div class="col col3"><div class="service-name">Ortopedia basica</div></div>
       </div>
     </v-container>
     <v-container class="container1">
       <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis sint facere ut recusandae minus cum temporibus iure corrupti magni consequuntur saepe, in at. Incidunt nam debitis natus nobis dolores eaque. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta at quos libero dolore minus vero sunt repudiandae eius odio, adipisci atque autem ut ratione fuga ex mollitia dolorem? Quasi, eius?</p>
     </v-container>
 </template>
 
 <script>
 export default {
 
 }
 </script>
 
 <style scoped>
 .col1 {
   grid-column: 1 / span 1;
   grid-row: 1 / span 1;
   background-image: url('https://jobstmx.vtexassets.com/arquivos/ids/155870-1600-1600?v=637097407216930000&width=1600&height=1600&aspect=true');
   background-size: cover;
 }
 
 .col2 {
   grid-column: 2 / span 1;
   grid-row: 1 / span 1;
   background-image: url('http://cdn.shopify.com/s/files/1/0058/8958/9330/articles/productos-bsn-medical_1200x1200.jpg?v=1608144597');
   background-size: cover;
 }
 
 .col3 {
   grid-column: 3 / span 1;
   grid-row: 1 / span 1;
   background-image: url('https://pbs.twimg.com/media/DhX_6XUVQAMz5yp?format=jpg&name=large');
   background-size: cover;
 }
 
 
 
 @media screen and (max-width: 700px) {
   .grid {
     grid-template-columns: 1fr;
   }
 
   .col1 {
     grid-row: 1 / span 1;
   }
 
   .col2 {
     grid-column: 1 / span 1;
     grid-row: 2 / span 1;
   }
 
   .col3 {
     grid-column: 1 / span 1;
     grid-row: 3 / span 1;
   }
 
   
 }
 
 </style>
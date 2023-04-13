<template>
    <a :href="whatsappLink" target="_blank" class="whatsapp-button">
      <i class="fab fa-whatsapp"></i>
      <span>¡Contáctanos por WhatsApp!</span>
    </a>
  </template>
  
  <script>
  export default {
    props: {
      phoneNumber: {
        type: String,
        required: true
      }
    },
    computed: {
      whatsappLink() {
        return `https://wa.me/${this.phoneNumber}`;
      }
    }
  };
  </script>
  
  <style>
  .whatsapp-button {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background-color: #25d366;
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 0.25rem;
    text-decoration: none;
    transition: all 0.3s;
  }
  
  .whatsapp-button:hover {
    background-color: #128c7e;
  }
  
  .whatsapp-button i {
    font-size: 1.5rem;
    margin-right: 0.5rem;
  }
  </style>
  
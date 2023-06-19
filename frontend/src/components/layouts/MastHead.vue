<template>
  <!-- Masthead-->
  <header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
      <!-- Masthead Avatar Image-->
      <img
        class="masthead-avatar mb-5"
        id="avata-image"
        src="@/assets/img/avata.jpg"
        alt="..."
      />
      <!-- Masthead Heading-->
      <h1 class="masthead-heading text-uppercase mb-0">Tran Phuong Duy</h1>
      <!-- Icon Divider-->
      <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
      </div>
      <!-- Masthead Subheading-->
      <p class="masthead-subheading font-weight-light mb-0">
        Intern - Web Developer
      </p>
    </div>
  </header>
</template>

<script>
export default {
  name: "MastHead",
  props: {},
};
</script>

<style>
</style>
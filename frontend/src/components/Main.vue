<template>
  <div>
        <Navigation />
        <MastHead />
        <Portfolio />
        <About />
        <Contact />
        <Footer />
        <ProjectModal />
  </div>
</template>

<script>
import '@/assets/css/styles.css';
import Navigation from './layouts/Navigation.vue';
import MastHead from './layouts/MastHead.vue';
import Portfolio from './sections/Portfolio.vue';
import About from './sections/About.vue';
import Contact from './sections/Contact.vue';
import Footer from './layouts/Footer.vue';
import ProjectModal from './modals/ProjectModal.vue';
export default {
  name: 'MainComponent',
  components: {
    Navigation,
    MastHead,
    Portfolio,
    About,
    Contact,
    Footer,
    ProjectModal
  },
  props: {
    
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>

</style>

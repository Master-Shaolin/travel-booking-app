<template>
  <div>
      <Header />
      <router-view></router-view>
      <Footer />
  </div>
</template>
<script>
  import Home from './pages/Home.vue';
  import Header from './components/Header.vue';
  import Footer from './components/Footer.vue';

  export default {
    components: {
      Home,
      Header,
      Footer
    },
  }
</script>
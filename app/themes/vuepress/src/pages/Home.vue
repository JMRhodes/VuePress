<template>
    <div id="home">
        <appheader></appheader>
        <section class="hero is-primary">
            <div class="hero-body">
                <!--<img src="./../assets/logo.svg">-->

                <h1 class="title">{{ msg }}</h1>
            </div>
        </section>
    </div>
</template>

<script>
  import appheader from './../components/header.vue';
  export default {
    name: 'Home',
    data () {
      return {
        msg: 'Welcome.'
      }
    },
    components: {
      appheader
    }
  }
</script>
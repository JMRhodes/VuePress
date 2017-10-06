<template>
    <div id="home">
        <appheader></appheader>
        <section class="hero is-primary">
            <div class="container">
                <div class="hero-body">
                    <!--<img src="./../assets/logo.svg">-->

                    <h1 class="title">{{ msg }}</h1>
                </div>
            </div>
        </section>
        <appposts></appposts>
        <appfooter></appfooter>
    </div>
</template>

<script>
  import appheader from './../components/header.vue';
  import appposts from './../components/posts.vue';
  import appfooter from './../components/footer.vue';
  export default {
    name: 'Home',
    data () {
      return {
        msg: 'Welcome.'
      }
    },
    components: {
      appheader,
      appposts,
      appfooter
    }
  }
</script>
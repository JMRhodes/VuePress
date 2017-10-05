<template>
    <div id="page">
        <appheader></appheader>
        <section class="hero is-primary">
            <div class="hero-body">
                <!--<img src="./../assets/logo.svg">-->

                <h1 class="title">{{ pageSlug }}</h1>
            </div>
        </section>
    </div>
</template>

<script>
  import appheader from './../components/header.vue';
  export default {
    name: 'Page',
    data(){
      return {
        pageSlug: ''
      }
    },
    components: {
      appheader
    },
    created(){
      this.pageSlug = this.$route.params.pageSlug;
    }
  }
</script>
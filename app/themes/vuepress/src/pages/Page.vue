<template>
    <div id="page">
        <appheader></appheader>
        <section class="hero is-primary">
            <div class="hero-body">
                <!--<img src="./../assets/logo.svg">-->

                <h1 class="title">{{ pageSlug }}</h1>
            </div>
        </section>

        {{pageData}}
    </div>
</template>

<script>
  import appheader from './../components/header.vue';
  import axios from 'axios';
  export default {
    name: 'Page',
    data(){
      return {
        pageSlug: ' ',
        pageData: []
      }
    },
    components: {
      appheader
    },
    created(){
      axios.get('http://vuepress.local/wp-json/wp/v2/pages/?slug=' + this.$route.params.pageSlug)
        .then(response => {
          this.pageSlug = response.data[0].title.rendered;
          this.pageData = response.data[0];
        })
        .catch(e => {
          this.errors.push(e)
        })
    }
  }
</script>
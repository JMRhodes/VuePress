<template>
    <div id="page">
        <appheader></appheader>
        <section class="hero is-primary">
            <div class="hero-body">
                <!--<img src="./../assets/logo.svg">-->

                <h1 class="title">{{ pageTitle }}</h1>
            </div>
        </section>
        <section class="section" v-html="pageContent">
            {{pageContent}}


        </section>
    </div>
</template>

<script>
  import appheader from './../components/header.vue';
  import axios from 'axios';
  export default {
    name: 'Page',
    data(){
      return {
        pageTitle: ' ',
        pageContent: ' ',
        pageData: []
      }
    },
    components: {
      appheader
    },
    created () {
      this.fetchData()
    },
    watch: {
      '$route': 'fetchData'
    },
    methods: {
      fetchData () {
        axios.get('http://vuepress.local/wp-json/wp/v2/pages/?slug=' + this.$route.params.pageSlug)
          .then(response => {
            this.pageTitle = response.data[0].title.rendered;
            this.pageContent = response.data[0].content.rendered;
            this.pageData = response.data[0];
          })
          .catch(e => {
            this.errors.push(e)
          })
      }
    }
  }
</script>
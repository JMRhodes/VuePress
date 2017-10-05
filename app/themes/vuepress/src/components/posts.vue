<template>
    <section class="section columns is-multiline">
        <div class="column is-3" v-for="item in postItems">
            <div class="box">
                <article class="media">
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>{{item.title.rendered}}</strong>
                                <small>{{item.date}}</small>
                                <div v-html="item.excerpt.rendered">
                                    {{item.excerpt.rendered}}

                                </div>
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>
</template>

<script>
  import axios from 'axios';
  export default {
    name: 'posts',
    data(){
      return {
        postItems: ''
      }
    },
    created(){
      axios.get('http://vuepress.local/wp-json/wp/v2/posts')
        .then(response => {
          console.log(response.data);
          this.postItems = response.data;
        })
        .catch(e => {
          this.errors.push(e)
        })
    }
  }
</script>
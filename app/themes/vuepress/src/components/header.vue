<template>
    <div class="container">
        <nav class="navbar" role="navigation" aria-label="dropdown navigation">
            <router-link :to="'/'" class="navbar-item">
                <img src="./../assets/logo.svg" width="36" height="28">
            </router-link>

            <router-link :to="'/about'" class="navbar-item">
                About

            </router-link>

            <router-link :to="'/sample-page'" class="navbar-item">
                Sample Page

            </router-link>

            <!--<router-link :to="item.title" class="navbar-item" :data="menuItems" :key="menuItems.ID" v-for="item in menuItems">-->
            <!--{{item.title}}-->
            <!--</router-link>-->
        </nav>
    </div>
</template>

<script>
  import axios from 'axios';
  export default {
    name: 'header',
    data(){
      return {
        menuItems: ''
      }
    },
    created(){
      axios.get('http://vuepress.local/wp-json/menus/v1/menus/primary')
        .then(response => {
          this.menuItems = response.data.items;
        })
        .catch(e => {
          this.errors.push(e)
        })
    }
  }
</script>
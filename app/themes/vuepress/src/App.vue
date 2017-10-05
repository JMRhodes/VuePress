<template>
    <div id="app">
        <img src="./assets/logo.svg">

        <h1 class="title">{{ msg }}</h1>
    </div>
</template>

<script>
  export default {
    name: 'app',
    data () {
      return {
        msg: 'Welcome.'
      }
    }
  }
</script>

<style lang="scss">
    #app {
        font-family: 'Avenir', Helvetica, Arial, sans-serif;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        color: #2c3e50;
        margin-top: 60px;
    }

    img {
        max-width: 128px;
        height: auto;
    }
</style>

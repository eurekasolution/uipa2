<template>
  <div class="container">
      <div class="row rowLine">
          <div class="col">
              <h1 class="text-primary">{{ message }} </h1>
          </div>
      </div>
      <div class="row rowLine">
          <div class="col">
              <router-link to="/">Home</router-link> | 
              <router-link to="/about">About</router-link>
              <router-view></router-view>
          </div>
      </div>
  </div>

</template>

<!--
  Vue Routing

    routing을 하려면 프로그램 설치가 되어 있어야 사용 가능하다.

    cmd창에서
    npm install vue-router@next

    $> npm install vue-router@next
    #> npm install vue-router@next

    Home, About 페이지가 있다고 가정하면

    원하는 소스트리의 구조

    main.js,
    App.vue,
    componets/Home.vue,
    components/About.vue, 
    
-->


<script>
  import { ref, computed } from 'vue'

  export default {
    setup() {
      const message = ref("Vue Routing ");

      return {
        message,
      }
    },

    // setup() 밖에..
    methods : {
      sayHello() {
        alert("Hello Vue 3");
      }
    }

  }
</script>

<style scoped>

  a:link { text-decoration:none; color:#333333; }
  a:hover { text-decoration:underline; color:#0000FF; }
  a:visited { text-decoration:none; color:#333333; }

  table { border-collapse: collapse; }


  .row {
    min-height:30px;
    padding:10px 0px 10px 0px;
  }

  .rowLine {
      border-left:0px solid #CCCCCC;
      border-right:0px solid #CCCCCC;
      border-bottom:1px dotted #CCCCCC;
      border-top:0px solid #CCCCCC;
  }
</style>
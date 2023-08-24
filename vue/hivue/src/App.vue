<template>
  <div class="container">
      <div class="row rowLine">
          <div class="col">
              <h1 class="text-primary">{{ message }} </h1>
          </div>
      </div>
      <div class="row rowLine">
          <div class="col">
              CPU 가격
          </div>
          <div class="col">
              <input type="text" class="form-control" v-on:input="price=$event.target.value" v-bind:value="price">
          </div>
      </div>
  </div>
</template>

<script>
  import { ref, watch } from 'vue'

  export default {
    setup() {
      const message = "Vue Watch ";
      const items = ref([
        { name : "CPU", price : 1000, count:1 },
        { name : "MB", price : 1200, count:2 },
        { name : "RAM", price : 800, count:1 },
      ]);

      const price = ref(10000);

      watch(price, (cur, prev) => {
        console.log(prev + " ------ " + cur);
      });
      
      return {
        message,
        items
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
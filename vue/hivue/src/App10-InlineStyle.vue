<template>
  <div class="container">
      <div class="row rowLine">
          <div class="col">
              <h1 class="text-primary">{{ message }} </h1>
          </div>
      </div>
  </div>

  <p v-bind:style="myStyle">{{ message }} </p>
  <p v-bind:style="yourStyle">{{ yourMessage }} </p>

</template>

<!--
  Vue Inline Style

  Style Sheet를 사용하지 않고, 
  데이터로 스타일을 만들고, 이것을 v-bind로 읽는 인라인스타일
-->


<script>
  import { ref, computed } from 'vue'

  export default {
    setup() {
      const message = ref("Vue Inline Style ");
      const yourMessage = ref("Vue Inline Style Your Message ");
      
      const myStyle = ref({
        color: "#ABCDEF",
        background: "pink",
        fontSize: "20px"
      });

      const yourStyle = ref({
        color: "#0000FF",
        background: "pink",
        fontSize: "5em"
      });


      return {
        message, 
        yourMessage,
        myStyle,
        yourStyle
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
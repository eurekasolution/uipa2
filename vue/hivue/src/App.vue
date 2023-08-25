<template>
  <div class="container">
      <div class="row rowLine">
          <div class="col">
              <h1 class="text-primary">{{ message }} </h1>
          </div>
      </div>
      <div class="row rowLine">
            <div class="col">
                <div id="app">
                    <AxiosComponent/>
                </div>
            </div>
      </div>
  </div>

</template>

<!--
  Vue Modal

    
-->


<script>
  import { ref, computed } from 'vue'
  import AxiosComponent from "@/components/Axios.vue"

  export default {
    components: {
        AxiosComponent
    },

    name : "App",
    

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
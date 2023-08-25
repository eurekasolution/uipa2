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
      <div class="row rowLine">
          <div class="col">
              <button @click="openModal" type="button" class="btn btn-primary">Open Modal</button>
              <modal title="모달제목" v-if="isVisible" @close="closeModal">
                <p>
                    모달창 입니다. <br>
                    모달창 입니다. <br>
                    모달창 입니다. <br>
                    모달창 입니다. <br>
                    모달창 입니다. <br>
                    모달창 입니다. <br>
                    모달창 입니다. <br>
                </p>
              </modal>
          
          </div>
      </div>
  </div>

</template>

<!--
  Vue Modal
    
    
-->


<script>
  import { ref, computed } from 'vue'
  import Modal from "./components/Modal.vue"

  export default {
    components: {
        Modal
    },
    setup() {
      const message = ref("모달 부모창");
      const isVisible = ref(false);
      const modalTitle = ref("모달 제목");

      const openModal = () => { 
        isVisible.value = true;
      }
      const closeModal = () => { 
        isVisible.value = false;
      }


      return {
        message,
        isVisible,
        openModal,
        closeModal
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
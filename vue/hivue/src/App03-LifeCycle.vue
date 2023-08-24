<template>
  <h1>{{ message }} </h1>
</template>

<!-- Editor에서 색상 지원 설치 : Vetur -->
<!--
  Vue Life Cycle
-->

<script>
  import { onBeforeMount, onMounted, onBeforeUpdate, onUpdated } from 'vue'

  export default {
    setup() {
      const message = "afdsVue Life Cycle ";

      onBeforeMount( () => {
        console.log("beforeMount");
      });
      onMounted( () => {
        console.log("mounted");
      });
      onBeforeUpdate( () => {
        console.log("before update");
      });
      onUpdated( () => {
        console.log("updated");
      });

      return {
        message
      }
    }
  }
</script>

<style scoped>
  h1 { color:#FF0000;}
</style>
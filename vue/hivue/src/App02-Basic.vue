<template>
  <h1>{{ message }} </h1>
</template>

<!-- Editor에서 색상 지원 설치 : Vetur -->
<!--
  Vue.js : UI개발을 위한 프로그레시브 JS 프레임워크
-->

<script>
  export default {
    setup() {
      const message = "Hello dasfdf test Vue World ... setup() ";

      return {
        message
      }
    }
  }
</script>

<style scoped>
  h1 { color:#FF0000;}
</style>
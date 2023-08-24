<template>
  <h1>{{ message }} </h1>
  <h2>{{ items }} </h2>
  <ul>
    <li v-for="item in items" v-bind:key="item.name"> 
      {{ item.name }} : {{ item.price }}  * {{ item.count}} = {{ item.price * item.count}} 원
    </li>
  </ul>


</template>

<!-- Editor에서 색상 지원 설치 : Vetur -->
<!--
  data() 속성
  Vue 에서는 반응형 변수, Vue 의 핵심 개념 중 하나.
  데이터 변화를 감지하고 자동으로 DOM에 업데이트를 수행

  App.vue 템플릿 문법
    items 데이터와 뷰의 관계
  v-bind

    HTML : #id, .class, style등의 HTML 속성값에 뷰 데이터 값 연결

-->

<script>
  import { ref, onBeforeMount, onMounted, onBeforeUpdate, onUpdated } from 'vue'

  export default {
    setup() {
      const message = "Vue Life Cycle ";
      const items = ref([
        { name : "CPU", price : 1000, count:1 },
        { name : "MB", price : 1200, count:2 },
        { name : "RAM", price : 800, count:1 },
      ]);

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
        message,
        items
      }
    }
  }
</script>

<style scoped>
  h1 { color:#FF0000;}
</style>
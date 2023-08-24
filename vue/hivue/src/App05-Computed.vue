<template>
  <div class="container">
      <div class="row rowLine">
          <div class="col">
              <h1 class="text-primary">{{ message }} </h1>
          </div>
      </div>
      <div class="row rowLine">
          <div class="col">
              <h2>{{ items }} </h2>
          </div>
      </div>

      <div v-for="item in items" v-bind:key="item.name">
        <div class="row rowLine">
            <div class="col-3">
                {{ item.name }} 의 가격
            </div>
            <div class="col">
              <input type="text" class="form-control text-end" v-on:input="item.price=$event.target.value" v-bind:value="item.price">
            </div>
        </div>
      </div>

      <div v-for="item in items" v-bind:key="item.name">
        <div class="row rowLine">
            <div class="col-3">
                {{ item.name }} 의 가격
            </div>
            <div class="col">
              {{ item.name }} : {{ item.price }}  * {{ item.count}} = {{ item.price * item.count}} 원
            </div>
        </div>
      </div>


      <div class="row rowLine">
          <div class="col-3">
              합계
          </div>
          <div class="col">
            {{ totalPrice }}
          </div>
      </div>


  </div>

  <!--
  
  <ul>
    <li v-for="item in items" v-bind:key="item.name"> 
      {{ item.name }} 의 가격 : 
      <input type="text" v-on:input="item.price=$event.target.value" v-bind:value="item.price">
    </li>
  </ul>

  <hr>

  <ul>
    <li v-for="item in items" v-bind:key="item.name"> 
      {{ item.name }} : {{ item.price }}  * {{ item.count}} = {{ item.price * item.count}} 원
    </li>
  </ul>

  <hr>
  <p>합계 : {{ totalPrice }} 원 </p>

  -->


</template>

<!-- Editor에서 색상 지원 설치 : Vetur -->
<!--
  data() 속성
  computed 속성
    기본 데이터에서 계산된 값을 속성으로 공개.
    복잡한 수식을 미리 계산하기
    렌더링 속도 개선.

-->

<script>
  import { ref, computed, onBeforeMount, onMounted, onBeforeUpdate, onUpdated } from 'vue'

  export default {
    setup() {
      const message = "Vue Life Cycle ";
      const items = ref([
        { name : "CPU", price : 1000, count:1 },
        { name : "MB", price : 1200, count:2 },
        { name : "RAM", price : 800, count:1 },
      ]);

      const totalPrice = computed(() => {
        return items.value.reduce( function(sum, item){
          return sum + (item.price * item.count);
        }, 0);
      });

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
        items,
        totalPrice
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
<template>
  <div class="container">
      <div class="row rowLine">
          <div class="col">
              <h1 class="text-primary">{{ message }} </h1>
          </div>
      </div>
      <div class="row rowLine">
          <div class="col-3">
              v-on:input id
          </div>
          <div class="col">
              <input type="text" class="form-control" v-on:input="id=$event.target.value" v-bind:value="id">
          </div>
      </div>
      <div class="row rowLine">
          <div class="col-3">
              v-on:change pass
          </div>
          <div class="col">
              <input type="text" class="form-control" v-on:change="pass=$event.target.value" v-bind:value="pass">
          </div>
      </div>
      <div class="row rowLine">
          <div class="col-3">
              v-bind memo
          </div>
          <div class="col">
              <textarea rows="3" class="form-control" v-bind:value="memo"></textarea>
          </div>
      </div>

      <div class="row rowLine">
          <div class="col-3">
              v-on:change dev
          </div>
          <div class="col">
              <input type="checkbox" v-on:change="controlCheckBox">
          </div>
          <div class="col">
              <input type="checkbox" v-on:change="controlCheckBox2">
          </div>
          <div class="col">
              <input type="checkbox" v-on:change="controlCheckBox2($event)">
          </div>
          <div class="col">
              <input type="checkbox" v-on:change="controlCheckBox3('my message')">
          </div>
          <div class="col">
              <input type="checkbox" v-on:change="controlCheckBox4('msg + event', $event)">
          </div>

      </div>

      <div class="row rowLine">
          <div class="col-3">
              v-show forein
          </div>
          <div class="col">
              <span v-show="foreigner === 'yes' ">외국인</span>
          </div>
      </div>

      <div class="row rowLine">
          <div class="col-3">
              v-for hobby
          </div>
          <div class="col">
              <ol>
                  <li v-for="hobby in hobbyList">{{ hobby }}</li>
              </ol>
          </div>
      </div>

      <div class="row rowLine">
          <div class="col-3">
              v-if else gender
          </div>
          <div class="col">
              성별 <span v-if="gender === 'male' ">Male </span> 
              <span v-else>Female</span>
          </div>
      </div>
      <div class="row rowLine">
          <div class="col-3">
              v-if else if
          </div>
          <div class="col">
              <span v-if="nationality == '01' ">Korea</span>
              <span v-else-if="nationality == '02' ">USA</span>
              <span v-else-if="nationality == '03' ">China</span>
              <span v-else>Unknown</span>
          </div>
      </div>
      <div class="row rowLine">
          <div class="col-3">
              v-bind nat
          </div>
          <div class="col">
              <select class="form-control" v-bind:value="nationality">
                  <option value="" disabled>Please Select</option>
                  <option value="01">Korea</option>
                  <option value="02">USA</option>
                  <option value="03">China</option>

              </select>
          </div>
      </div>
      <div class="row rowLine">
          <div class="col-3">
              v-model car
          </div>
          <div class="col">
              <select class="form-control" v-model="carList" multiple>
                  <option value="" disabled>Please Select</option>
                  <option >BMW</option>
                  <option >Benz</option>
                  <option >Genesis</option>
              </select>
          </div>
      </div>

  </div>
</template>

<!--
  Vue Event
    텍스트 입력 요소 input 이벤트 처리 할 때 사용
    뷰 인스턴스의 데이터 id에 사용자 키 입력
    입력한 값을 데이터에 반영

    v-bind  .. 값이 변하면 v-model 양방향 directives를 이용해서 데이터 변경
-->


<script>
  import { ref, computed } from 'vue'

  export default {
    setup() {
      const message = "Vue Event ";
      
      const id = ref("id");
      const pass = ref("pass");
      const memo = ref("memo");

      const developer = ref(false);
      const foreigner = ref("no");

      const hobbyList = ref(["sleeping", "sports", "music"]);
      const gender = ref("male");

      const nationality = ref("01");
      const carList = ref(["BMW", "Benz"]);

      // computed
      const getNationality = computed(() => {
        if(nationality.value === "01")
        {
          return "Korea";
        } else if(nationality.value === "02")
        {
          return "USA";
        } else if(nationality.value === "03")
        {
          return "China";
        } else
        {
          return "Unknown";
        }
      });

      const onSubmit = () => {
        console.log("id = ", id);
      }

      const controlCheckBox = () => {
        console.log("control Check Box");
      }
      const controlCheckBox2 = (event) => {
        console.log("control Check Box2");
        console.log("event = ", event);
      }
      const controlCheckBox3 = (msg) => {
        console.log("control Check Box3");
        console.log("msg = ", msg);
      }
      const controlCheckBox4 = (msg, event) => {
        console.log("control Check Box4");
        console.log("msg = " + msg + ", event = ", event);
      }

      return {
        message,
        id, pass, memo, developer, foreigner,
        hobbyList, gender, nationality, carList, getNationality,
        onSubmit, controlCheckBox, controlCheckBox2, controlCheckBox3, controlCheckBox4
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
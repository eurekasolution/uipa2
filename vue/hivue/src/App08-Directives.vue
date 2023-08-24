<template>
  <div class="container">
      <div class="row rowLine">
          <div class="col">
              <h1 class="text-primary">{{ message }} </h1>
          </div>
      </div>
      <div class="row rowLine">
          <div class="col-3">
              v-bind id
          </div>
          <div class="col">
              <input type="text" class="form-control" v-bind:value="id">
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
              v-if dev
          </div>
          <div class="col">
              <span v-if="developer">개발자</span>
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

<script>
  import { ref, computed } from 'vue'

  export default {
    setup() {
      const message = "Vue Directive , if, for,. ";
      
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


      return {
        message,
        id, pass, memo, developer, foreigner,
        hobbyList, gender, nationality, carList, getNationality
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
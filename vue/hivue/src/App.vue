<template>
  <div class="container">
      <div class="row rowLine">
          <div class="col">
              <h1 class="text-primary">JSON DATA</h1>

              {{jsonData}}
          </div>
      </div>
      <div class="row rowLine">
            <div class="col">
                <ul>
                    <li v-for="(person, index) in jsonData" :key="index">
                        이름 : {{ person.name }} 나이 : {{ person.age }}
                    </li>
                </ul>
            </div>
      </div>
  </div>

</template>

<!--
  Vue Modal

    
-->


<script>
  import { ref, onMounted } from 'vue'
  import fs from 'fs'

  export default {
    setup() {
        const jsonData = ref([]);

        // JSON 경로
        const path = "./src/person.json";
        // JSON 파일을 비동기로 읽기

        const readJsonFile = async () => {
            console.log("read json file")

            try {
                const response = await fetch(path);
                if(!response.ok) {
                    throw new Error("JSON 파일 로딩 에러")
                }
                const data = await response.json();
                jsonData.value = data;

                console.log("data = " + data)
            }catch(error)
            {
                console.error("JSON FILE Loading Error:" , error);
            }
        };

        onMounted(async () => {
            console.log("mounted");
            readJsonFile();
        });
        

        return {
            jsonData
        };

        
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
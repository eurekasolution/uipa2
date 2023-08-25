<!-- 
    Axios.vue 
        cURL : Client URL
    설치 : $> npm install axios    
-->

<template>
    <div>
        <h1> HTTP Request Result </h1>
    </div>

    <div v-if="posts.length > 0 ">
        <ul>
            <li v-for="post in posts" key="post.id">{{post.id}} - {{post.title}}</li>
        </ul>
    </div>

    <div v-if="error">
        <p> Error </p>
        <p>{{ error }}</p>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    setup() {
        
    },

    data() {
            return {
                posts: [],
                error: null
            }
    },
    mounted() {
        // HTTP GET Request
        axios
            .get("https://jsonplaceholder.typicode.com/posts")
            .then(response => {
                // 성공했으니까.
                this.posts = response.data;
                console.log("receive data = " + response.data);
            })
            .catch(error => {
                // 오류처리
                console.log("HTTP Request Error : " , error);
                this.error = error.message;
            })
    }
}
</script>

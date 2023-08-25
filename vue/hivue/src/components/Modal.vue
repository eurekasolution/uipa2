<!-- Modal.vue 
    teleport을 이용해서 모달 구현
-->

<template>
    <teleport to="body">
        <div class="modal-wrapper">
            <div class="modal-container">
                <div class="modal-header">
                    <h3>{{ title }} {{ message }}</h3>
                    <button  @click="closeModal">Close</button>
                </div>
                <div class="modal-body">
                    <!-- 모달 내용 -->
                    <slot></slot>
                </div>
            </div>
        </div>
    </teleport>
</template>

<script>
import { ref } from 'vue'

export default{
    setup() {
        const message = ref("모달: 텔레포트");

        return {
            message
        }
    },
    methods: {
        closeModal() 
        {
            this.$emit("close");
        }
    },

    props: {
        title: String,
    }
}
</script>

<style>
    .modal-wrapper {
        position:fixed;
        top:0;
        left:0;
        width:100%;
        height:100%;
        background:rgba(0, 0, 0, 0.5);
        display:flex;
        justify-content: center;
        align-items: center;
    }

    .modal-container {
        background:#FFFFFF;
        padding:20px;
        border-radius:10px;
        box-shadow:0px 0px 10px rgba(0, 0, 0, 0.3);
        width:400px;
    }
    .modal-header {
        display:flex;
        justify-content: space-between;
        align-items:center;
        margin-bottom: 10px;
    }

</style>

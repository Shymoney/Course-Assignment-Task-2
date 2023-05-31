<script setup>
import {onMounted} from "vue";
import ModalComponent from "../components/ModalComponent.vue";


let myModal;

onMounted( () => {
    myModal = new bootstrap.Modal(document.getElementById('alertPopUp'))
    // myModal = $('#alertPopUp').modal('toggle');
})

const showPopup = () => {
    myModal.show();
}
</script>

<template>

    <button @click="showPopup" type="button" data-toggle="modal" data-target="#alertPopUp">Launch modal</button>
    <ModalComponent></ModalComponent>
</template>



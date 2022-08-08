<template>
 <h1>Vapes</h1>
 <hr>

<div class="d-flex align-contents-between">
    <div class="card mb-3" v-for="vape in vapes" :key="vape.id">
        <div class="card-header">
            <h5> Vape: {{vape.id}}</h5>
        </div>
        <div class="card-body" >
            <h6>Vape Information</h6>
            <table class="table">
                <tr>
                    <th>Brand:</th>
                    <td>{{vape.brand}}</td>
                </tr>
                <tr>
                    <th>Types:</th>
                    <td>{{vape.type}}</td>
                </tr>
                <tr>
                    <th>Color:</th>
                    <td>{{vape.color}}</td>
                </tr>
                <tr>
                    <th>Price:</th>
                    <td>{{vape.price}}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
</template>

<script setup>
import Layout from '../Shared/Layout.vue'
</script>
<script>
export default {
    layout: Layout,
    props: {
        vapes: Array
    }
}
</script>

<style scoped>
.card{
    width: 375px;
}

</style>
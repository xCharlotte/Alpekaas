<template>
    <div class="card-item">
        <div class="card-header">
            <img src="img/collaboration.svg" v-if="card.type === 'Samenwerking'">
            <img src="img/communication.svg" v-if="card.type === 'Communicatie'">
            <h5>{{card.type}}</h5>
        </div>
        <p v-text="card.value"></p>
    </div>

</template>

<script>
    module.exports = {
        props: ['card']
    }
</script>

<style scoped>
    .card-item {
        width: 40%;
        min-height: 75px;
        background-color: white;
        color: black;
        border-radius: 10px;
        margin-left: 45px;
        margin-top: 20px;
        padding: 10px 10px 10px 10px;
        word-break: break-all;
        justify-content: center;
        flex-direction: column;
        text-align: center;
        box-shadow: 0px 3px 8px -1px rgba(0, 0, 0, 0.48);
        display: flex;
    }


    .card-item h5 {
        font-weight: bold;

    }



    .card-header img {
        width: 30px;
        height: 30px;
        float: left;
    }

    .card-header {
        float: left;
    }
</style>

<template>
    <div>
        <div v-bind:class="addClassToList">
            <div v-if="type === 'positive'">
                <h3 class="title" >Wat ging er goed?</h3>
            </div>
            <div v-else>
                <h3 class="title"> WHY DO YOU HATE ME? </h3>
            </div>

            <div class="card-group" >
                <card v-for="(card, index) in cards" :key="index" :card="card"></card>
            </div>
            <div class="button-group">
                <!--Samenwerking-->
                <input v-show="seena" class="button-input" type="text" v-model="collaboration_input">

                <button @click="seena = !seena" v-on:click="addCard('Samenwerking')" >Samenwerking</button>

                <!--Communicatie-->
                <input v-show="seenb" class="button-input" type="text" v-model="communication_input">

                <button @click="seenb = !seenb" v-on:click="addCard('Communicatie')" >Communicatie</button>
            </div>
        </div>






    </div>
</template>




<script>
    export default {
        props: ['type'],
        data() {
            return {
                seena: false,
                seenb: false,
                cards: [],
                collaboration_input: '',
                communication_input: '',
            }
        },
        computed: {
            addClassToList: function () {
                return {
                    list: this.type === 'positive',
                    falselist: this.type === 'negative'
                }
            }
        },
        methods: {
            addCard: function (type) {
                switch (type){
                    case 'Communicatie':
                        if (this.communication_input) {
                            this.cards.push({type: type, value: this.communication_input});
                            this.communication_input = '';
                        }
                        break;

                    case 'Samenwerking':
                        if (this.collaboration_input) {
                            this.cards.push({type: type, value: this.collaboration_input});
                            this.collaboration_input = '';
                        }
                        break;
                }
            }
        }
    };

</script>

<style >
    .list {
        min-height: 85vh;
        width: auto;
        background-color: #16d3bd;
        padding: 15px 25px 15px 50px;
        justify-content: center;
        margin-bottom: 10px;

    }

    .falselist {
        min-height: 85vh;
        width: auto;
        background-color: #f36050;
        padding: 15px 25px 15px 50px;
        justify-content: center;
        margin-bottom: 10px;

    }

    .button-group {
        width: 100px;
        height: 50px;
        position: absolute;
        background-color: black;
        bottom: 20px;
        right: 20px;
    }

</style>

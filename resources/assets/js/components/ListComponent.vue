<template>
    <div>
        <div class="list">
            <h3 class="title" >Wat ging er goed?</h3>
            <div class="card-group" >
                <card v-for="card in cards" :key="card" :card="card"></card>
            </div>
        </div>

        <!--Samenwerking-->
        <input class="test" id="input" type="text" v-model="collaboration_input">

        <button v-on:click="addCard('Samenwerking')" >Samenwerking</button>

        <!--Communicatie-->
        <input class="test" id="swag" type="text" v-model="communication_input">

        <button v-on:click="addCard('Communicatie')" >Communicatie</button>




    </div>
</template>




<script>
    export default {
        data() {
            return {
                cards: [],
                collaboration_input: '',
                communication_input: '',
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

<style scoped>
    .list {
        min-height: 85vh;
        width: 700px;
        background-color: #2ab27b;
        padding: 15px 75px 15px 100px;
        justify-content: center;

    }
</style>

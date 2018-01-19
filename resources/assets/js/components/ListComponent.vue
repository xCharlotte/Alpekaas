<template>
    <div>
    <!-- Modal -->
    <div class="modal fade" id="getModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content size">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" v-bind:data="comp1">{{comp1}}</h4>
                </div>
                <div class="modal-body text-center square-options">
                    <form>
                        <textarea v-show="seena" class="button-input" type="text" v-model="collaboration_input"></textarea>
                        <input type="submit" v-on:click="addCard('Samenwerking')" value="Submit" data-dismiss="modal">
                    </form>

                </div>
            </div>

        </div>
    </div>

        <div v-bind:class="addClassToList">
            <div v-if="type === 'positive'">
                <h3 class="titleg" >Wat ging er goed?</h3>
            </div>
            <div v-else>
                <h3 class="titlef"> Wat kon er beter? </h3>
            </div>

            <div class="card-group" >
                <card v-for="(card, index) in cards" :key="index" :card="card"></card>
            </div>
            <div class="button-group">
                <button class="showbutton" v-on:click="show = !show"><img class="sbuttonimg" src="img/additemretro.svg"></button>
                <transition name="fade">
                    <div v-if="show" class="competenties">
                        <!--Samenwerking-->
                        <button data-toggle="modal" data-target="#getModal" class="samenwerking" @click="seena = !seena" v-on:click="addCard('Samenwerking')" >
                            <img src="img/collaboration.svg" class="samenwerkingimg">Samenwerking
                        </button>

                        <!--<input v-on:keyup.enter="addCard('Samenwerking')" v-show="seena" class="button-input" type="text" v-model="collaboration_input">-->

                        <!--Communicatie-->
                        <input  v-show="seenb" class="button-input" type="text" v-model="communication_input">

                        <button class="communicatie" @click="seenb = !seenb" v-on:click="addCard('Communicatie')" ><span><img src="img/communication.svg" class="samenwerkingimg"> </span>Communicatie</button>
                    </div>
                </transition>
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
                show: false,
                showModal: false,
                comp1: 'Samenwerking',
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

    .fade-enter-active, .fade-leave-active {
        transition: opacity .5s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }

    .list {
        min-height: 85vh;
        width: auto;
        background-color: #16d3bd;
        padding: 15px 25px 15px 50px;
        justify-content: center;
        margin-bottom: 10px;
        border-radius: 10px;

    }

    .falselist {
        min-height: 85vh;
        width: auto;
        background-color: #f36050;
        padding: 15px 25px 15px 50px;
        justify-content: center;
        margin-bottom: 10px;
        border-radius: 10px;
    }

    .showbutton {
        width: 60px;
        height: 60px;
        position: absolute;
        background-color: white;
        color: #2ab27b;
        bottom: 20px;
        right: 20px;
        border-radius: 150px;
        border: none;
        outline: 0;
    }

    .sbuttonimg {
        width: 40px;
        height: 40px;
        bottom: 20px;
        right: 20px;
    }

    .competenties {
        bottom: 85px;
        right: 35px;
        width: 226px;
        height: 200px;
        background-color: #3da799;
        position: absolute;
        padding: 25px;
        display: block;
        border-radius: 10px;
    }

    .samenwerking {
        width: 175px;
        height: 50px;
        border-radius: 10px;
        background-color: #ffffff;
        bottom: 155px;
        right: 30px;
        margin-top: 10px;
        justify-content: center;
    }

    .communicatie {
        width: 175px;
        height: 50px;
        border-radius: 10px;
        background-color: #ffffff;
        bottom: 90px;
        right: 30px;
        margin-top: 10px;
        justify-content: center;
    }

    .samenwerkingimg {
        height: 25px;
        width: 25px;
        margin-right: 15px;
    }

    .titleg {
        width: 316px;
        height: 52px;
        border-radius: 10px;
        background-color: #3da799;
        justify-content: center;
        margin: auto;
        padding: 10px;
        color: white;
        text-align: center;

    }

    .titlef {
        width: 316px;
        height: 52px;
        border-radius: 10px;
        background-color: #de5144;
        justify-content: center;
        margin: auto;
        padding: 10px;
        color: white;
        text-align: center;

    }

</style>

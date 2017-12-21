<template>


<div class="flex-container">
  <div class="card-container">
    <div class="card-group">
      <card v-for="card in cards" :key="card" :card="card"></card>
    </div>
  </div>


  <div class="samenwerking">
    <input id="input" rows="5" v-model="samenwerking_input" v-if="seen" @keyUp.$enter="addCard" value="Waz jouw probleem?"></input>
      <button @click="addCard('Samenwerking')"  v-if="seen">Submit</button>
      <input type="image" src="img/collaboration.svg" @click="seen = !seen" width="30px" height="30px">
  </div>

    <div class="">
      <input id="input" rows="5" v-model="communication_input" v-if="seen" @keyUp.$enter="addCard" value="Waz jouw probleem?"></input>
        <button @click="addCard('Communicatie')"  v-if="seen">Submit</button>
        <input id="CUCKOLD" type="image" src="img/communication.svg" @click="seen = !seen" width="30px" height="30px">
    </div>

</div>
</template>
<script>

// <div>
//         <div class="list">
//             <h3 class="title" >Wat ging er goed?</h3>
//             <div class="card-group" >
//                 <card v-for="card in cards" :key="card" :card="card"></card>
//             </div>
//         </div>
//
//         <!--Samenwerking-->
//         <input class="test" id="input" type="text" v-model="collaboration_input">
//
//         <button v-on:click="addCard('Samenwerking')" >Samenwerking</button>
//
//         <!--Communicatie-->
//         <input class="test" id="swag" type="text" v-model="communication_input">
//
//         <button v-on:click="addCard('Communicatie')" >Communicatie</button>
//
//
//
//
//     </div>


    export default {
      mounted() {
        console.log('Component mounted.')
      },
      data() {
        return {
          cards: [],
          communication_input: '',
          samenwerking_input: '',
          seen: false
        }
      },
      methods: {
        addCard(type) {
          switch (type) {
            case 'Communicatie':
                if(this.communication_input) {
                  this.cards.push({type: type, value: this.communication_input});
                  this.communication_input = '';
                }
              break;

            case 'Samenwerking':
                if(this.samenwerking_input) {
                  this.cards.push({type: type, value: this.samenwerking_input});
                  this.samenwerking_input = '';
                }
              break;
          }
        }
      }
    };

</script>

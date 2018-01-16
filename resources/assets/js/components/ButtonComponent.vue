<template>

<div>

  <div class="flex-container">
      <div class="card-container">
        <div class="card-group">
          <card v-for="card in cards" :key="card" :card="card"></card>
        </div>
      </div>
  </div>

<transition name="fade">
  <div class="card-menu" v-if="compList">
        <div class="comp-button-container" >
          <div class="comp-list" v-show="compList">

              <button class="competentie-button" @click="seen = !seen, seenList = !seenList, closeList = !closeList">
                <img src="img/collaboration.svg">
                <span class="list-competentie">Samenwerking</span>
                <div class="mini-plus"><span>+</span></div>
              </button>


            <!-- <div class="competentie-button">
              <input id="input" rows="5" v-model="communication_input" v-show="seen" @keyUp.$enter="addCard" value="Waz jouw probleem?"></input>
                <button @click="addCard('Communicatie')"  v-show="seen">Submit</button>
                <input type="image" src="img/communication.svg" @click="seen = !seen" width="30px" height="30px">
            </div> -->
          </div>

        </div>
  </div>
</transition>

<!-- Competentielijst button, add card + icon -->
<input class="list-btn" type="image" src="img/addicon.svg" @click="seenList = !seenList, closeList = !closeList" :class="{rotate: closeList}">

  <transition name="fade">
    <div class="card-input" v-if="seen" v-show="seen">
      <h3>Wat ging er goed aan Samenwerking?</h3>
      <hr>
      <textarea class="card-input-field" id="input" rows="5" v-model="samenwerking_input" v-show="seen" value="Waz jouw probleem?"></textarea>
        <button class="submit-card-btn" @click="addCard('Samenwerking'), seen = !seen"  v-show="seen">Submit</button>
    </div>
  </transition>
</div>


</template>
<script>


    export default {
      mounted() {
        console.log('Component mounted.')
      },
      data() {
        return {
          cards: [],
          communication_input: '',
          samenwerking_input: '',
          seen: false,
          seenList: false,
          closeList: false
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
      },
      close() {
        this.$emit('close');
      },
      computed: {
        compList () {
          return this.seenList;
        }
      },
      // watch: {
      //   seenList(value) {
      //     var vm = this;
      //     setTimeout(function() {
      //       vm.seenList = 0;
      //     }, 5000)
      //   }
      // }
    };

</script>

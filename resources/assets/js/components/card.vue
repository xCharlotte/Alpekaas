<template>
    <!-- <div class="card-item">
        <div class="card-header">
            <img src="img/collaboration.svg" v-if="card.type === 'Samenwerking'">
            <img src="img/communication.svg" v-if="card.type === 'Communicatie'">
            <h5>{{card.type}}</h5>
        </div>
        <p v-text="card.value"></p>
    </div> -->

    <div class="flex-container">
      <div class="card-container">
        <div class="card-group">
          <div class="card-item">
            <div class="card-header">
              <img class="icons" src="img/collaboration.svg" v-if="card.type === 'Samenwerking'">
              <img class="icons" src="img/communication.svg" v-if="card.type === 'Communicatie'">
              <p class="competentie">{{ card.type }}</p>
              <hr>
            </div>
            <p v-text="card.value"></p>
          </div>
        </div>
      </div>
    </div>
</template>

<script>
    module.exports = {
        props: ['card']
    }
</script>

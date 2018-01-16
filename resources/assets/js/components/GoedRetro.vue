<template>

<div class="retro-container">

  <div class="goed-retro">
    <h1>Wat ging er goed?</h1>
    <button-component class="btn-component"></button-component>
  </div>
  <div class="beter-retro">
    <h1>Wat kan er beter?</h1>
  </div>
</div>
</template>

<script>
    export default {
      mounted() {
        console.log('component mounted.')
      },
    }

</script>

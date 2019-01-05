<template>
  <div id="modextra-panel-home-div">
    <div class="x-panel">
      <h2>{{$lexicon('modextra')}}</h2>
    </div>

    <div class="x-panel-body x-panel-body-noheader">
      <div class="x-panel panel-desc">
        <div class="x-panel-body x-panel-body-noheader">{{$lexicon('modextra_intro_msg')}}</div>
      </div>
      <div class="x-panel main-wrapper x-grid-panel">
        <div class="x-panel-bwrap row">
          <HelloWorld msg="Welcome to Your Vue.js App on MODX Revolution"/>
        </div>

      </div>
    </div>

  </div>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'

export default {
  name: 'modextra-panel-home-div',
  components: {
    HelloWorld
  },
  data () {
    return {
      modalction: 'create',
      ipID: 0
    }
  },
  methods: {

  }

}
</script>

<style lang="sass" scoped>
.row
  padding: 5px 0

.x-panel>h2
  margin: 15px 0px

.x-form-text
  width: 162px

</style>

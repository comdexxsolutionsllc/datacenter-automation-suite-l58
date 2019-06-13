<template>
  <editor :extensions="extensions">
    <div slot="content" slot-scope="props">
      <h1>Yay Headlines!</h1>
      <p>All these <strong>cool tags</strong> are working now.</p>
    </div>
  </editor>
</template>

<script>
  import {Editor} from 'tiptap'

  export default {
    components: {
      Editor,
    },
    data() {
      return {}
    },
  }
</script>

<style scoped>
</style>

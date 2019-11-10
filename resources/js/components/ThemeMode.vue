<template>
  <div class="app" :class="mode">
    <Header :mode="mode" @toggle="toggle" />
    <Content :mode="mode" />
  </div>
</template>

<script>
import Header from './thememode/Header'
import Content from './thememode/Content'

export default {
  name: 'thememode',
  data () {
    return {
      mode: 'light'
    }
  },
  components: {
    Header,
    Content
  },
  created () {
    window.addEventListener('keyup', this.keyPress)
  },
  methods: {
    keyPress (e) {
      if (e.key === 't') {
        this.toggle()
      }
    },
    toggle () {
      if (this.mode === "dark") {
        this.mode = "light"
      } else {
        this.mode = "dark"
      }
    }
  }, 
  mounted() {
    console.log('Theme Mode VUE component mounted.')
  },
};
</script>

<style>
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  /* font-family: 'Roboto', sans-serif; */
}

.app {
  /* width: 100vw; */
  /* min-height: 100vh; */
  background: #F3F3F3;
  color: #15202B;
  transition: background 0.3s ease-in-out;
}

.dark {
  background: #192734;
  color: #E8E8E8;
}
</style>

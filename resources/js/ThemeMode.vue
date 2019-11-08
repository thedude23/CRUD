<template>
    <div class="thememode" :class="(mode === 'dark') ? 'dark' : 'light'">
    </div>
</template>

<script>
export default {
    name: 'thememode',
    data() {
        mode: 'dark'
    },
    components: {
        
    }    
}
</script>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box; 
    font-family: 'Roboto', sans-serif;
}

.thememode {
    width: 100vw;
    min-height: 100vh;
    background: #f3f3f3;
    color: #15202b;
}

.dark {
    background: #192734;
    color: #f3f3f3;
}
</style>
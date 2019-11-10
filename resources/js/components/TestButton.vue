<template>
    <div>
        <button type="submit" class="my-button">Test Button</button>
    </div>
</template>

<script>
export default {
    mounted() {
            console.log('Test Button mounted.')
        }
}
</script>

<style>
.my-button {
    background-color: #333;
}
</style>
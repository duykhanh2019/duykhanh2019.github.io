<template>
    <div class="conditional-rendering">
        <div class="block-1" v-if="isActive == true">
            This is block 1
        </div>
        <div class="block-2" v-if="isActive == false">
            This is block 2
        </div>
        <div><button @click="isActive = !isActive">Toggle</button></div>
</div>
</template>

<script>
    export default {
        data() {
            return {
                isActive: true
            }
        }

    }
</script>

<style lang="scss" scoped>
</style>

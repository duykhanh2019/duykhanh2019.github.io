<template>
    <p ref="dom-element">{{ counter }}</p>
</template>

<script>
    export default {
        data() {
            return {
                counter: 0
            }
        },
        updated() {
            console.log(+this.$refs['dom-element'].textContent === this.counter)
        },
        created() {
            setInterval(() => {
                this.counter ++
            }, 1000)
        }
    }
</script>

<style lang="scss" scoped>
</style>

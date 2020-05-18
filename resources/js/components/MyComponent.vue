<template>
    <div class="my-component">
        {{ message.text }}{{ message.type }}
        <div><button @click="changeText">Change text</button></div>
        <div><button @click="changeType">Change type</button></div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                message: {
                    type: 'Where are you from?',
                    text: 'How are you?'
                }
            }
        },
        computed: {
            getText() {
                return this.message.text
            },
            getType() {
                return this.message.type
            }
        },
        methods: {
            changeText() {
                this.message.text = 'Đã thay đổi sang text này'
            },
            changeType() {
                this.message.type = 'Đã thay đổi sang type này'
            }
        },
        watch: {
            getText() {
                console.log('this.text')
            },
            getType() {
                console.log('this.type')
            }
        }
    }
</script>

=========



<style lang="scss" scoped>
    .my-component {
        font-size: 30px;
        color: blueviolet;
    }
</style>

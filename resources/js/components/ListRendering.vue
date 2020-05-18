<template>
    <div class="list-rendering">
        <ul>
            <li v-for="todo in listCompleteTodo">
            {{ todo.name }} - {{ todo.complete}}
            </li>
        </ul>
        -----------
        <div v-for="n of 5">{{n}}</div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                todos: [
            {
                name: 'To do 1',
                complete: true
            },
            {
                name: 'To do 2',
                complete: false
            },
            {
                name: 'To do 3',
                complete: true
            }
                ]
            }
        },
        computed: {
            listCompleteTodo() {
                 return this.todos.filter(item => item.complete)
            }
        }
    }
</script>

<style lang="scss" scoped>
</style>

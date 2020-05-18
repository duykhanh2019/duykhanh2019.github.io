<template>
    <div class="list-user">
        <table class="tbl-list-user">
            <thead>
                <th><h4>Name</h4></th>
                <th><h4>Location</h4></th>
                <th><h4>Date Of Birth</h4></th>
            </thead>
            <tbody>
                <tr v-for="user in userData">
                   <td><a @click="selectUser(user)">{{user.name.title}}-{{user.name.last}}-{{user.name.first}}</a></td>
                    <td>{{user.location.city}}</td>
                    <td>{{user.dob.date}}</td>
                </tr>
            </tbody>
        </table>
        <hr>
    </div>
</template>

<script>
    import data from './data.json'
    export default {
        data() {
            return {
                userData: data,
                number: 1101,
                string: 'MD'
            }
        },
        methods: {
            // This line below
            selectUser(user) {
                this.$emit('userSelected', user, this.number, this.string)
            }
        }
    }
</script>

<style lang="scss" scoped>
    .tbl-list-user {
        width: 100%;
    }
</style>

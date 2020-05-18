<template>
    <div class="user-dashboard">
        <div class="list-user-comp">
            <h3>List User</h3>
            <list-user @userSelected="childrenSelectUser('This is my girl friend', ...arguments)"></list-user>
        </div>
        <div class="user-detail-comp">
            <h3>User Detail</h3>
            <!-- pass 'userSelectedFromChild', child will use props 'userDetailInfo' -->
            <UserDetail :userDetailInfo="userSelectedFromChild"></UserDetail>
        </div>
    </div>
</template>

<script>
    import ListUser from './ListUser';
    import UserDetail from './UserDetail';
    export default {
        components: {
            ListUser,
            UserDetail
        },
        data() {
            return {
                userSelectedFromChild: {}
            }
        },
        methods: {
            // Process event emitted from child
            childrenSelectUser(text, user, number, string) {
                console.log(text),
                console.log(user),
                console.log(number),
                console.log(string)
                this.userSelectedFromChild = user
            }
        }
    }
</script>

<style lang="scss" scoped>
</style>

<template>
    <v-menu offset-y class="wrapper">
        <template v-slot:activator="{ on }">
            <span v-if="name !== ''" class="name">{{name}}</span>
            <v-list-item-avatar v-if="avatar === ''" class="material-icons" v-on="on">
                <img src="https://randomuser.me/api/portraits/men/21.jpg">
            </v-list-item-avatar>
        </template>
        <v-list>
            <v-list-item>
                <v-list-item-title>Login</v-list-item-title>
            </v-list-item>
        </v-list>
    </v-menu>
</template>

<script>
    export default {
        name: "Profile",
        data() {
            return {
                avatar: '',
                name: '',
                menu: [
                    {icon: '', title: 'Login', href: '#/login'}
                ]
            }
        },
        created() {
        }
    }
</script>

<style scoped lang="scss">
    .wrapper {
        i {
            font-size: 32pt;
            display: inline-block;
            margin-top: 5px;
        }

        .name {
            vertical-align: top;
            display: inline-block;
            margin: 20px 0 0 10px;
        }
    }
</style>

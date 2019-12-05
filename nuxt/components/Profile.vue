<template>
    <client-only placeholder="Loading...">
        <v-menu class="wrapper" offset-y>
            <template v-slot:activator="{ on }">
                <v-list-item-avatar class="material-icons" style="cursor: pointer" v-on="on">
                    <img :src="avatar"/>
                </v-list-item-avatar>
            </template>
            <v-list>
                <v-list-item
                    :href="item.href"
                    :key="key"
                    :link=true
                    :nuxt=true
                    v-for="(item, key) in menu"
                >
                    <v-list-item-title>{{item.title}}</v-list-item-title>
                </v-list-item>
            </v-list>
        </v-menu>
    </client-only>
</template>

<script>
    export default {
        name: "Profile",
        data() {
            return {}
        },
        computed: {
            avatar() {
                // this.$store.commit('auth/setUser', null);
                if (this.$auth.user && this.$auth.user.avatar) {
                    return this.$auth.user.avatar;
                } else {
                    return '/no_avatar.svg';
                }
            },
            menu() {
                let menu = [];
                if (this.$auth.hasScope('ROLE_ADMIN')){
                    menu.push(
                        {
                            icon: '',
                            title: 'Admin Panel',
                            href: '/admin/',
                        }
                    )
                }
                menu.push(
                    {
                        icon: '',
                        title: this.$auth.loggedIn ? 'Logout' : 'Login',
                        href: this.$auth.loggedIn ? '/logout' : '/login',
                    }
                );
                return menu;
            }
        },
        mounted() {
        },
        methods: {}
    }
</script>

<style lang="scss" scoped>
    .wrapper {
        i {
            font-size: 32pt;
            display: inline-block;
            margin-top: 5px;
        }
    }
</style>

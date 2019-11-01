<template>
    <div>
        <v-app-bar
                app
                class="elevation-4"
                clipped-left
        >
            <v-toolbar-title class="py-2 mr-12">
                <v-img
                        :src="require('../assets/images/logo.svg')"
                        contain
                        width="200"
                >
                </v-img>
            </v-toolbar-title>
            <v-toolbar-items class="hidden-sm-and-down">
                <v-btn
                        :key="key"
                        :to="item.href"
                        text
                        v-for="(item, key) in menu"
                >
                    <v-icon :color="item.icon_color" class="pr-2" large>{{item.icon}}</v-icon>
                    {{item.title}}
                </v-btn>
            </v-toolbar-items>
            <v-spacer></v-spacer>
            <v-menu>
                <template v-slot:activator="{ on }">
                    <v-app-bar-nav-icon class="hidden-md-and-up" v-on="on"></v-app-bar-nav-icon>
                </template>
                <v-list>
                    <v-list-item :key="key" v-for="(item, key) in menu">
                        <v-list-item-title>{{ item.title }}</v-list-item-title>
                    </v-list-item>
                </v-list>
            </v-menu>
            <v-text-field
                    class="search-btn mr-5 hidden-sm-and-down"
                    label="Search..."
                    prepend-inner-icon="mdi-magnify"
                    single-line
            ></v-text-field>
            <profile></profile>
        </v-app-bar>
    </div>
</template>

<script>
    import Profile from "~/components/Profile";

    export default {
        name: "Toolbar",
        components: {Profile},
        data() {
            return {
                menu: [
                    {icon: 'mdi-blogger', icon_color: '', title: 'blog', href: '/'},
                ],
                color: 'primary',
            }
        },
        computed: {},
        created() {
        },
        watch: {},
        methods: {}
    }
</script>

<style lang="scss" scoped>
    .v-menu {
        button {
            border: 1px solid black;
            border-radius: 3px;
            width: 100px;
        }

        &__content {
            width: 100% !important;
        }
    }

    .nav-icon span i {
        &:before {
            font-size: 40px;
        }
    }
</style>

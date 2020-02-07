<template>
    <v-navigation-drawer
            :mini-variant.sync="mini"
            app
            clipped
            permanent
            v-model="drawer"
    >
        <v-list
                class="py-0"
                dense
                nav
                shaped
        >
            <v-list-item/>
            <v-list-item
                    :key="item.title"
                    :to="item.href"
                    v-for="item in menu"
                    exact
            >
                <v-list-item-icon>
                    <v-icon class="icon">{{ item.icon }}</v-icon>
                </v-list-item-icon>
                <v-list-item-content>
                    <v-list-item-title>{{ item.title }}</v-list-item-title>
                </v-list-item-content>
            </v-list-item>
        </v-list>
    </v-navigation-drawer>
</template>

<script>
    export default {
        name: "NavDrawer",
        data: () => ({
            menu: [
                {title: 'Dashboard', icon: 'mdi-view-dashboard', href: '/admin'},
                {title: 'Categories', icon: 'mdi-folder-multiple', href: '/admin/categories'},
                {title: 'Articles', icon: 'mdi-file-multiple', href: '/admin/articles'},
                {title: 'Comments', icon: 'mdi-comment-multiple', href: '/admin/comments'},
                {title: 'Tags', icon: 'mdi-tag-multiple', href: '/admin/tags'},
                {title: 'Users', icon: 'mdi-account', href: '/admin/users'},
                {title: 'Roles', icon: 'mdi-account-group', href: '/admin/roles'},
            ],
            drawer: true,
            mini: false,
        })
    }
</script>

<style lang="scss" scoped>
    .icon {
        color: $primary;
    }
</style>

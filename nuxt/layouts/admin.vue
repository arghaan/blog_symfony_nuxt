<template>
    <v-app app>
        <toolbar/>
        <nav-drawer/>
        <v-content>
            <v-container fluid>
                <nuxt/>
            </v-container>
        </v-content>
        <v-footer app class="elevation-4 pa-3">
            <v-spacer/>
            <div>&copy; Syrius Software Solutions</div>
        </v-footer>
    </v-app>
</template>
<style lang="scss" scoped>


</style>
<script>

    import Toolbar from "~/components/Toolbar";
    import NavDrawer from "~/components/admin/NavDrawer";

    export default {
        middleware: ['auth'],
        components: {
            Toolbar,
            NavDrawer
        },

        data() {
            return {}
        },

    }
</script>

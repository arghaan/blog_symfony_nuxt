<template>
    <v-app app>
        <toolbar/>
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

    export default {
        // name: 'App',
        components: {Toolbar},

        data() {
            return {}
        },

    }
</script>

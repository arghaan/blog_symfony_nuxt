<template>
    <v-container>
        <v-row>
            <v-col>
                <dashboard-card/>
            </v-col>
            <v-col>
                <dashboard-card/>
            </v-col>
            <v-col>
                <dashboard-card/>
            </v-col>
        </v-row>
        <v-row>
            <v-col>
                <dashboard-card/>
            </v-col>
            <v-col>
                <dashboard-card/>
            </v-col>
        </v-row>
    </v-container>
</template>

<script>
    import DashboardCard from "~/components/admin/DashboardCard";

    export default {
        name: "index",
        layout: 'admin',
        components: {
            DashboardCard
        },
        mounted() {
        }
    }
</script>

<style scoped>
    .content {
        display: flex;
    }
</style>

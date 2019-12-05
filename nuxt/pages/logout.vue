<template>

</template>

<script>

    export default {
        name: "logout",
        created() {
            this.$auth.logout();
            this.$router.push('/');
        }
    }
</script>

<style scoped>

</style>

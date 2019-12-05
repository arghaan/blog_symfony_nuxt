<template>

</template>

<script>
    import articlesQuery from '~/schemas/articles.graphql'
    export default {
        name: "articles",
        layout: 'admin',
        apollo: {
            articles: articlesQuery
        }
    }
</script>

<style scoped>

</style>

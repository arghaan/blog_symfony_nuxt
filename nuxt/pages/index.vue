<template>
    <section class="column-wrapper">
        <v-container>
            <v-row>
                <v-col
                    cols="12"
                    md="9"
                >
                    <article-item
                        :index=key
                        :item=item
                        :key=key
                        class="mb-4"
                        v-for="(item, key) in articles.edges"
                    />
                </v-col>
                <v-col>
                    <category-list
                        v-for="(item, key) in categories"
                        :index="key"
                        :item="item"
                        :key="key"
                    />
                </v-col>
            </v-row>
        </v-container>
    </section>
</template>

<style lang="scss" scoped>
    .column-wrapper {
        width: 1240px;
        margin: auto;
    }
</style>

<script>

    import ArticleItem from "~/components/ArticleItem";
    import CategoryList from "~/components/CategoryList";

    import articlesQuery from "../schemas/articles.graphql";

    export default {
        // middleware: ['auth'],
        components: {
            ArticleItem,
            CategoryList
        },
        head() {
            return {
                title: 'Articles',
                titleTemplate: '%s | Syrius Software Solutions'
            }
        },
        data() {
            return {
                articles: [],
                categories: [
                    {title: 'Soft', link: '/soft'},
                    {title: 'PHP', link: '/php'},
                    {title: 'Linux', link: '/linux'},
                ],
            }
        },
        apollo: {
            articles: articlesQuery
        },
        mounted() {
        },
        computed: {

        },
        methods: {
        }
    }
</script>

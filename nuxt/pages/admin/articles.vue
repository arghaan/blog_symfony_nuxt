<template>
    <v-data-table
            :headers="headers"
            :items="arrArticles"
            class="elevation-1"
            sort-by="calories"
    >
        <template v-slot:top>
            <v-toolbar color="white" flat>
                <v-toolbar-title>Articles</v-toolbar-title>
                <v-divider
                        class="mx-4"
                        inset
                        vertical
                />
                <v-spacer/>
                <v-dialog max-width="500px">
                    <template v-slot:activator="{ on }">
                        <v-btn class="mb-2" color="primary" dark v-on="on">New Article</v-btn>
                    </template>
                    <v-card>
                        <v-card-title>
                            <span class="headline">{{ formTitle }}</span>
                        </v-card-title>

                        <v-card-text>
                            <v-container>
                                <v-row>
                                </v-row>
                            </v-container>
                        </v-card-text>

                        <v-card-actions>
                            <v-spacer/>
                            <v-btn color="blue darken-1" text>Cancel</v-btn>
                            <v-btn color="blue darken-1" text>Save</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-dialog>
            </v-toolbar>
        </template>
        <template v-slot:item.action="{ item }">
            <v-icon
                    @click="editItem(item)"
                    class="mr-2"
                    small
            >
                mdi-pencil
            </v-icon>
            <v-icon
                    @click="deleteItem(item)"
                    small
            >
                mdi-delete
            </v-icon>
        </template>
        <template v-slot:no-data>
            <v-btn
                    color="primary">Reset
            </v-btn>
        </template>
    </v-data-table>
</template>

<script>
    import _ from 'lodash'
    import articlesQuery from '~/schemes/articles.graphql'

    export default {
        name: "articles",
        layout: 'admin',
        apollo: {
            articles: articlesQuery
        },
        data: () => ({
            headers: [
                {text: 'Title', value: 'title'},
                {text: 'Text', value: 'shortText'},
                {text: 'Author', value: 'author.username'},
                {text: 'Created At', value: 'displayedCreatedAt'},
                {text: 'Actions', value: 'action', sortable: false, width: 76},

            ],
            editedIndex: -1,
            articles: {
                edges: {

                },
                totalCount: 0,
            },
        }),
        computed: {
            arrArticles() {
                return Object.values(this.articles.edges).map((node) => {
                    node.node.displayedCreatedAt = new Date(Date.parse(node.node.createdAt))
                        .toLocaleString('ru', {
                                day: 'numeric',
                                month: 'numeric',
                                year: 'numeric',
                                hour: 'numeric',
                                minute: 'numeric',
                            }
                        );
                    node.node.shortText = _.truncate(node.node.text, {'length': 150});
                    return node.node;
                });
            },
            totalServerCount() {
                return this.articles.totalCount;
            },
            formTitle() {
                return this.editedIndex === -1 ? 'New Article' : 'Edit Article';
            },
        },
        mounted() {
            console.log(this.totalServerCount);
        },
        methods: {
            editItem(item) {

            },
            deleteItem(item) {

            },
        }
    }
</script>

<style scoped>

</style>

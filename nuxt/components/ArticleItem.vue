<template>
    <article>
        <v-card
            class="post mx-auto"
            style="padding: 10px 10px"
            :nuxt=true
        >
            <div class="author">
                <v-img
                    width="24"
                    height="24"
                    class="author__avatar float-left mx-2"
                    src="https://randomuser.me/api/portraits/men/21.jpg"
                />
                <a class="author__name" href="#">{{item.node.author.username}}</a>
                <span class="author__date">{{item.node.createdAt}}</span>
            </div>
            <v-card-title>
                <div class="post__title_link">{{item.node.title}}</div>
            </v-card-title>
            <ul class="tags">
                <li
                    class="tags__item"
                    v-for="(tag, index) in item.node.tags.edges"
                >
                    <a
                        class="tags__link"
                        :href="tag.node.id"
                    >
                        {{tag.node.id}}<span v-if="(index + 1) < item.node.tags.totalCount">, </span>
                    </a>
                </li>
            </ul>
            <v-chip
                v-for="(category, index) in item.node.categories.edges"
                :key="index"
                :href="category.node.link"
                :link=true
                :nuxt=true
                class="mb-5 mx-1 main-color"
                outlined
                pill
            >
                {{category.node.title}}
            </v-chip>
            <article-text
                class="text"
                :text="cutText"
            />
            <v-btn v-if="cut" class="ma-2 main-color" outlined>Читать дальше →</v-btn>
            <v-divider class="my-4"></v-divider>
            <v-btn text disabled style="color: #006d8d !important;">
                <v-icon class="mr-1" style="color: #006d8d !important;">mdi-eye</v-icon>
                1024
            </v-btn>
            <v-btn text class="main-color">
                <v-icon class="mr-1">mdi-comment</v-icon>
                {{item.node.comments.totalCount}}
            </v-btn>
        </v-card>
    </article>
</template>

<script>
    import _ from 'lodash'
    import ArticleText from "./ArticleText";

    export default {
        name: "ArticleItem",
        components: {
            ArticleText
        },
        props: {
            item: Object,
            index: Number
        },
        data() {
            return {
                cut: false
            }
        },
        computed: {
            cutText() {
                const cutText = this.item.node.text.split("<cut>");
                this.cut = typeof cutText[1] != "undefined";
                return cutText[0];
            },
            formattedDate(){
                let date = new Date(this.item.node.text.createdAt)
            }
        }
    }
</script>

<!--suppress SassScssResolvedByNameOnly -->
<style lang="scss" scoped>
    .main-color {
        color: #006d8d !important;
    }
    .post {
        .author {
            &__name {
                font-size: 12px;
                text-decoration: none;
            }

            &__date {
                font-size: 12px;
                color: grey;
            }
        }

        &__title {
            &_link {
                @extend %display-1 !optional;
                cursor: pointer;

                &:hover {
                    color: #548eaa;
                }
            }
        }
    }

    .tags {
        list-style: none;
        font-size: 13px;
        margin-bottom: 15px;

        &__item {
            display: inline;
        }

        &__link {
            text-decoration: none;
            color: #5e6973;
        }
    }
</style>

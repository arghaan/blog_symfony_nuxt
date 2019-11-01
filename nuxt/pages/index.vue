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
                        v-for="(item, key) in articles"
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

    export default {
        components: {
            ArticleItem,
            CategoryList
        },
        data() {
            // noinspection LongLine
            return {
                articles: [
                    {
                        title: 'Title ',
                        text: `
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae risus ut metus gravida congue in ac nisl. Praesent leo urna, venenatis sit amet tortor vitae, commodo tincidunt libero. Maecenas porta pharetra sem, vel dapibus odio eleifend non. Suspendisse lobortis ipsum at diam congue condimentum. Mauris aliquam, dolor in gravida sagittis, metus metus tincidunt nisi, a blandit nisl leo consequat purus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam et nunc condimentum, consequat mauris ut, accumsan sem.</p>

                        <img alt="" src="https://hsto.org/webt/af/ns/d6/afnsd6pdnqhezs-ge1tjjl34xeo.jpeg" />

                        <p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
                        <cut>
                        <p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
                        <p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
                        <p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
                        <p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
                        <p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
                        <p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
                        <p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
                        <p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
                        <p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
                        <p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
                        <p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
                        <p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
                        <p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
                        <p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
                        <p>Aliquam eu porta lacus. Sed condimentum congue orci eget consectetur. Curabitur convallis arcu porta volutpat venenatis. Vivamus lorem massa, blandit vehicula egestas id, tempor et nibh. Sed ut mattis velit. Pellentesque eget fermentum massa. Sed dictum tincidunt aliquam. Nullam porta risus ac leo fringilla vehicula. Aenean sed placerat arcu.</p>
                        `,
                        author: 'Unknown Author',
                        date: 'вчера 11:45',
                        tags: ['Управление персоналом', 'Карьера в IT-индустрии', 'Читальный зал'],
                        categories: [
                            {title: 'Soft', link: '/soft'},
                            {title: 'PHP', link: '/php'},
                            {title: 'Linux', link: '/linux'},
                        ],
                        comments: 123,
                    },
                ],
                categories: [
                    {title: 'Soft', link: '/soft'},
                    {title: 'PHP', link: '/php'},
                    {title: 'Linux', link: '/linux'},
                ],
            }
        },
    }
</script>

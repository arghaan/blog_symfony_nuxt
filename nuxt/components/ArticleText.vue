<template>
    <div v-html="text" :class="cls"></div>
</template>

<script>

    export default {
        name: "ArticleText",
        props: {
            text: String,
            cls: String,
        },
    }
</script>

<style>
    img {
        width: 100%;
        margin: 15px 0;
    }

    div {
        color: #222222;
        font-size: 16px;
        line-height: 1.56;
    }
</style>

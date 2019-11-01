<template>

</template>

<script>
    import axios from 'axios';

    export default {
        name: "test",
        data() {
            return {
                articles: null
            }
        },

        created() {
            const config = {
                headers: {
                    'Content-Type': 'application/graphql',
                }
            };
            const data = `
{
  articles {
    edges {
      node {
        id
      }
    }
  }
}
            `;
            axios.post('http://api.syrius.local/api/graphql', data, config)
                .then(res => {
                    console.log(res.data);
                });
        }
    }
</script>

<style scoped>

</style>

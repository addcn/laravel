<template>
    <div>{{ statistics }}</div>
</template>

<script>

    export default {
        data () {
            return {
                statistics: ""
            }
        },
        mounted() {
            this.$http.get('/now')
                .then((response) => {
                    this.statistics = response.data

                    console.log(response.data)
                })
        }
    }
</script>

<style scoped>
    h2 {

    }
</style>

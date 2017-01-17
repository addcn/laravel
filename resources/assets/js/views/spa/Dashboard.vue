<template>
    <div>
    	<h2>SPA {{ $route.params.id }}</h2>

    	<p>
    		<router-link to="/spa">spa</router-link>
    		<router-link to="/spa/system">system</router-link>

    		<router-link to="/spa/links">links</router-link>
    		<router-link to="/spa/links/create">links/create</router-link>
    		<router-link to="/spa/links/1/edit">links/1/edit</router-link>    		
    	</p>

        <!-- 嵌套路由 -->
        <router-view></router-view>

    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>
    h2 {

    }
</style>


<template>
    <div>
    	<h2>Dashboard {{ $route.params.id }}</h2>

    	<p>
    		<router-link to="/dashboard">dashboard</router-link>
    		<router-link to="/dashboard/system">system</router-link>

    		<router-link to="/dashboard/links">links</router-link>
    		<router-link to="/dashboard/links/create">links/create</router-link>
    		<router-link to="/dashboard/links/1/edit">links/1/edit</router-link>    		
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


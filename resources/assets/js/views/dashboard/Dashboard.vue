<template>
    <div class="container">        
    	<h2>Dashboard {{ $route.params.id }}</h2>

    	<p>
    		<router-link to="/dashboard">/dashboard</router-link>
    		<router-link to="/dashboard/system">/dashboard/system</router-link>

    		<router-link to="/dashboard/links">/dashboard/links</router-link>
    		<router-link to="/dashboard/links/create">/dashboard/links/create</router-link>
    		<router-link to="/dashboard/links/1/edit">/dashboard/links/1/edit</router-link>

    		
    	</p>

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

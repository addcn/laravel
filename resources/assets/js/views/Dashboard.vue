<template>
    <div class="container">  

    	<div><router-link to="/vue">/vue</router-link></div>

    	<h2>Dashboard {{ $route.params.id }}</h2>

    	<ul>
    		<li><router-link to="/dashboard">/dashboard</router-link></li>
    		<li><router-link to="/dashboard/system">/dashboard/system</router-link></li>
    		<li><router-link to="/dashboard/links">/dashboard/links</router-link></li>

    		<ul>
    			<li><router-link to="/dashboard/links/create">/dashboard/links/create</router-link></li>
    			<li><router-link to="/dashboard/links/1/edit">/dashboard/links/1/edit</router-link></li>
    		</ul>
    	</ul>

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

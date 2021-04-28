<template>
	<div class="card-header">
		<h1>{{ title }}</h1>
	</div>
</template>

<script>
export default {
	name: 'Header',
	props: {
		title: String,
	},
}
</script>
 <style scoped>

 .card-header {
	padding: 0.75rem 1.25rem;
	margin-bottom: 0;
	color: whitesmoke;
	background-color: #2e74c8;
	border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}
</style>

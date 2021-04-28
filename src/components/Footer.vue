<template>
	<div class="card-footer">
		<small>{{ footer }}</small>
	</div>
</template>

<script>
export default {
	name: 'Footer',
	props: {
		footer: String,
	},
}
</script>

<style scoped>

.card-footer {
	padding: 0.75rem 1.25rem;
	color: whitesmoke;
	background-color: #2e74c8;
	border-top: 1px solid rgba(0, 0, 0, 0.125);
}
</style>

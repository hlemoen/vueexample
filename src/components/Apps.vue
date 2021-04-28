<template>
	<div class="card-body">
		<div v-for="app in apps" :key="app.id">
			<AppSquare :app="app" />
		</div>
	</div>
</template>

<script>
import AppSquare from './AppSquare.vue'
export default {
	name: 'Apps',
	components: {
		AppSquare,
	},
	props: {
		apps: Array,
	},
}
</script>

<style scoped>

.card-body {
	justify-content: center;
	flex: auto;
	display: flex;
	flex-flow: row wrap;
	border-color: #2e74c8;
	/* padding: 1.25rem; */
}
</style>
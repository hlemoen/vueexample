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

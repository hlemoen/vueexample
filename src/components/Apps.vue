<template>
	<div class="card-body">
		<div :key="app.id" v-for="app in apps">
			<AppSquare :app="app" />
		</div>
	</div>
</template>

<script>
import AppSquare from "./AppSquare.vue";
export default {
	name: "Apps",
	props: {
		apps: Array
	},
	components: {
		AppSquare
	}
};
</script>
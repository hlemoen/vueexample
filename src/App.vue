<template>
	<li>
		<div class="user-status-menu-item">
			<!-- Status modal toggle -->
			<span>apper</span>
			<toggle :is="inline ? 'button' : 'a'"
				:class="{'user-status-menu-item__toggle--inline': inline}"
				class="user-status-menu-item__toggle"
				href="#"
				@click.prevent.stop="openModal">
				<span :class="statusIcon" class="user-status-menu-item__toggle-icon"/>
			</toggle>
		</div>

		<!-- Status management modal -->
		<Modalview
			v-if="isModalOpen"
			@close="closeModal" />
	</li>
</template>

<script>

export default {
	name: 'App',

	components: {
		Modalview: () => import(/* webpackChunkName: 'user-status-modal' */'./components/Modalview'),
	},
	props: {
		inline: {
			type: Boolean,
			default: false,
		},
	},
	data() {
		return {
			isModalOpen: false,
		}
	},
	methods: {
		/**
		 * Opens the modal to set a custom status
		 */
		openModal() {
			this.isModalOpen = true
		},
		/**
		 * Closes the modal
		 */
		closeModal() {
			this.isModalOpen = false
		},
	},
}
</script>

<style lang="scss" scoped>
$max-width-user-status: 200px;

.container {
	width: 50%;
	padding-right: 15px;
	padding-left: 15px;
	margin-top: 5rem;
	margin-right: auto;
	margin-left: auto;
}

.card {
	position: relative;
	display: flex;
	flex-direction: column;
	min-width: 0;
	word-wrap: break-word;
	background-color: #fff;
	background-clip: border-box;
	border: 10px solid #2e74c8;
	border-radius: 0.25rem;
}

.card-header {
	padding: 0.75rem 1.25rem;
	margin-bottom: 0;
	color: whitesmoke;
	background-color: #2e74c8;
	border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}

.card-body {
	justify-content: center;
	flex: auto;
	display: flex;
	flex-flow: row wrap;
	border-color: #2e74c8;
	/* padding: 1.25rem; */
}

.card-footer {
	padding: 0.75rem 1.25rem;
	color: whitesmoke;
	background-color: #2e74c8;
	border-top: 1px solid rgba(0, 0, 0, 0.125);
}

$max-width-user-status: 200px;

.user-status-menu-item {
	&__header {
		display: block;
		overflow: hidden;
		box-sizing: border-box;
		max-width: $max-width-user-status;
		padding: 10px 12px 5px 38px;
		text-align: left;
		white-space: nowrap;
		text-overflow: ellipsis;
		opacity: 1;
		color: var(--color-text-maxcontrast);
	}

	&__toggle {
		&-icon {
			width: 16px;
			height: 16px;
			margin-right: 10px;
			opacity: 1 !important;
			background-size: 16px;
		}

		// In dashboard
		&--inline {
			width: auto;
			min-width: 44px;
			height: 44px;
			margin: 0;
			border: 0;
			border-radius: var(--border-radius-pill);
			background-color: var(--color-background-translucent);
			font-size: inherit;
			font-weight: normal;

			-webkit-backdrop-filter: var(--background-blur);
			backdrop-filter: var(--background-blur);

			&:active,
			&:hover,
			&:focus {
				background-color: var(--color-background-hover);
			}
		}
	}
}

li {
	list-style-type: none;
}
</style>

<template>
	<li>
		<div class="user-status-menu-item">
			<!-- Username display -->
			<span
				v-if="!inline"
				class="user-status-menu-item__header"
				:title="'hello! Mr.Lemoen'">
			</span>

			<!-- Status modal toggle -->
			<toggle :is="inline ? 'button' : 'a'"
				:class="{'user-status-menu-item__toggle--inline': inline}"
				class="user-status-menu-item__toggle"
				href="#"
				@click.prevent.stop="openModal">
				<span :class="statusIcon" class="user-status-menu-item__toggle-icon" />
			</toggle>
		</div>

		<!-- Status management modal -->
		<SetStatusModal
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
	created() {
		this.apps = [
			{
				id: 1,
				title: 'Inviter',
				description: 'Inviter til møter eller lignende',
				link:
					'https://calinvdev.digitalrevisor.eu/makeEvent/createNewEvent',
			},
			{
				id: 2,
				title: 'Repiterende Epost',
				description: 'Send repiterende E-poster',
				link:
					'https://calinvdev.digitalrevisor.eu/makeEvent/emailRepeatCreator',
			},
			{
				id: 3,
				title: 'Repiterende Sms',
				description: 'Send repiterende Sms\'er',
				link:
					'https://calinvdev.digitalrevisor.eu/makeEvent/smsRepeatCreator',
			},
			{
				id: 4,
				title: 'Test',
				description: 'Ser om ruter virker',
				link: 'https://nrk.no',
			},
			{
				id: 5,
				title: 'Test Nummer 2',
				description: 'Ser om ruter virker',
				link: 'https://vg.no',
			},
			{
				id: 6,
				title: 'Test Nummer 3',
				description: 'Dette er en test',
				link: 'https://reddit.com',
			},
		]
	},
}
</script>

<style>
#app {
	font-family: Avenir, Helvetica, Arial, sans-serif;
	-webkit-font-smoothing: antialiased;
	-moz-osx-font-smoothing: grayscale;
	text-align: center;
	color: #2c3e50;
	margin-top: 60px;
}

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
</style>

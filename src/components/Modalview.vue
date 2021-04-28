<template>
	<Modal size="normal" @close="closeModal">
		<div id="app" class="container">
			<div class="card">
				<Header title="Apper" />
				<Apps :apps="apps" />
				<Footer footer="laget av Henrik" />
			</div>
		</div>
	</Modal>
</template>

<script>
import Header from './Header'
import Apps from './Apps'
import Footer from './Footer'
import Modal from '@nextcloud/vue/dist/Components/Modal'
export default {
	name: 'Modalview',
	components: {
		Header,
		Apps,
		Footer,
		Modal,
	},
	methods: {
		/**
		 * Closes the Set Status modal
		 */
		closeModal() {
			this.$emit('close')
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

<style lang="scss" scoped>
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

.set-status-modal {
	min-width: 500px;
	min-height: 200px;
	padding: 8px 20px 20px 20px;
	// Enable scrollbar for too long content, same way as in Dashboard customize
	max-height: 70vh;
	overflow: auto;

	&__header {
		text-align: center;
		font-weight: bold;
	}

	&__online-status {
		display: grid;
		// Space between the two sections
		margin-bottom: 40px;
		grid-template-columns: 1fr 1fr;
	}

	&__custom-input {
		display: flex;
		width: 100%;
		margin-bottom: 10px;

		.custom-input__emoji-button {
			flex-basis: 40px;
			flex-grow: 0;
			width: 40px;
			height: 34px;
			margin-right: 0;
			border-right: none;
			border-radius: var(--border-radius) 0 0 var(--border-radius);
		}
	}

	.status-buttons {
		display: flex;

		button {
			flex-basis: 50%;
		}
	}
}
</style>
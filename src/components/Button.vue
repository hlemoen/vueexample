<template>
	<a
		:style="{ background: color, text: color }"
		style="margin-bottom: 1rem;"
		class="btn btn-primary"
		target="_blank"
	>
		{{ text }}
	</a>
</template>

<script>
export default {
	name: "Button",
  props: {
		text: String,
		color: String
	}
};
</script>

<style scoped>
/* .Btn {
	color: whitesmoke;W
	border: 1px;
	border-radius: 5px;
	border-color: white;
	text-align: center;
	margin: 1rem;
	padding: 0.5rem 1rem 0.5rem 1rem;
} */

.btn {
	display: inline-block;
	font-weight: 400;
	color: #212529;
	text-align: center;
	vertical-align: middle;
	background-color: transparent;
	border: 1px solid transparent;
	padding: 0.375rem 0.75rem;
	font-size: 0.9rem;
	line-height: 1.6;
	border-radius: 0.25rem;
	transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out,
		border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}

.btn-primary {
	color: #fff;
	background-color: #3490dc;
	border-color: #3490dc;
}
</style>

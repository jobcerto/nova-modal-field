<template>
	<div :class="{'block text-right': field.indexAlign == 'right'}" v-if="field.visible">
		<span>
			<a :class="field.classes" v-html="field.text" @click="openModal = true" />
		</span>
		<portal to="modals">
			<transition name="fade">
				<modal  v-if="openModal" @modal-close="openModal = false">
					<div :class="field.modalClasses" v-html="field.view"></div>
				</modal>
			</transition>
		</portal>
	</div>
</template>

<script>

	export default {
		props: ['resourceName', 'field'],
		data() {
			return {
				openModal: false,
			}
		}
	}
</script>

<style >
.modal .relative > div {
	padding: 3rem;
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: center;
}
</style>

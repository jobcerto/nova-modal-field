import VModal from 'vue-js-modal'

Nova.booting((Vue, router, store) => {
    Vue.use(VModal, { componentName: "vue-modal" })
    Vue.component('index-nova-modal-field', require('./components/IndexField'))
    Vue.component('detail-nova-modal-field', require('./components/DetailField'))
    Vue.component('form-nova-modal-field', require('./components/FormField'))
})

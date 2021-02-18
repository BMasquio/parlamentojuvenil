import Vue from 'vue'

if (jQuery('#vue-congressmen').length) {
    var vueCongressmen = new Vue({
        el: '#vue-congressmen',

        data: {
            searchText: '',
            congressmen: [],
        },

        methods: {
            __fetchCongressmen: function () {
                const $this = this
                axios.get('/api/v1/congressmen/2015').then(
                    function (response) {
                        $this.congressmen = response.data
                    },

                    $this.__requestError,
                )
            },
        },

        __requestError: function (error) {
            console.log('Request error: ', error)
        },

        mounted: function () {
            this.__fetchCongressmen()
        },
    })
}

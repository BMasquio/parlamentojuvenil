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
                this.$http.get('/api/v1/congressmen/2015').then(
                    function (response) {
                        this.congressmen = response.body
                    },

                    this.__requestError,
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

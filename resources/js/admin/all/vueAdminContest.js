import Vue from 'vue'

if (jQuery('#vue-admin-contest').length) {
    var vueAdminContest = new Vue({
        el: '#vue-admin-contest',

        data: {
            subscriptions: [],
        },

        methods: {
            __search: function () {
                const $this = this

                var url = '/api/v1/search/contest'

                axios.get(url).then(
                    function (response) {
                        $this.subscriptions = response.data
                    },

                    $this.__requestError,
                )
            },

            __requestError: function (error) {
                console.log('Request error: ', error)
            },
        },

        mounted: function () {
            this.__search()
        },
    })
}

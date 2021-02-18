import Vue from 'vue'

if (jQuery('#vue-admin-users').length) {
    var vueUsers = new Vue({
        el: '#vue-admin-users',

        data: {
            email: '',
            name: '',
            users: [],
            searching: false,
        },

        methods: {
            __search: function () {
                const $this = this

                this.searching = true

                var url = '/api/v1/search/users?email=' + this.email + '&name=' + this.name

                axios.get(url).then(
                    function (response) {
                        $this.searching = false

                        $this.users = response.data
                    },

                    $this.__requestError,
                )
            },

            __requestError: function (error) {
                console.log('Request error: ', error)

                this.searching = false
            },
        },
    })
}

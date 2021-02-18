import Vue from 'vue'

if (jQuery('#vue-admin-contest-votes').length) {
    var vueAdminContestVotes = new Vue({
        el: '#vue-admin-contest-votes',

        data: {
            flags: [],
        },

        methods: {
            __search: function () {
                var url = '/api/v1/search/contest/votes'

                this.$http.get(url).then(
                    function (response) {
                        this.flags = response.body
                    },

                    this.__requestError,
                )
            },

            __requestError: function (error) {
                console.log('Request error: ', error)
            },
        },

        mounted: function () {
            this.__search()
        },

        computed: {
            total_vote_count: function () {
                return this.flags.reduce(function (prev, flag) {
                    return prev + flag.valid_vote_count
                }, 0)
            },

            sorted_flags: function () {
                return _.sortBy(this.flags, function (flag) {
                    return -flag.valid_vote_count
                })
            },
        },
    })
}

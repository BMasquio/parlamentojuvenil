import Vue from 'vue'

if (jQuery('#vue-admin-elected').length) {
    var vueAdminElected = new Vue({
        el: '#vue-admin-elected',

        data: {
            year: 0,
            elected: '',
            total_cities_1nd: '',
            total_cities_2nd: '',
            total_valid_votes_1nd: '',
            total_valid_votes_2nd: '',
            total_voters: '',
            voter_percentage_1nd: '',
            voter_percentage_2nd: '',
            orderBy: 'city',
            orderType: 'asc',
            result: null,
        },

        methods: {
            __fetchSubscriptions: function () {
                const $this = this
                axios.get('/api/v1/elected').then(
                    function (response) {
                        $this.year = response.data.year
                        $this.elected = response.data.elected
                        $this.total_cities_1nd = response.data.total_cities_1nd
                        $this.total_cities_2nd = response.data.total_cities_2nd
                        $this.total_valid_votes_1nd = response.data.total_valid_votes_1nd
                        $this.total_valid_votes_2nd = response.data.total_valid_votes_2nd
                        $this.total_voters = response.data.total_voters
                        $this.voter_percentage_1nd = response.data.voter_percentage_1nd
                        $this.voter_percentage_2nd = response.data.voter_percentage_2nd
                    },

                    this.__requestError,
                )
            },

            __requestError: function (error) {
                console.log('Request error: ', error)
            },

            __changeOrder: function (field) {
                if (this.orderBy == field) {
                    this.orderType = this.orderType == 'asc' ? 'desc' : 'asc'

                    return
                }

                this.orderType = 'asc'

                this.orderBy = field
            },

            __makeEditPersonUrl: function (id) {
                return '/subscriptions/edit/' + id
            },

            __makeShowVotesUrl: function (id) {
                return '/admin/votes/' + id
            },
        },

        mounted: function () {
            this.__fetchSubscriptions()
        },

        computed: {
            _elected: function () {
                var orderBy = this.orderBy

                var orderType = this.orderType

                return _.orderBy(
                    this.elected,

                    function (item) {
                        return item[orderBy] || ''
                    },

                    orderType,
                )
            },

            _arrowClass: function () {
                if (this.orderType == 'asc') {
                    return 'fa-arrow-down'
                }

                return 'fa-arrow-up'
            },
        },
    })
}

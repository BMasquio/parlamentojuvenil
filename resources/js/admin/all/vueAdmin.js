import Vue from 'vue'

if ($('#vue-admin-index').length) {
    const vueAdminIndex = new Vue({
        el: '#vue-admin-index',

        data: {
            cities: [],
            cities_copy: null,
            subscriptions: [],
            citiesInCount: '',
            citiesOutCount: '',
            subscriptionCount: '',
            citiesCount: '',
            lastSubscriptionDate: '',
            schoolCount: '',
            cancelledSubscriptionsCount: '',
            validSubscriptionsCount: '',
            hash: '',
            cancelled: 0,
            filterSchools: false,
            orderBy: 'city',
            orderType: 'asc',
        },

        methods: {
            __formatDates: function () {
                var items = clone(this.cities)

                items.forEach(
                    function (object) {
                        object.formatteddate = this.__formatDate(object.lastsubscription)
                        object.lastsubscription = new Date(object.lastsubscription).getTime() / 1000
                        object.index = Date.now()
                    }.bind(this),
                )

                this.cities = clone(items)

                //                    this._digest();
            },

            __fetchSubscriptions: function () {
                const $this = this

                axios.get('/api/v1/subscriptions').then(
                    function (response) {
                        $this.cities = response.data.cities
                        $this.cities_copy = response.data.cities
                        $this.subscriptions = response.data.subscriptions
                        $this.citiesInCount = response.data.citiesInCount
                        $this.citiesOutCount = response.data.citiesOutCount
                        $this.subscriptionCount = response.data.subscriptionCount
                        $this.citiesCount = response.data.citiesCount
                        $this.lastSubscriptionDate = response.data.lastSubscriptionDate
                        $this.schoolCount = response.data.schoolCount
                        $this.cancelledSubscriptionsCount =
                            response.data.cancelledSubscriptionsCount
                        $this.validSubscriptionsCount = response.data.validSubscriptionsCount

                        $this.__formatDates()
                        $this.__countSubscriptions()
                    },

                    $this.__requestError,
                )
            },

            __requestError: function (error) {
                console.log('Request error: ', error)
            },

            __countSubscriptions: function () {},

            __clickFilterSchools: function () {
                this.filterSchools = !this.filterSchools
            },

            __changeOrder: function (field) {
                if (this.orderBy == field) {
                    this.orderType = this.orderType == 'asc' ? 'desc' : 'asc'

                    return
                }

                this.orderType = 'asc'

                this.orderBy = field
            },

            __formatDate: function (date) {
                return date
            },

            __getCityLink: function (subscription) {
                return subscription.city_name
            },

            _getSubscriptionCountClass: function (subscription) {
                if (subscription.subscriptions_count) {
                    return 'sucess'
                }

                return 'danger'
            },
        },

        mounted: function () {
            this.__fetchSubscriptions()
        },

        computed: {
            _cities: function () {
                var orderBy = this.orderBy

                var orderType = this.orderType

                return _.orderBy(
                    this.cities,

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

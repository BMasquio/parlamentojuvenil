<script>
    Vue.config.devtools = true

    if (jQuery("#vue-vote-statistics").length)
    {
        var vueVoteStatistics = new Vue({
            el: '#vue-vote-statistics',

            data: {
                totalVotes: 0,
                byTime: [],
                byCity: [],

                timeOrderBy: 'date_time',
                timeOrderType: 'desc',

                cityOrderBy: 'city',
                cityOrderType: 'asc',

                busy: false,
            },

            methods: {
                __fetchStatistics: function (event)
                {
                    this.busy = true;

                    this.$http.get('/api/v1/vote/statistics').then(
                        function (response)
                        {
                            this.totalVotes = response.body.total_votes;
                            this.byCity = response.body.by_city;
                            this.byTime = response.body.by_time;

                            setTimeout(this.__fetchStatistics, 3000);

                            this.busy = false;
                        },

                        this.__requestError
                    );
                },

                __requestError: function(error) {
                    console.log('Request error: ', error);

                    this.busy = false;
                },

                __changeOrderCity: function(field) {
                    if (this.cityOrderBy == field)
                    {
                        this.cityOrderType = this.cityOrderType == 'asc' ? 'desc' : 'asc';

                        return;
                    }

                    this.cityOrderType = 'asc';

                    this.cityOrderBy = field;
                },
            },

            watch: {
                city: function() {
                    this.__fetchStatistics()
                },
            },

            mounted: function ()
            {
                this.__fetchStatistics();
            },

            computed: {
                _byCity: function() {
                    var orderBy = this.cityOrderBy;

                    var orderType = this.cityOrderType;

                    return _.orderBy(
                        this.byCity,

                        function(item) {
                            return item[orderBy] || '';
                        },

                        orderType
                    );
                },

                _byTime: function() {
                    var orderBy = this.timeOrderBy;

                    var orderType = this.timeOrderType;

                    return _.orderBy(
                        this.byTime,

                        function(item) {
                            return item[orderBy] || '';
                        },

                        orderType
                    );
                },

                _arrowClass: function () {
                    if (this.cityOrderType == 'asc') {
                        return 'fa-arrow-down';
                    }

                    return 'fa-arrow-up';
                },
            },
        });
    }
</script>

<script>
    if (jQuery("#vue-admin-contest").length)
    {
        var vueAdminContest = new Vue({
            el: '#vue-admin-contest',

            data: {
                subscriptions: [],
            },

            methods: {
                __search: function () {
                    var url = '/api/v1/search/contest';

                    this.$http.get(url).then(
                        function(response) {
                            this.subscriptions = response.body;
                        },

                        this.__requestError
                    );
                },

                __requestError: function(error) {
                    console.log('Request error: ', error);
                },
            },

            mounted: function() {
                this.__search();
            },
        });
    }
</script>



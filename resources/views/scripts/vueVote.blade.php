<script>
    Vue.config.devtools = true

    if (jQuery("#vue-vote").length)
    {
        var vueVote = new Vue({
            el: '#vue-vote',

            data: {
                cpf: '',
            },

            methods: {
                __requestError: function(error) {
                    console.log('Request error: ', error);
                },

                __fetchSchools: function (event)
                {
                    if (this.city)
                    {
                        console.log('fetchSchools/'+this.city);

                        this.$http.get('/schools/' + this.city).then(
                            function (response)
                            {
                                console.log(response);

                                this.schools = response.body;
                            },

                            this.__requestError
                        );
                    }
                },

                __requestError: function(error) {
                    console.log('Request error: ', error);
                },
            },

            watch: {
                city: function() {
                    this.__fetchSchools()
                },
            },

            mounted: function ()
            {
                this.__fetchSchools();
            },
        });
    }
</script>

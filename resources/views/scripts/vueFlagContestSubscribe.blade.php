<script>
    Vue.config.devtools = true

    if (jQuery("#vue-flag-contest-subscribe").length)
    {
        var vueFlagContest = new Vue({
            el: '#vue-flag-contest-subscribe',

            data: {
                email: laravel.loggedUser.user.email,
                email_valid: true,
            },

            methods: {
                __validateAndSubmit: function () {
                    this.$http.post('/api/v1/validate/email', {_token: laravel._token, email: this.email}).then(
                        function(response) {
                            this.email_valid = response.body.success;
                            this.__submit();
                        },

                        this.__requestError
                    );
                },

                __requestError: function(error) {
                    this.searching = false;
                },

                __submit: function () {
                    var $form = $('#form-flag-subscribe');

                    $form.get(0).submit();
                },
            },

            watch: {

            },

            mounted: function ()
            {

            },
        });
    }
</script>

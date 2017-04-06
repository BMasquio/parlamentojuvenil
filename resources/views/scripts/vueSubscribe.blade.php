<script>
    Vue.config.devtools = true

    if (jQuery("#subscribe").length)
    {
        var emptySchool = [{value: '', text: 'SELECIONE SUA ESCOLA'}];

        var vueSubscribe = new Vue({
            el: '#subscribe',

            data: {
                address: null,
                address_complement: null,
                address_neighborhood: null,
                address_city: null,
                cpf: null,
                cpfValid: false,
                zipValid: false,
                birthdate: "{{ $currentStudent->birthdate or '' }}",
                city: "{{ $currentStudent->city or '' }}",
                facebook: null,
                social_name: null,
                id_issuer: null,
                registration: "{{ $currentStudent->registration or '' }}",
                email: null,
                grade: null,
                phone_home: null,
                phone_cellular: null,
                name: "{{ $currentStudent->name or '' }}",
                zip_code: null,
                gender: null,
                gender2: null,
                id_number: null,
                schools: emptySchool,
                elected: null,
                school: "{{ $currentStudent->school or '' }}",
            },

            methods: {
                checkCpf: function()
                {
                    var cpf = jQuery('#cpf').val();

                    cpf = cpf.split('.').join("");
                    cpf = cpf.split('-').join("");
                    cpf = cpf.split('_').join("");

                    this.cpfValid = TestaCPF(cpf);
                },

                checkZip: function()
                {
                    var zip = jQuery('#zip_code').val();

                    zip = zip.split('.').join("");
                    zip = zip.split('-').join("");
                    zip = zip.split('_').join("");

                    if (zip.length == 8)
                    {
                        this.zipValid = true;

                        this.$http.get('http://viacep.com.br/ws/'+zip+'/json/', function(zip)
                        {
                            if (zip.localidade)
                            {
                                this.address_city = zip.localidade;
                                this.address = zip.logradouro;
                                this.address_neighborhood = zip.bairro;
                            }
                        });
                    }
                },

                __fetchSchools: function (event)
                {
                    if (this.city)
                    {
                        this.$http.get('/schools/' + this.city, function (schools)
                        {
                            this.schools = schools;
                        });
                    }
                },

                __cityChanged: function (event)
                {
                    var city = '{{ Input::old('city') ?: (isset($subscription) ? $subscription->city : '') }}';

                    if (this.city !== city)
                    {
                        this.school = '';
                    }

                    this.__fetchSchools();
                },
            },

            watch: {
                'city': '__cityChanged',
            },

            ready: function ()
            {
                this.__fetchSchools();
            },
        });
    }
</script>

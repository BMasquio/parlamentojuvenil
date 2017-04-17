<script>
    Vue.config.devtools = true

    if (jQuery("#subscribe").length)
    {
        var emptySchool = [{value: '', text: 'SELECIONE SUA ESCOLA'}];

        var vueSubscribe = new Vue({
            el: '#subscribe',

            data: {
                cpfValid: false,
                zipValid: false,
                address: "{{ $student->address or '' }}",
                address_complement: "{{ $student->address_complement or '' }}",
                address_neighborhood: "{{ $student->address_neighborhood or '' }}",
                address_city: "{{ $student->address_city or '' }}",
                cpf: "{{ $student->cpf or '' }}",
                birthdate: "{{ $student->birthdate or '' }}",
                city: "{{ $student ? mb_strtoclean($student->city) : '' }}",
                facebook: "{{ $student->facebook or '' }}",
                social_name: "{{ $student->social_name or '' }}",
                id_issuer: "{{ $student->id_issuer or '' }}",
                registration: "{{ $student->registration or '' }}",
                email: "{{ $student->email or '' }}",
                grade: "{{ $student->grade or '' }}",
                phone_home: "{{ $student->phone_home or '' }}",
                phone_cellular: "{{ $student->phone_cellular or '' }}",
                name: "{{ $student->name or '' }}",
                zip_code: "{{ $student->zip_code or '' }}",
                gender: "{{ $student->gender or '' }}",
                gender2: "{{ $student->gender2 or '' }}",
                id_number: "{{ $student->id_number or '' }}",
                schools: emptySchool,
                elected: "{{ $student->elected or '' }}",
                school: "{{ $student->school or '' }}",
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

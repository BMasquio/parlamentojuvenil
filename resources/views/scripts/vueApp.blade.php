<script>
    if (jQuery("#subscribe").length)
    {
        var vueApp = new Vue({
            el: '#subscribe',

            data: {
                address: null,
                address_complement: null,
                address_neighborhood: null,
                address_city: null,
                cpf: null,
                cpfValid: false,
                zipValid: false,
                birthdate: null,
                city: null,
                facebook: null,
                social_name: null,
                id_issuer: null,
                registration: null,
                email: null,
                grade: null,
                phone_home: null,
                phone_cellular: null,
                name: null,
                zip_code: null,
                gender: null,
                gender2: null,
                id_number: null,
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
                }
            }
        });
    }
</script>

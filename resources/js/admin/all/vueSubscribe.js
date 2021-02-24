if (jQuery('#vue-subscribe').length) {
    var emptySchool = [{ value: '', text: 'SELECIONE A ESCOLA' }]

    var vueSubscribe = new Vue({
        el: '#vue-subscribe',

        data: {
            cpfValid: false,
            zipValid: false,
            address,
            address_complement,
            address_neighborhood,
            address_city,
            cpf,
            city,
            birthdate,
            social_name,
            id_issuer,
            registration,
            email,
            grade,
            phone_home,
            phone_cellular,
            name,
            zip_code,
            gender,
            gender2,
            id_number,
            elected_1nd,
            elected_2nd,
            auto_elected,
            school: '',
            schools: emptySchool,
            elected_fields: [
                { name: 'elected_1nd', round: 1 },
                { name: 'elected_2nd', round: 2 },
            ],
        },

        methods: {
            checkCpf: function () {
                var cpf = this.cpf.split('.').join('').split('-').join('').split('_').join('')

                this.cpfValid = testaCPF(cpf)
            },

            checkZip: function () {
                const $this = this

                var zip = jQuery('#zip_code').val()

                zip = zip.split('.').join('')
                zip = zip.split('-').join('')
                zip = zip.split('_').join('')

                if (zip.length == 8) {
                    this.zipValid = true

                    axios.get('//viacep.com.br/ws/' + zip + '/json/').then(
                        function (response) {
                            if (response.body.localidade) {
                                $this.address_city = response.data.localidade
                                $this.address = response.data.logradouro
                                $this.address_neighborhood = response.data.bairro
                            }
                        },

                        $this.__requestError,
                    )
                }
            },

            __requestError: function (error) {
                console.log('Request error: ', error)
            },

            __fetchSchools: function (event) {
                const $this = this

                if ($this.city) {
                    axios.get('/schools/' + $this.city).then(
                        function (response) {
                            $this.schools = response.data
                        },

                        $this.__requestError,
                    )
                }
            },

            getStudentData: function (event) {
                const $this = this

                if ($this.city) {
                    axios.get('/admin/subscriptions/' + window.subscriptionId).then(
                        function (response) {
                            $this.address = response.data.student.address
                            $this.address_complement = response.data.student.address_complement
                            $this.address_neighborhood = response.data.student.address_neighborhood
                            $this.address_city = response.data.student.address_city
                            $this.cpf = response.data.student.cpf
                            $this.birthdate = response.data.student.birthdate
                            $this.social_name = response.data.student.social_name
                            $this.id_issuer = response.data.student.id_issuer
                            $this.registration = response.data.student.registration
                            $this.email = response.data.student.email
                            $this.grade = response.data.student.grade
                            $this.phone_home = response.data.student.phone_home
                            $this.phone_cellular = response.data.student.phone_cellular
                            $this.name = response.data.student.name
                            $this.zip_code = response.data.student.zip_code
                            $this.gender = response.data.student.gender
                            $this.gender2 = response.data.student.gender2
                            $this.id_number = response.data.student.id_number
                            $this.school = response.data.student.school
                            $this.elected_1nd = response.data.elected_1nd ? 1 : 0
                            $this.elected_2nd = response.data.elected_2nd ? 1 : 0
                            $this.auto_elected = response.data.auto_elected ? 1 : 0
                        },

                        $this.__requestError,
                    )
                }
            },
        },

        watch: {
            city: function () {
                this.__fetchSchools()
            },

            cpf: function (val) {
                this.checkCpf()
            },
        },

        mounted: function () {
            this.getStudentData()
            this.__fetchSchools()
        },
    })
}

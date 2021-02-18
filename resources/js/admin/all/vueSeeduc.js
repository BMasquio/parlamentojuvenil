import Vue from 'vue'

if (jQuery('#vue-admin-seeduc').length) {
    const STATUS_INITIAL = 0,
        STATUS_SAVING = 1,
        STATUS_SUCCESS = 2,
        STATUS_FAILED = 3

    var vueSeeduc = new Vue({
        el: '#vue-admin-seeduc',

        data: {
            registration: '',
            birthdate: '',
            name: '',
            students: [],
            searching: false,
            uploadFieldName: '',
            isUploading: false,
            wasUploaded: false,
            fileCount: 0,
            error: '',
        },

        methods: {
            __search: function () {
                const $this = this

                this.searching = true

                var url =
                    '/api/v1/search/seeduc?registration=' +
                    this.registration +
                    '&birthdate=' +
                    this.birthdate +
                    '&name=' +
                    this.name

                axios.get(url).then(
                    function (response) {
                        $this.searching = false

                        $this.students = response.data
                    },

                    this.__requestError,
                )
            },

            __requestError: function (error) {
                console.log('Request error: ', error)

                this.searching = false
            },

            filesChange: function (fieldName, fileList) {
                if (!fileList.length) return

                let formData = {}

                formData['_token'] = window.laravel.token
                formData['file'] = fileList[0]

                this.upload(formData)
            },

            upload: function (formData) {
                this.error = ''
                this.currentStatus = STATUS_SAVING

                this.uploadFile(formData)
                    .then(function (x) {
                        this.uploadedFiles = [].concat(x)
                        this.currentStatus = STATUS_SUCCESS
                    })
                    .catch(function (err) {
                        this.uploadError = err.response
                        this.currentStatus = STATUS_FAILED
                    })
            },

            uploadFile: function (formData) {
                const $this = this

                let uploadFormData = new FormData()

                for (var key in formData) {
                    uploadFormData.append(key, formData[key])
                }

                this.isUploading = true
                this.wasUploaded = false

                return axios
                    .post('/api/v1/seeduc/upload', uploadFormData)
                    .then(
                        function () {
                            $this.isUploading = false

                            $this.wasUploaded = true
                        },

                        $this.__uploadError,
                    )
                    .catch(function (error) {
                        $this.isUploading = false

                        console.log('error', error)
                    })
            },

            __uploadError: function (error) {
                console.log('__uploadError', error)

                this.isUploading = false

                this.error = error.body
            },
        },
    })
}

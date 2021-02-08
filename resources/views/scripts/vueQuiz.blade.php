@include('scripts.components.modal.template')

<script>
    // register modal component
    Vue.component('modal', {
        template: '#modal-template',
        props: {
            show: {
                type: Boolean,
                required: true,
                twoWay: true
            }
        }
    })

    if (jQuery("#vue-quiz").length)
    {
        var vueQuiz = new Vue({
            el: '#vue-quiz',

            data: {
                id: '{{ $itemId }}',
                baseUrl: '{{ route('quiz.index') }}',
                resultUrl: '{{ route('quiz.result', ['id' => $itemId ]) }}',
                currentQuestion: 0,
                quiz: null,
                askForConfirmation: false,
                currentAnswer: null,
            },

            methods: {
                loadQuestions: function () {
                    this.$http.get(this.baseUrl+'/'+this.id+'/questions').then(
                        function (response)
                        {
                            this.quiz = response.body;
                        },

                        this.__requestError
                    );
                },

                __requestError: function(error) {
                    console.log('Request error: ', error);
                },

                answerQuestion: function (answer) {
                    this.quiz.questions[this.currentQuestion].user_answer = answer;
                },

                cancelAnswer: function () {
                    this.currentAnswer = null;
                },

                previousQuestion: function () {
                    this.currentQuestion--;

                    if (this.currentQuestion < 0) {
                        this.currentQuestion = 0;
                    }
                },

                nextQuestion: function () {
                    this.currentQuestion++;

                    if (!this.quiz.questions[this.currentQuestion]) {
                        this.previousQuestion();
                    }
                },

                isLastQuestion: function () {
                    if (!this.quiz) {
                        return false;
                    }

                    return (this.currentQuestion+1) == this.quiz.questions.length;
                },

                sendAnswers: function () {
                    vue = this;

                    var data = {
                        _token: '{{ csrf_token() }}',
                        quiz: this.quiz,
                    };

                    this.$http.post(this.baseUrl+'/answers/', data)
                    .then(function() {
                        window.location = vue.resultUrl;
                    });
                },

                sendAnsweredQuestion: function (answer) {
                    this.$http.get(this.baseUrl+'/'+this.id+'/answer/'+this.currentQuestion+'/'+this.currentAnswer);

                    this.askForConfirmation = false;

                    if (this.currentQuestion+1 >= Object.keys(this.quiz.questions).length)
                    {
                        window.location = this.resultUrl;
                    }
                    else
                    {
                        this.currentQuestion++;
                    }
                },

                allAnswered: function () {
                    var all = true;

                    for (var item in this.quiz.questions) {
                        all = all && this.quiz.questions[item].user_answer;
                    }

                    return all;
                },
            },

            mounted: function() {
                this.loadQuestions();
            }
        });
    }
</script>



<!-- template for the modal component -->
<script type="x/template" id="modal-template">
    <div class="modal-mask" v-show="show" transition="modal">
        <div class="modal-wrapper quadro-amarelo borda-preta">
            <div class="modal-container">
                <div class="modal-header caixa-preta">
                    <slot name="header">
                        Resposta
                    </slot>
                </div>

                <div class="modal-body results-text text-center">
                    <slot name="body">
                        Confirma o envio desta resposta?
                    </slot>
                </div>

                <div class="modal-footer">
                    <slot name="footer">
                        <button class="modal-default-button quadro-verde borda-preta"
                        @click="this.$root.sendAnsweredQuestion()">
                        SIM
                        </button>

                        <button class="modal-default-button quadro-vermelho borda-preta"
                        @click="this.$root.cancelAnswer()">
                        NÃO
                        </button>
                    </slot>
                </div>
            </div>
        </div>
    </div>
</script>

<script>
    var cpfMasked = false;
    var birthdayBinded = false;
    var zipCodeMasked = false;

    function bindComponents()
    {
        birthday = jQuery('#birthdate');

        if ( ! birthdayBinded && birthday.length !== 0)
        {
            birthday.datepicker(
                    {
                        autoclose: true,
                        todayHighlight: false,
                        format: "dd/mm/yyyy",
                        todayBtn: false,
                        {{--startDate: "{{ isset($seventeenDate) ? $seventeenDate : '' }}",--}}
                        {{--endDate: "{{ isset($fourteenDate) ? $fourteenDate : '' }}",--}}
                        language: "pt-BR"
                    });

            birthdayBinded = true;
        }

        var cpf = jQuery("#cpf");

        if (! cpfMasked && cpf.length)
        {
            cpf.mask("999.999.999-99");

            cpfMasked = true;
        }

        var zipCode = jQuery("#zip_code");

        if (! zipCodeMasked && zipCode.length)
        {
            zipCode.mask("99.999-999");

            zipCodeMasked = true;
        }
    }

    function checkBindings()
    {
        setTimeout(function()
        {
            bindComponents();
            checkBindings();
        }, 1000);
    }

    checkBindings();
</script>

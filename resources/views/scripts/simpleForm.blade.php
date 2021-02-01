<script>
    jQuery(document).ready(function()
    {
        jQuery(document).on("change", '#city-edit', function(element)
        {
            updateChecklist(element.target);
        });

        updateChecklist(jQuery('#city-edit'));
    });

    function updateChecklist(element)
    {
//        var school = jQuery(element).val();
//
//        jQuery.ajax({
//            type: 'GET',
//            url: '/schools/' + school,
//            dataType: 'json',
//            success: function(json)
//            {
//                var $el = jQuery("#school-edit");
//                $el.empty(); // remove old options
//                $el.append(jQuery("<option></option>")
//                        .attr("value", '').text('SELECIONE A ESCOLA'));
//                jQuery.each(json, function(key, value) {
//                    $el.append(jQuery("<option></option>")
//                            .attr("value", value.name).text(value.name));
//                });
//            }
//        });
    }
</script>

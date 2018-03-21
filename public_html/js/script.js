$(document).ready(function() {
    $('[name="maker_id"]').change(function(){
        var makerId = $(this).val() * 1;

        // https://www.w3schools.com/jquery/ajax_ajax.asp
        var url = "?maker_id=" + makerId;
        $.ajax({
            url: url,
            success: function (result) {
                $('#model').html('<option value="">Please select</option>');

                $.each(result, function() {
                    $('#model').html($('#model').html() + '<option value="' + this.id + '">' + this.title + '</option>');
                });
            }
        });
    });
});
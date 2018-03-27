$(function () {
    $(document).on('change', 'input, select', function () {
        var $form = $('form');
        $form.ajaxSubmit({url: $form.attr('data-validate'), type: 'post', success: function (data) {
                var fields = JSON.parse(data);
                fields.forEach(function (field) {
                    $('#'+field.name+'Message').text(field.message);
                });
            }});
    });
});
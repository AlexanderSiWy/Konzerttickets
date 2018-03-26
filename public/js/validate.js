$(function () {
    $(document).on('change', 'input', function () {
        $('form').ajaxSubmit({url: 'ValidatePerson', type: 'post', success: function (data) {
                var fields = JSON.parse(data);
                fields.forEach(function (field) {
                    $('#'+field.name+'Message').text(field.message);
                });
            }});
    });
});
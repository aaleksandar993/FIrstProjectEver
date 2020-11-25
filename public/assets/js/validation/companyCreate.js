$('form.companyCreateForm').submit(function(event) {
    $("#companySaveButton").attr('disabled', true);
    $("form.companyCreateForm").validate({
        errorClass: "text-danger border-danger",
        rules: {
            companyName: "required",
            companyAddress: "required",
            companyIndustry: "required",
            companyPhone: "required",
            companyCountry: "required",
            companyWebsite: "required",
            companyCity: "required",
            companySize: "required",
        }
    })

    event.preventDefault();
    var frm = $('.companyCreateForm');

    $.ajax({
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        data: $(this).serialize(),
        success: function(response) {
            var response = JSON.parse(response);
            if (response.statusCode == 200) {
                $.alert({
                    title: 'Success!',
                    content: 'Successfully added new company!',
                    style: 'modern'
                });
                $("#companySaveButton").removeAttr("disabled");
                $('.companyCreateForm').find('input').val('');
                $('.companyCreateForm').find('textarea').val('');
                $.notify("Company added successfully !", {
                    globalPosition: 'top left',
                    style: 'bootstrap',
                    className: 'success'
                });
            } else if (response.statusCode == 201) {


                $.confirm({
                    title: 'Hi ' + data.name,
                    content: 'Please fill all required fields before submitting',
                    type: 'red',
                    buttons: {
                        ok: {
                            text: "ok!",
                            btnClass: 'btn-danger',
                            keys: ['enter'],
                            action: function() {
                                console.log('the user clicked confirm');
                            }
                        },
                        cancel: function() {
                            console.log('the user clicked cancel');
                        }
                    }
                });
            }
        },
        error: function(data) {
            $.notify("You have wrong inputs!", "error");
        },
    });
});
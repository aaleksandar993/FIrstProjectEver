$(document).ready(function() {
    $('.jobStatusUpdateButton').click(function() {
        var job_id = $(this).attr("id");
        $("input[name='job_id']").val(job_id);
        $('.jobStatus').modal('show');
    })
    $('form.jobStatusUpdateForm').submit(function(event) {
        $("form.jobStatusUpdateForm").validate({
            errorClass: "text-danger border-danger",
            rules: {
                status: 'required',
            }
        })

        event.preventDefault();
        var frm = $('.jobStatusUpdateForm');

        $.ajax({
            type: $(this).attr('method'),
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(data) {
                var data = JSON.parse(data);
                if (data.statusCode == 200) {
                    $("#jobStatusUpdateSaveButton").removeAttr("disabled");
                    $.notify("Job " + data.status, {
                        globalPosition: 'top left',
                        style: 'bootstrap',
                        className: 'success'
                    });
                    $("#" + data.id).text(data.status);
                    if (data.status == 'Closed') {
                        $("#" + data.id).addClass('text-danger');
                    } else {
                        $("#" + data.id).removeClass('text-danger');
                        $("#" + data.id).addClass('text-success');
                    }
                } else if (data.statusCode == 201) {
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
})
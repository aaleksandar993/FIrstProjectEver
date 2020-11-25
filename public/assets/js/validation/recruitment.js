$('form.addCandidateToJob').submit(function(event) {
    $("#recruitmentSaveButton").attr('disabled', true);
    $("form.addCandidateToJob").validate({
        errorClass: "text-danger border-danger",
        rules: {}
    })

    event.preventDefault();
    var frm = $('.addCandidateToJob');

    $.ajax({
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        data: $(this).serialize(),
        success: function(data) {
            var data = JSON.parse(data);
            if (data.statusCode == 200) {
                $("#recruitmentSaveButton").removeAttr("disabled");
                $.notify("Candidate added successfully !", {
                    globalPosition: 'top left',
                    style: 'bootstrap',
                    className: 'success'
                });
                window.location.reload();
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

$('form#asignJobToCandidate').submit(function(event) {
    $("#recruitmentSaveButton").attr('disabled', true);
    $("form.addCandidateToJob").validate({
        errorClass: "text-danger border-danger",
        rules: {}
    })

    event.preventDefault();
    var frm = $('.addCandidateToJob');

    $.ajax({
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        data: $(this).serialize(),
        success: function(data) {
            var data = JSON.parse(data);
            if (data.statusCode == 200) {
                $("#recruitmentSaveButton").removeAttr("disabled");
                $.notify("Assigned successfully !", {
                    globalPosition: 'top left',
                    style: 'bootstrap',
                    className: 'info'
                });
                window.location.reload();
                $('.candidateAssignJobModal').modal('toggle');
            } else if (data.statusCode == 201) {
                $.confirm({
                    title: 'Hi ' + data.name,
                    content: 'Something went wrong try again',
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

$('.candidateRecruitmentStatus').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var candidate_id = button.data('candidate_id')
    var job_id = button.data('job_id')
    var status = button.data('status')
    var modal = $(this)
    modal.find('#candidate_id').val(candidate_id)
    modal.find('#job_id').val(job_id)
    modal.find('#candidateRecruitmentStatusInput').val(status)

    $('form.recruitmentStatusUpdate').submit(function(event) {
    $("#recruitmentStatusUpdateSaveButton").attr('disabled', true);
    $("form.recruitmentStatusUpdate").validate({
        errorClass: "text-danger border-danger",
        rules: {}
    })

    event.preventDefault();
    var frm = $('.recruitmentStatusUpdate');

    $.ajax({
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        data: $(this).serialize(),
        success: function(data) {
            var data = JSON.parse(data);
            if (data.statusCode == 200) {
                $("#recruitmentStatusUpdateSaveButton").removeAttr("disabled");
                $.notify("Status updated !", {
                    globalPosition: 'top left',
                    style: 'bootstrap',
                    className: 'info'
                });
                window.location.reload()
            } else if (data.statusCode == 201) {
                $.confirm({
                    title: 'Hi ' + data.name,
                    content: 'Something went wrong try again',
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


// ALL CANDIDATES

$('.jobDescription').on('show.bs.modal', function (event) {
    var target = $(event.relatedTarget) // Button that triggered the modal
    var description = target.data('description')
    $('#jobDescription').html(description)
});

$('.referent').on('show.bs.modal', function (event) {
    var referent = $(event.relatedTarget) // Button that triggered the modal
    var id = referent.data('id')
    var name = referent.data('name')
    var email = referent.data('email')
    var phone = referent.data('phone')
    var role = referent.data('role')
    $('#referentName').html(name)
    $('#referentID').attr('href','/contact/show/'+id)
    $('#referentPhone').html(phone)
    $('#referentEmail').attr('href','mailto:'+email)
    $('#referentEmail').html(email)
    $('#referentRole').html(role)
});


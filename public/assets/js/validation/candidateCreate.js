$('form.candidateCreateForm').submit(function(event) {
    $("form.candidateCreateForm").validate({
        errorClass: "text-danger border-danger",
        rules: {
            candidateFirstName: 'required',
            candidateAddress: 'required',
            candidatePhone: 'required',
            candidateLastName: 'required',
            candidateCity: 'required',
            candidateEmail: 'required',
            candidateGender: 'required',
            candidateCountry: 'required',
            // candidateCV: 'required',
            // candidatePhoto: 'required',
            candidateBirthday: 'required',
            candidateCitizenship: 'required',
            'schoolName[]': 'required',
            'educationQualification[]': 'required',
            'educationYear[]': 'required',
            'educationCity[]': 'required',
            'educationCountry[]': 'required',
            'professionalSkills[]': 'required',
            'professionalSkillsLevel[]': 'required',
            'experienceWorkTill[]': 'required',
            'experienceTask[]': 'required',
            'experienceCompanyName[]': 'required',
            'experienceCountry[]': 'required',
            'experienceCity[]': 'required',
            'experienceTasksPerformed[]': 'required',
            'experienceWorkFrom[]': 'required',
            'language[]': 'required',
            'languageLevel[]': 'required',
            'software[]': 'required',
            'softwareKnowledgeLevel[]': 'required',
            message: 'required',
            candidateAgreement: 'required',
        }
    })
    event.preventDefault();
    var fd = new FormData(this);

$.ajax({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        data: fd,
        cache: false,
        contentType: false,
        processData: false,
        success: function(data) {
            var data = JSON.parse(data);
            if (data.statusCode == 200) {
                $.notify("Candidate added successfully !", {
                    globalPosition: 'top left',
                    style: 'bootstrap',
                    className: 'success'
                });
                $("#candidateSaveButton").removeAttr("disabled");
                $('.candidateCreateForm').find('input').val('');
                $('.candidateCreateForm').find('textarea').val('');
                $.alert({
                    title: 'Success!',
                    content: 'Successfully added new Candidate!',
                    style: 'modern'
                });
            } else if (data.statusCode == 201) {
                $.confirm({
                    title: 'Hi ' + data.name,
                    content: 'Please fill all fields!',
                    type: 'red',
                    buttons: {
                        ok: {
                            text: "ok!",
                            btnClass: 'btn-danger',
                            keys: ['enter'],
                            action: function() {
                                console.log(data);
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

    // $.ajax({
    //     type: $(this).attr('method'),
    //     url: $(this).attr('action'),
    //     data: $(this).serialize(),

    //     success: function(data) {
    //         var data = JSON.parse(data);
    //         if (data.statusCode == 200) {
    //             $.notify("Company added successfully !", {
    //                 globalPosition: 'top left',
    //                 style: 'bootstrap',
    //                 className: 'success'
    //             });
    //             $("#candidateSaveButton").removeAttr("disabled");
    //             $('.candidateCreateForm').find('input').val('');
    //             $('.candidateCreateForm').find('textarea').val('');
    //             $.alert({
    //                 title: 'Success!',
    //                 content: 'Successfully added new Candidate!',
    //                 style: 'modern'
    //             });
    //         } else if (data.statusCode == 201) {
    //             $.confirm({
    //                 title: 'Hi ' + data.name,
    //                 content: 'Please fill all required fields before submitting',
    //                 type: 'red',
    //                 buttons: {
    //                     ok: {
    //                         text: "ok!",
    //                         btnClass: 'btn-danger',
    //                         keys: ['enter'],
    //                         action: function() {
    //                             console.log('the user clicked confirm');
    //                         }
    //                     },
    //                     cancel: function() {
    //                         console.log('the user clicked cancel');
    //                     }
    //                 }
    //             });
    //         }
    //     },
    //     error: function(data) {
    //         $.notify("You have wrong inputs!", "error");
    //     },
    // });
});
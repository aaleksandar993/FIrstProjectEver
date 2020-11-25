$('form.jobCreateForm').submit(function(event) {
    event.preventDefault();
    $("form.jobCreateForm").validate({
        errorClass: "text-danger border-danger",
        rules: {
            requiredProfession: 'required',
            openings: 'required',
            placeOfWork: 'required',
            salary: 'required',
            workingHours: 'required',
            // avaliableNow : 'required',
            jobDescription: 'required',
            // availabilityDate : 'required',
            shifts: 'required',
            // accomodations: 'required',
            // accomodationsPays: 'required',
            // accomodationsCosts : 'required',
            corporateInsertion: 'required',
            contractDetails: 'required',
            //fixedTerm : 'required',
            //partTime : 'required',
            additionalJobInformation: 'required',
            candidateQualification: 'required',
            // candidateAge : 'required',
            candidateEducation: 'required',
            candidateWorkExperience: 'required',
            language: 'required',
            // candidateOtherLanguage : 'required',
            candidateComputerSkills: 'required',
            candidateDrivingLicence: 'required',
            candidateMeansOfTransport: 'required',
            descriptionOfStaffRequest: 'required',
        }
    })


    var frm = $('.jobCreateForm');

    $.ajax({
        type: $(this).attr('method'),
        url: $(this).attr('action'),
        data: $(this).serialize(),
        success: function(data) {
            var data = JSON.parse(data);
            if (data.statusCode == 200) {
                $.alert({
                    title: 'Success!',
                    content: 'Successfully added new job!',
                    style: 'modern'
                });
                $("#jobSaveButton").removeAttr("disabled");
                $('.jobCreateForm').find('input').val('');
                $('.jobCreateForm').find('textarea').val('');
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
                $(document).ready(function(){
                $('.jobStatusUpdateButton').click(function(){
                    var job_id = $(this).attr("id");
                    $('#job_id').val(job_id);
                    $('.jobStatus').modal('show');
                })
            })
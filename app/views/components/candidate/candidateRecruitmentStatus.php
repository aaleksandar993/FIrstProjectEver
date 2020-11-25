<div class="modal fade candidateRecruitmentStatus" tabindex="-1" role="dialog" aria-labelledby="candidateRecruitmentStatus" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				Change Recruitment Status
			</div>
			<div class="container-fluid pb-3 pt-3">
				<form action="/recruitment/update" method="post" class="recruitmentStatusUpdate">
					<input type="hidden" name="job_id" id="job_id">
					<input type="hidden" name="candidate_id" id="candidate_id">
					<input type="text" name="status" class="form-control" id="candidateRecruitmentStatusInput">
					<input type="submit" class="btn btn-sm btn-outline-success mt-3" id="recruitmentStatusUpdateSaveButton">
				</form>
			</div>
		</div>
	</div>
</div>
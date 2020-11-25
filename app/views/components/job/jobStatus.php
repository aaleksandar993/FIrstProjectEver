<div class="modal fade jobStatusModal" tabindex="-1" role="dialog" aria-labelledby="jobStatusModal" aria-hidden="true">
	<div class="modal-dialog modal-sm modal-dialog-centered">
		<div class="modal-content rounded">
			<div class="modal-header">
				Job Status
			</div>
			<div class="container-fluid pb-3 pt-3 mb-3 ">
				<form action="/job/statusUpdate" method="post" class="jobStatusUpdateForm">
					<input type="hidden" name="job_id" id="job_id">
					<select name="status" class="form-control">
						<option value="open">Open</option>
						<option value="closed">Closed</option>
					</select>
					<input type="submit" class="btn btn-sm btn-outline-success mt-3" id="jobStatusUpdateSaveButton">
				</form>
			</div>
		</div>
	</div>
</div>
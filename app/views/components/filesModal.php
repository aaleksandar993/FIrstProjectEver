<div class="modal fade" id="fileForm" role="dialog" aria-labelledby="fileModalLabel" aria-hidden="true">
	<form action="/file/store" method="post" accept-charset="utf-8" class="fileForm">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="fileModalLabel">
					Add File
					</h5>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<input type="hidden" name="user_id" value="<?=@$_SESSION['uid']?>">
							<input type="hidden" name="company_id" value="<?=@$company->id?>">
							<input type="hidden" name="job_id" value="<?=@$job->id?>">
							<input type="hidden" name="candidate_id" value="<?=@$candidate->id?>">
							<input type="file" name="file" class="form-control-file">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success btn-sm" id="fileSaveButton">
					Save
					</button>
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
					Close
					</button>
				</div>
			</div>
		</div>
	</form>
</div>
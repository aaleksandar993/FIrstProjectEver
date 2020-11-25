<div class="modal fade" id="jobAddFile" role="dialog" aria-labelledby="jobAddFile" aria-hidden="true">
	<form action="/file/store" method="post" accept-charset="utf-8" enctype="multipart/form-data">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">
					Add File
					</h5>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<input type="hidden" name="job_id" value="<?=@$job->id?>">
							<input type="file" name="file" required="true">
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success btn-sm">
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
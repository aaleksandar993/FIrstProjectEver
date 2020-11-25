<div class="modal fade" id="addNote" role="dialog" aria-labelledby="addNote" aria-hidden="true">
	<form action="/note/store" method="post" accept-charset="utf-8" class="noteForm">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="addNote">
					Add Note
					</h5>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<input type="hidden" name="user_id" value="<?=@$_SESSION['uid']?>">
							<input type="hidden" name="job_id" value="<?=@$job->id?>">
							<textarea class="form-control" aria-label="Note" name="note"></textarea>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success btn-sm" id="noteSaveButton" onsubmit="preventDefault()">
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
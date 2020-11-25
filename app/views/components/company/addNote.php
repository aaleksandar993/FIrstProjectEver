<div class="modal fade" id="modal-container-221164" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<form action="/note/store" method="post" accept-charset="utf-8" class="noteForm">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="myModalLabel">
					Add Note
					</h5>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<input type="hidden" name="user_id" value="<?=@$_SESSION['uid']?>">
							<input type="hidden" name="company_id" value="<?=@$company->id?>">
							<textarea class="form-control" aria-label="Note" name="note"></textarea>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-success btn-sm" id="noteSaveButton">
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
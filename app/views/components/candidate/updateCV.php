<div class="modal fade updateCV" tabindex="-1" role="dialog" aria-labelledby="updateCV" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				Update CV
			</div>
			<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<form action="/candidate/updateCV/<?=@$candidate->id?>" method="post" enctype="multipart/form-data">
							<input type="file" name="candidateCV" class="form-control" class="float-left">
							<input type="submit" class="btn btn-sm btn-outline-success float-left m-2">
							</form>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>
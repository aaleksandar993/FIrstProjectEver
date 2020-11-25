<div class="modal fade updateImage" tabindex="-1" role="dialog" aria-labelledby="updateImage" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				Update Image
			</div>
			<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<form action="/candidate/updateImage/<?=@$candidate->id?>" method="post" enctype="multipart/form-data">
							<input type="file" name="candidatePhoto" class="form-control" class="float-left">
							<input type="submit" class="btn btn-sm btn-outline-success float-left m-2">
							</form>
						</div>
					</div>
				</div>
		</div>
	</div>
</div>
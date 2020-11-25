<div class="modal fade contactAdd" tabindex="-1" role="dialog" aria-labelledby="contactAdd" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content rounded shadow-sm">
			<div class="modal-header">
				Add New Contact
			</div>
			<div class="container-fluid pb-3 pt-3">
		<form method="post" action="/contact/store" accept-charset="utf-8" id="contactAdd" class="contactAdd needs-validation" novalidate>
			<div class="row pb-2">
				<div class="col-lg-6 col-md-6 pb-4">
					<input type="hidden" name="company_id" value="<?=@$company->id?>">
					<label for="name">Full name<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
					<input type="text" class="form-control <?=(isset($company->name) ? 'is-invalid' : '');?>" id="name" name="name" value="<?=@$_POST['name']?>" placeholder="John Smith">
					<small class="text-danger error">
					<?=@$company->name['required']?>
					</small>
				</div>
				<div class="col-lg-6 col-md-6 pb-4">
					<label for="Phone">Phone number<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
					<input type="text" class="form-control <?=(isset($company->phone) ? 'is-invalid' : '');?>" id="phone" name="phone" value="<?=@$_POST['phone']?>" placeholder="Phone number">
					<small class="text-danger error">
					<?=@$company->phone['required']?>
					</small>
				</div>
				<div class="col-lg-6 col-md-6 pb-4">
					<label for="role">Role<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
					<input type="text" class="form-control <?=(isset($company->role) ? 'is-invalid' : '');?>" id="role" name="role" value="<?=@$_POST['role']?>" placeholder="Role">
					<small class="text-danger error">
					<?=@$company->role['required']?>
					</small>
				</div>
				<div class="col-lg-6 col-md-6 pb-4">
					<label for="email">Email<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
					<input type="email" class="form-control <?=(isset($company->email) ? 'is-invalid' : '');?>" id="email" name="email" value="<?=@$_POST['email']?>" placeholder="Email">
					<small class="text-danger error">
					<?=@$company->email['required']?>
					</small>
				</div>
			</div>
			<div class="row pb-2 mt-3">
				<button type="submit" class="btn btn-outline-info col-2 offset-5 mb-2" id="contactSaveButton">Submit</button>
			</div>
		</form>
			</div>
		</div>
	</div>
</div>
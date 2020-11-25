<div class="modal fade editContact" tabindex="-1" role="dialog" aria-labelledby="editContact" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content rounded shadow-sm">
			<div class="modal-header">
				Edit Contact
			</div>
			<div class="container-fluid pb-3 pt-3">
				<form method="post" action="/contact/update" accept-charset="utf-8" id="contactAdd" class="contactAdd needs-validation" novalidate>
					<div class="row pb-2">
						<div class="col-lg-6 col-md-6 pb-4">
							<input type="hidden" name="id" value="<?=@$contact->id?>">
							<label for="name">Full name<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
							<input type="text" class="form-control <?=(isset($company->name) ? 'is-invalid' : '');?>" id="name" name="name" value="<?=@$contact->name?>" placeholder="John Smith">
							<small class="text-danger error">
							<?=@$company->name['required']?>
							</small>
						</div>
						<div class="col-lg-6 col-md-6 pb-4">
							<label for="Phone">Phone number<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
							<input type="text" class="form-control <?=(isset($company->phone) ? 'is-invalid' : '');?>" id="phone" name="phone" value="<?=@$contact->phone?>" placeholder="Phone number">
							<small class="text-danger error">
							<?=@$company->phone['required']?>
							</small>
						</div>
						
						<div class="col-lg-6 col-md-6 pb-4">
							<label for="role">Role<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
							<input type="text" class="form-control <?=(isset($company->role) ? 'is-invalid' : '');?>" id="role" name="role" value="<?=@$contact->role?>" placeholder="Role">
							<small class="text-danger error">
							<?=@$company->role['required']?>
							</small>
						</div>
						<div class="col-lg-6 col-md-6 pb-4">
							<label for="email">Email<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
							<input type="email" class="form-control <?=(isset($company->email) ? 'is-invalid' : '');?>" id="email" name="email" value="<?=@$contact->email?>" placeholder="Email">
							<small class="text-danger error">
							<?=@$company->email['required']?>
							</small>
						</div>
					</div>
						<h4 class="alert alert-primary">Social Profiles</h4>
					<div class="row pb-2">
						<div class="col-lg-6 col-md-6 pb-4">
							<label for="LinkedIn">LinkedIn Profile</label>
							<input type="text" class="form-control <?=(isset($company->linkedIn) ? 'is-invalid' : '');?>" id="linkedIn" name="linkedIn" value="<?=@$contact->linkedIn?>" placeholder="LinkedIn">
							<small class="text-danger error">
							<?=@$company->phone['required']?>
							</small>
						</div>
						<div class="col-lg-6 col-md-6 pb-4">
							<label for="Facebook">Facebook Profile</label>
							<input type="text" class="form-control <?=(isset($company->facebook) ? 'is-invalid' : '');?>" id="facebook" name="facebook" value="<?=@$contact->facebook?>" placeholder="Facebook">
							<small class="text-danger error">
							<?=@$company->phone['required']?>
							</small>
						</div>
						<div class="col-lg-6 col-md-6 pb-4">
							<label for="Instagram">Instagram Profile</label>
							<input type="text" class="form-control <?=(isset($company->instagram) ? 'is-invalid' : '');?>" id="instagram" name="instagram" value="<?=@$contact->instagram?>" placeholder="Instagram">
							<small class="text-danger error">
							<?=@$company->phone['required']?>
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
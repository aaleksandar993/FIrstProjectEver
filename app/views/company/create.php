<?=$this->setSiteTitle("Add Company");?>
<?=$this->start('head');?>
<?=$this->end('head');?>
<?=$this->start('body');?>
<div class="card">
	<div class="card-header">
		<h3>Add Company</h3>
	</div>
	<div id="success" class="alert-dismissible text-center"></div>
	<div class="card-body">
		<form method="post" action="/company/store" accept-charset="utf-8" id="companyRegister" class="companyCreateForm needs-validation" novalidate>
			<div class="row pb-2">
				<div class="col-12">
					<h3 class="text-info p-2 mb-2 rounded">
					<i class="fa fa-building"></i> Company Information
					</h3>
					<hr class="bg-info">
				</div>
				<div class="col-lg-6 col-md-6 pb-4 form-group">
					<label for="companyName">Company name <small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
					<input type="text" class="form-control <?=(isset($request->companyName) ? 'is-invalid' : '');?>" id="companyName" name="companyName" value="<?=@$_POST['companyName']?>" placeholder="Company name">
					<small class="text-danger error">
					<?=@$request->companyName['required']?>
					</small>
				</div>
				<div class="col-lg-6 col-md-6 pb-4 ">
					<label for="companyAddress" class="text-center">Address<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
					<input type="text" class="form-control <?=(isset($request->companyAddress) ? 'is-invalid' : '');?>" id="companyAddress" placeholder="1234 Main St" name="companyAddress" value="<?=@$_POST['companyAddress']?>" placeholder="Company Address">
					<small class="text-danger error">
					<?=@$request->companyAddress['required']?>
					</small>
				</div>
			</div>
			<div class="row pb-2">
				<div class="col-lg-6 col-md-6 pb-4 form-group">
					<label for="companyIndustry">Industry<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
					<input type="text" class="form-control <?=(isset($request->companyIndustry) ? 'is-invalid' : '');?>" id="companyIndustry" name="companyIndustry" value="<?=@$_POST['companyIndustry']?>" placeholder="Company Industry">
					<small class="text-danger error">
					<?=@$request->companyIndustry['required']?>
					</small>
				</div>
				<div class="col-lg-6 col-md-6 pb-4  form-group">
					<label for="companyPhone">Phone number <small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
					<input type="text" class="form-control <?=(isset($request->companyPhone) ? 'is-invalid' : '');?>" id="companyPhone" name="companyPhone" value="<?=@$_POST['companyPhone']?>" placeholder="Company Phone number">
					<small class="text-danger error">
					<?=@$request->companyPhone['required']?>
					</small>
				</div>
				<div class="col-lg-6 col-md-6 pb-4  form-group">
					<label for="companyCountry">Country<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
					<input type="text" class="form-control <?=(isset($request->companyCountry) ? 'is-invalid' : '');?>" id="companyCountry" name="companyCountry" value="<?=@$_POST['companyCountry']?>" placeholder="Company Country">
					<small class="text-danger error">
					<?=@$request->companyCountry['required']?>
					</small>
				</div>
				<div class="col-lg-6 col-md-6 pb-4  form-group">
					<label for="companyWebsite">Website<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
					<input type="text" class="form-control <?=(isset($request->companyCountry) ? 'is-invalid' : '');?>" id="companyWebsite" name="companyWebsite" value="<?=@$_POST['companyWebsite']?>" placeholder="Company website">
					<small class="text-danger error">
					<?=@$request->companyWebsite['required']?>
					</small>
				</div>
				<div class="col-lg-6 col-md-6 pb-4  form-group">
					<label for="companyCity">City/Postal code<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
					<input type="text" class="form-control <?=(isset($request->companyCity) ? 'is-invalid' : '');?>" id="companyCity" name="companyCity" value="<?=@$_POST['companyCity']?>" placeholder="Company City/Postal code">
					<small class="text-danger error">
					<?=@$request->companyCity['required']?>
					</small>
				</div>
				<div class="col-lg-6 col-md-6 pb-4  form-group">
					<label for="companySize">Company size<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
					<input type="number" class="form-control <?=(isset($request->companySize) ? 'is-invalid' : '');?>" id="companySize" name="companySize" value="<?=@$_POST['companySize']?>" placeholder="Company Size">
					<small class="text-danger error">
					<?=@$request->companySize['required']?>
					</small>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<h3 class="text-info p-2 mt-1 rounded">
					Referent Information
					</h3>
					<hr class="bg-info">
				</div>
			</div>
			<div class="row pb-2">
				<div class="col-lg-6 col-md-6 pb-4">
					<label for="referent">Referent<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
					<input type="text" class="form-control <?=(isset($request->referent) ? 'is-invalid' : '');?>" id="referent" name="referent" value="<?=@$_POST['referent']?>" placeholder="Referent">
					<small class="text-danger error">
					<?=@$request->referent['required']?>
					</small>
				</div>
				<div class="col-lg-6 col-md-6 pb-4">
					<label for="referentPhone">Referent phone number<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
					<input type="text" class="form-control <?=(isset($request->referentPhone) ? 'is-invalid' : '');?>" id="referentPhone" name="referentPhone" value="<?=@$_POST['referentPhone']?>" placeholder="Referent Phone number">
					<small class="text-danger error">
					<?=@$request->referentPhone['required']?>
					</small>
				</div>
				<div class="col-lg-6 col-md-6 pb-4">
					<label for="referentRole">Referent role<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
					<input type="text" class="form-control <?=(isset($request->referentRole) ? 'is-invalid' : '');?>" id="referentRole" name="referentRole" value="<?=@$_POST['referentRole']?>" placeholder="Referent Role">
					<small class="text-danger error">
					<?=@$request->referentRole['required']?>
					</small>
				</div>
				<div class="col-lg-6 col-md-6 pb-4">
					<label for="referentEmail">Email<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
					<input type="email" class="form-control <?=(isset($request->referentEmail) ? 'is-invalid' : '');?>" id="referentEmail" name="referentEmail" value="<?=@$_POST['referentEmail']?>" placeholder="Referent Email">
					<small class="text-danger error">
					<?=@$request->referentEmail['required']?>
					</small>
				</div>
			</div>
			<div class="row pb-2">
				<div class="col-lg-8 col-md-8 offset-2">
					<label for="companyAbout">About Company<span class="fa fa-asterisk fa-xs text-danger pl-2"></span></label>
					<textarea name="companyAbout" rows="10" class="form-control <?=(isset($errors) && $errors->has('companyAbout')) ? 'is-invalid' : ''?>"  id="companyAbout" placeholder="Company description"><?=@$_POST['companyAbout']?></textarea>
					<small class="text-danger">
					<?php if (isset($errors) && $errors->has('companyAbout')): ?>
					<?=$errors->first('companyAbout');?>
					<?php endif?>
					</small>
				</div>
			</div>
			<div class="row pb-2 mt-3">
				<button type="submit" class="btn btn-outline-info col-2 offset-5 mb-2" id="companySaveButton">Submit</button>
			</div>
		</form>
	</div>
</div>
<?=$this->end('body');?>
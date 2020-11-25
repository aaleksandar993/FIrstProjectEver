<div class="modal fade editCompany" tabindex="-1" role="dialog" aria-labelledby="editCompany" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content rounded shadow-sm">
			<div class="modal-header">
				Edit Company
			</div>
			<div class="container-fluid pb-3 pt-3">
				<form method="post" action="/company/update/<?=@$company->id?>" id="editCompany" class="editCompany">
					<div class="row pb-2">
						<div class="col-lg-6 col-md-6 pb-4 form-group">
							<label for="companyName">Company name <small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
							<input type="text" class="form-control " id="companyName" name="companyName" value="<?=@$company->companyName?>" placeholder="Company name">
						</div>
						<div class="col-lg-6 col-md-6 pb-4 ">
							<label for="companyAddress" class="text-center">Address<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
							<input type="text" class="form-control " id="companyAddress" placeholder="1234 Main St" name="companyAddress" value="<?=@$company->companyAddress?>" placeholder="Company Address">
						</div>
					</div>
					<div class="row pb-2">
						<div class="col-lg-6 col-md-6 pb-4 form-group">
							<label for="companyIndustry">Industry<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
							<input type="text" class="form-control " id="companyIndustry" name="companyIndustry" value="<?=@$company->companyIndustry?>" placeholder="Company Industry">
						</div>
						<div class="col-lg-6 col-md-6 pb-4  form-group">
							<label for="companyPhone">Phone number <small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
							<input type="text" class="form-control " id="companyPhone" name="companyPhone" value="<?=@$company->companyPhone?>" placeholder="Company Phone number">
						</div>
						<div class="col-lg-6 col-md-6 pb-4  form-group">
							<label for="companyCountry">Country<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
							<input type="text" class="form-control " id="companyCountry" name="companyCountry" value="<?=@$company->companyCountry?>" placeholder="Company Country">
						</div>
						<div class="col-lg-6 col-md-6 pb-4  form-group">
							<label for="companyWebsite">Website<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
							<input type="text" class="form-control " id="companyWebsite" name="companyWebsite" value="<?=@$company->companyWebsite?>" placeholder="Company website">
						</div>
						<div class="col-lg-6 col-md-6 pb-4  form-group">
							<label for="companyCity">City/Postal code<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
							<input type="text" class="form-control " id="companyCity" name="companyCity" value="<?=@$company->companyCity?>" placeholder="Company City/Postal code">
						</div>
						<div class="col-lg-6 col-md-6 pb-4  form-group">
							<label for="companySize">Company size<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
							<input type="text" class="form-control " id="companySize" name="companySize" value="<?=@$company->companySize?>" placeholder="Company Size">
						</div>
					</div>
					<div class="row pb-2">
						<div class="col-lg-8 col-md-8 offset-2">
							<label for="companyAbout">About Company<span class="fa fa-asterisk fa-xs text-danger pl-2"></span></label>
							<textarea name="companyAbout" rows="10" class="form-control"  id="companyAbout" placeholder="Company description"><?=@$company->companyAbout?></textarea>
						</div>
					</div>
					<div class="pb-2 mt-3 text-center">
						<button type="submit" class="btn btn-outline-success" id="editCompanySaveButton">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
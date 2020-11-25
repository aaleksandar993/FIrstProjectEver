<div class="modal fade addReferent" tabindex="-1" role="dialog" aria-labelledby="addReferent" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content rounded shadow-sm">
			<div class="modal-header">
				Add Contact Info
			</div>
			<div class="container-fluid p-0">
				<form action="#" method="post">
					<div class="row p-2">
						<div class="col-6">
							<div class="col-lg-12 col-md-6 pb-4 form-group">
								<label for="referant">Referant <small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
								<input type="text" class="form-control <?=(isset($errors) && $errors->has('referant')) ? 'is-invalid' : ''?>"  id="referant" placeholder="Full Name" name="referant" value="<?=@$_POST['referant']?>">
								<small class="text-danger error">
								<?php if (isset($errors) && $errors->has('referant')): ?>
								<?=$errors->first('referant');?>
								<?php endif?>
								</small>
							</div>
							<div class="col-lg-12 col-md-6 pb-4 form-group">
								<label for="referantRole">Role/Title<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
								<input type="text" class="form-control <?=(isset($errors) && $errors->has('referantRole')) ? 'is-invalid' : ''?>"  id="referantRole" placeholder="Role" name="referantRole" value="<?=@$_POST['referantRole']?>">
								<small class="text-danger error">
								<?php if (isset($errors) && $errors->has('referantRole')): ?>
								<?=$errors->first('referantRole');?>
								<?php endif?>
								</small>
							</div>
						</div>
						<div class="col-6">
							<div class="col-lg-12 col-md-6 pb-4 form-group">
								<label for="referantPhone">Phone number<small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
								<input type="text" class="form-control <?=(isset($errors) && $errors->has('referantRole')) ? 'is-invalid' : ''?>"  id="referantPhone" name="referantPhone" placeholder="" value="<?=@$_POST['referantPhone']?>">
								<small class="text-danger error">
								<?php if (isset($errors) && $errors->has('referantPhone')): ?>
								<?=$errors->first('referantPhone');?>
								<?php endif?>
								</small>
							</div>
							<div class="col-lg-12 col-md-6 pb-4 form-group">
								<label for="referantEmail">Email <small><span class="fa fa-asterisk fa-xs text-danger error pl-2" aria-hidden="true"></span></small></label>
								<input type="text" class="form-control <?=(isset($errors) && $errors->has('referantRole')) ? 'is-invalid' : ''?>"  id="referantEmail" name="referantEmail" placeholder="" value="<?=@$_POST['referantEmail']?>">
								<small class="text-danger error">
								<?php if (isset($errors) && $errors->has('referantEmail')): ?>
								<?=$errors->first('referantEmail');?>
								<?php endif?>
								</small>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
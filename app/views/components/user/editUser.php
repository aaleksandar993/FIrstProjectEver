<div class="modal fade editUser" tabindex="-1" role="dialog" aria-labelledby="editUser" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content rounded shadow-sm">
			<div class="modal-header">
				Edit User
			</div>
			<div class="pb-3 pt-3">
				<div class=" mb-4">
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<div class="card rounded-lg mt-5">
								<div class="card-body">
									<form role="form" method="POST" accept-charset="utf-8" action="/user/update/<?=@$user->id ?>" onsubmit="registerUser.disabled = true; return true;">
										<div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class=" mb-1" for="inputFirstName">First Name</label>
													<input class="form-control py-4" id="firstName" type="text" name="firstName" value="<?=@$user->firstName ?>">
													<?php if (isset($request->firstName)): ?>
													<small class="text-danger">
													<?=$request->firstName['required'];?>
													</small>
													<?php else: ?>
													<?php endif?>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class=" mb-1" for="surname">Last Name</label>
													<input class="form-control py-4" id="surname" name="surname" type="text" value="<?=@$user->surname ?>">
													<?php if (isset($request->surname)): ?>
													<small class="text-danger">
													<?=$request->surname['required']?>
													</small>
													<?php else: ?>
													<?php endif?>
												</div>
											</div>
										</div>
										<div class="form-group">
											<label class=" mb-1" for="inputEmailAddress">Email</label>
											<input class="form-control py-4" id="email" name="email" type="email" aria-describedby="emailHelp" value="<?=@$user->email ?>">
											<?php if (isset($request->email)): ?>
											<small class="text-danger">
											<?=$request->email['required']?>
											</small>
											<?php else: ?>
											<?php endif?>
										</div>
										<div class="form-group">
											<label class=" mb-1" for="inputUsername">Username</label>
											<input class="form-control py-4" id="username" type="text" name="username" value="<?=@$user->username ?>">
											<?php if (isset($request->username)): ?>
											<small class="text-danger">
											<?=$request->username['required'];?>
											</small>
											<?php else: ?>
											<?php endif?>
										</div>
										<!-- <div class="form-row">
											<div class="col-md-6">
												<div class="form-group">
													<label class=" mb-1" for="inputPassword">Password</label>
													<input class="form-control py-4" id="password" name="password" type="password" placeholder="Enter password" />
													<?php if (isset($request->password)): ?>
													<small class="text-danger">
													<?=$request->password['required']?>
													</small>
													<?php else: ?>
													<?php endif?>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class=" mb-1" for="inputConfirmPassword">Confirm Password</label>
													<input class="form-control py-4" id="confirmPassword" name="confirmPassword" type="password" placeholder="Confirm password" />
												</div>
											</div>
										</div> -->
										<button type="submit" id="registerUser" class="btn btn-outline-primary">Update</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
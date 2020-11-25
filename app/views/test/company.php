<?=$this->setSiteTitle("Test page");?>
<?=$this->start('head');?>
<?=$this->end('head');?>
<?=$this->start('body');?>
<div class="container-fluid">
	<div class="row">
		<!-- left column -->
		<div class="col-md-8 bg-white h-100">
			<div class="row bg-light shadow-sm rounded py-3">
				<div class="col-md-12">
					<span><a href="#" title="" class="btn-link text-dark">Candidate</a></span>&nbsp;<a href="#" title="" class="btn-link ml-2 rounded p-1 badge-info badge rounded">ID - 1</a>
					<!-- Large modal -->
					<a class="float-right shadow-sm rounded-circle bg-white" data-toggle="modal" data-target=".candidateAssignJobModal" role="button" data-toggle="tooltip" title="Assign Job"><i class="fa fa-pencil text-success"></i></a>
					<div class="modal fade candidateAssignJobModal" tabindex="-1" role="dialog" aria-labelledby="candidateAssignJobModal" aria-hidden="true">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="modal-header">
									Assign Job To Candidate
								</div>
								<div class="container-fluid pb-3 pt-3">
									<form action="/candidate/assign" method="post" accept-charset="utf-8">
										<input type="hidden" class="form-control" value="<?=@$candidate->id?>" placeholder="Search for job">
										<input type="search" class="form-control">
									</form>
								</div>
								<div class="container-fluid">
									<div class="row">
										<div class="col-md-3 card">
											<h5>ImJob</h5>
											<h5>Web Developer</h5>
											<h5>Belgrade</h5>
										</div>
										<div class="col-md-3"></div>
										<div class="col-md-3"></div>
										<div class="col-md-3"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="container-fluid p-0">
						<div class="row pt-3 pb-3">
							<div class="col-md-2">
								<img alt="Bootstrap Image Preview" src="https://cdn4.iconfinder.com/data/icons/linecon/512/photo-512.png" class="img-thumbnail rounded-circle" />
							</div>
							<div class="col-md-10">
								<h5 class="d-inline-block h4">Aleksandar Andric</h5>
								<span class="badge badge-success p-2 rounded float-right">Candidate</span>
								<address>
									<span class="text-success">Rex Cartorama</span>
									<br /> Ustanicka 244, stan 605
									<br /> Beograd, 11200
									<br />
								</address>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row bg-light shadow-sm border-light">
				<div class="col-md-12">
					<div class="container-fluid pl-0 pr-0">
						<div class="row">
							<div class="col-md-6">
								<span style="font-size: 0.9em;" class="float-left border-secondary p-2"><i class="fa-lg fa fa-envelope m-2" ></i><strong class="text-muted">jamesonbutton@gmail.com</strong></span>
								<span style="font-size: 0.9em;" class="float-left ml-2 border-secondary p-2"><i class="fa-lg fa fa-phone m-2" ></i><strong class="text-muted">066280193</strong></span>
							</div>
							<div class="col-md-6">
								<span style="font-size: 0.9em;" class="float-right border-secondary p-2"><i class="fa-lg fa fa-refresh m-2" ></i><strong class="text-muted"><?=date('d.m.y')?></strong></span>
								<span style="font-size: 0.9em;" class="float-right border-secondary p-2"><i class="fa-lg fa fa-user-circle m-2" ></i><strong class="text-muted"><a href="#" class="text-muted">Aleksandar</a></strong></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row border">
				<div class="col-md-6 pr-0 pl-0 bg-white border-top">
					<div class="container-fluid pr-0 pl-0">
						<dl class="row pl-0 pr-0 ml-0 mr-0 p-2">
							<dt class="col-md-5 p-1 mb-1 text-truncate">Education</dt>
							<dd class="col-md-7 p-1 text-truncate mb-1">
							<span class="badge badge-success rounded" title="School Information" data-toggle="popover" data-trigger="hover" data-content="Masinska Skola Raska 2017" data-placement="top">
								Masinska Skola - Raska - 2017
							</span>
							</dd>
							<!-- Skills -->
							<dt class="col-md-5 p-1 mb-1 text-truncate">Skills</dt>
							<dd class="col-md-7 p-1 text-truncate mb-1" data-toggle="popover" data-trigger="hover" data-content="HTML,Bootstrap,Ajax,Laravel" data-placement="top">
							<span class="badge badge-info">HTML</span>
							<span class="badge badge-info">Bootstrap</span>
							<span class="badge badge-info">Ajax</span>
							<span class="badge badge-info">CSS</span>
							<span class="badge badge-info">SQL</span>
							<span class="badge badge-info">Laravel</span>
							</dd>
							<dt class="col-md-5 p-1 mb-1 text-truncate">Resume</dt>
							<dd class="col-md-7 p-1 text-truncate mb-1">
							<a href="#" class="badge badge-success shadow-sm">Show</a>
							</dd>
							<dt class="col-md-5 p-1 mb-1 text-truncate">Source</dt>
							<dd class="col-md-7 p-1 text-truncate mb-1 text-muted">Not Available</dd>
							<dt class="col-md-5 p-1 mb-1 text-truncate">Relevant Experience</dt>
							<dd class="col-md-7 p-1 text-truncate mb-1 text-muted">Not Available</dd>
							<dt class="col-md-5 p-1 mb-1 text-truncate">Full Address</dt>
							<dd class="col-md-7 p-1 text-truncate mb-1 text-muted">Not Available</dd>
							<dt class="col-md-5 p-1 mb-1 text-truncate">Available From</dt>
							<dd class="col-md-7 p-1 text-truncate mb-1 text-muted">Not Available</dd>
							<dt class="col-md-5 p-1 mb-1 text-truncate">Education Specialization</dt>
							<dd class="col-md-7 p-1 text-truncate mb-1">MBA Marketing</dd>
						</dl>
					</div>
				</div>
				<div class="col-md-6 pr-0 pl-0 bg-white border-top">
					<div class="container-fluid pr-0 pl-0">
						<dl class="row pl-0 pr-0 ml-0 mr-0 p-2">
							<dt class="col-md-5 p-1 mb-1 text-truncate">Current Salary</dt>
							<dd class="col-md-7 p-1 text-truncate mb-1">$ 3000</dd>
							<dt class="col-md-5 p-1 mb-1 text-truncate">Salary Expectations</dt>
							<dd class="col-md-7 p-1 text-truncate mb-1">$ 100000</dd>
							<dt class="col-md-5 p-1 mb-1 text-truncate">Educational Qualification</dt>
							<dd class="col-md-7 p-1 text-truncate mb-1">Bachelor's Degree</dd>
							<dt class="col-md-5 p-1 mb-1 text-truncate">Total Experience</dt>
							<dd class="col-md-7 p-1 text-truncate mb-1">3 Years</dd>
							<dt class="col-md-5 p-1 mb-1 text-truncate">Notice Period (Days)</dt>
							<dd class="col-md-7 p-1 text-truncate mb-1">60</dd>
							<dt class="col-md-5 p-1 mb-1 text-truncate">Current Employment Status</dt>
							<dd class="col-md-7 p-1 text-truncate mb-1">Employed</dd>
							<dt class="col-md-5 p-1 mb-1 text-truncate">Language Skills</dt>
							<dd class="col-md-7 p-1 text-truncate mb-1">
							<!-- Languages -->
							<span class="badge badge-info">English <span class="badge badge-warning">A1</span> </span>
							</dd>
							<dt class="col-md-5 p-1 mb-1 text-truncate">Salary Type</dt>
							<dd class="col-md-7 p-1 text-truncate mb-1 text-muted">Not Available</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pl-0 pr-0">
					<ul class="nav nav-tabs m-0 bg-light">
						<li class="nav-item mt-2 bg-outline-success rounded shadow-sm">
							<a href="#assignedopenJobs" class="nav-link text-dark active" data-toggle="tab">Assigned Open Jobs</a>
						</li>
					</ul>
					<div class="tab-content bg-white shadow-sm rounded p-2" style="height: 100vh">
						<div class="tab-pane fade show active" id="assignedopenJobs">
							<div class="container-fluid">
								<!-- Assigned Jobs For this Candidate -->
								<div class="row p-1 border-left bg-light border-info shadow-sm mb-2" style="border-width: 0.3em !important">
									<div class="col-md-4 m-1">
										<span class="float-left mr-3">
											<i class="fa fa-building fa-2x bg-light text-info shadow-sm"></i>
										</span>
										<a href="#" class="text-dark">
											<div class="float-left p-2">
												<a href="/Job/show/1" class="text-dark" style="text-decoration: none;">
													<strong>Web Developer</strong>
													<br>
													<span class="text-info">ImJob</span>
												</a>
											</div>
										</a>
									</div>
									<div class="col-md-3 m-1">
										<span class="float-left mr-3 p-1">
											<small>
											<i class="fa fa-user-circle mr-1"></i><span><a href="/User/show/1" class="text-dark" style="text-decoration: none;">Aleksandar</a></span>
											<br>
											<i class="fa fa-clock-o mr-1"></i><span><a href="#" class="text-dark"><?=date('d.m.Y - h:m:s')?></a></span>
											</small>
										</span>
									</div>
									<div class="col-md-3 m-1 align-middle">
										<a href="#"
											class="badge badge-info mt-3 rounded text-decoration shadow-sm p-1 text-white"
											data-toggle="modal"
											data-target=".candidateRecruitmentStatus"
											role="button"
											data-toggle="tooltip"
											title="Assign Job">
											Assigned
										</a>
										<div class="modal fade candidateRecruitmentStatus" tabindex="-1" role="dialog" aria-labelledby="candidateRecruitmentStatus" aria-hidden="true">
											<div class="modal-dialog modal-lg">
												<div class="modal-content">
													<div class="modal-header">
														Assign Job To Candidate
													</div>
													<div class="container-fluid pb-3 pt-3">
														<form action="/candidate/assign" method="post" accept-charset="utf-8">
															<input type="hidden" class="form-control" value="<?=@$candidate->id?>" placeholder="Search for job">
															<input type="search" class="form-control">
														</form>
													</div>
													<div class="container-fluid">
														<div class="row">
															<div class="col-md-3 card">
																<h5>ImJob</h5>
																<h5>Web Developer</h5>
																<h5>Belgrade</h5>
															</div>
															<div class="col-md-3"></div>
															<div class="col-md-3"></div>
															<div class="col-md-3"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-1 m-1 justify-content-center">
										<a href="#" class="mt-3 rounded-circle bg-danger shadow-sm text-white float-right"><i class="fa fa-times"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- right column -->
		<div class="col-md-4">
			<div class="row ml-2 bg-light rounded">
				<div class="col-md-12 shadow-sm border-bottom">
					<div class="container-fluid">
						<div class="row text-center pt-3 pb-3 ml-3">
							<a
								class="shadow-sm rounded-circle p-2 btn-success"
								id="modal-221164"
								href="#modal-container-221164"
								role="button"
								data-toggle="modal"
								title="Add Note">
								<i class="fa fa-sticky-note p-1"></i>
							</a>
							<div class="modal fade" id="modal-container-221164" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<form action="" method="get" accept-charset="utf-8">
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
														<input type="hidden" name="user_id" value="1">
														<input type="hidden" name="candidate_id" value="1">
														<textarea class="form-control" aria-label="Note" name="note"></textarea>
													</div>
												</div>
											</div>
											<div class="modal-footer">
												<button type="submit" class="btn btn-success btn-sm">
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
						</div>
					</div>
				</div>
			</div>
			<div class="row ml-2 rounded">
				<div class="col-md-12 pl-0 pr-0">
					<ul class="nav nav-tabs m-0 bg-light">
						<li class="nav-item mt-2 bg-outline-success rounded shadow-sm">
							<a href="#note" class="nav-link text-dark active" data-toggle="tab">Note</a>
						</li>
						<li class="nav-item mt-2 bg-outline-success rounded shadow-sm">
							<a href="#files" class="nav-link text-dark" data-toggle="tab">Files</a>
						</li>
					</ul>
					<div class="tab-content bg-white shadow-sm rounded p-2" style="min-height: 50vh">
						<div class="tab-pane fade show active" id="note">
							<div class="container-fluid pr-0 pl-0">
								<div class="row pl-0 pr-0">
									<?php for ($i = 1; $i <= 10; $i++): ?>
									<div class="col-md-6">
										<div class="alert alert-warning shadow-sm" role="alert">
											This is a warning alert—check it out!
										</div>
									</div>
									<div class="col-md-6">
										<div class="alert alert-danger shadow-sm" role="alert">
											This is a warning alert—check it out!
										</div>
									</div>
									<div class="col-md-6">
										<div class="alert alert-success shadow-sm" role="alert">
											This is a warning alert—check it out!
										</div>
									</div>
									<div class="col-md-6">
										<div class="alert alert-warning alert-dismissible fade show" role="alert">
											<strong>Holy guacamole!</strong> You should check in on some of those fields below.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
									</div>
									<?php endfor?>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="files">
							<div class="container-fluid pr-0 pl-0">
								<div class="row pl-0 pr-0">
									<?php for ($i = 1; $i <= 10; $i++): ?>
									<div class="col-md-12">
										<div class="alert alert-info shadow-sm shadow-sm" role="alert">
											This is a warning alert—check it out!
											This is a warning alert—check it out!
											This is a warning alert—check it out!
										</div>
									</div>
									<div class="col-md-12">
										<div class="alert alert-info shadow-sm shadow-sm" role="alert">
											This is a warning alert—check it out!
											This is a warning alert—check it out!
											This is a warning alert—check it out!
										</div>
									</div>
									<div class="col-md-12">
										<div class="alert alert-info shadow-sm shadow-sm" role="alert">
											This is a warning alert—check it out!
											This is a warning alert—check it out!
											This is a warning alert—check it out!
										</div>
									</div>
									<div class="col-md-12">
										<div class="alert alert-info shadow-sm alert-dismissible fade show" role="alert">
											<strong>Holy guacamole!</strong> You should check in on some of those fields below.
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
									</div>
									<?php endfor?>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="messages">
							<p>Messages tab content ...</p>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
				</div>
			</div>
		</div>
	</div>
</div>
<?=$this->end('body');?>
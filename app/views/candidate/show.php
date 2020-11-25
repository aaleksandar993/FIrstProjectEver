<?=$this->setSiteTitle($candidate->candidateFirstName . ' ' . $candidate->candidateLastName);?>
<?=$this->start('head');?>
<?=$this->end('head');?>
<?=$this->start('body');?>
<?php $schoolName = json_decode($candidate->schoolName, true);?>
<?php $educationQualification = json_decode($candidate->educationQualification, true);?>
<?php $educationCountry = json_decode($candidate->educationCountry, true);?>
<?php $educationCity = json_decode($candidate->educationCity, true);?>
<?php $educationYear = json_decode($candidate->educationYear, true);?>
<div class="container-fluid">
	<div class="row">
		<!-- left column -->
		<div class="col-md-8 bg-white h-100">
			<div class="row bg-light shadow-sm rounded py-3">
				<div class="col-md-12">
					<a href="/candidate/show/<?=$candidate->id?>" title="" class="badge badge-info ml-2 rounded p-1 badge-info badge rounded">ID - 1</a>
					<!-- Large modal -->
					<a class="float-right shadow-sm btn btn-sm btn-outline-warning text-info mx-1" data-toggle="modal" data-target=".editCandidate" role="button" data-toggle="tooltip" title="Edit Candidate">
						<small>Edit</small>
					</a>
					<!-- 					<a class="float-right shadow-sm btn btn-sm btn-outline-success mx-1" data-toggle="modal" data-target=".addNewCandidate" role="button" data-toggle="tooltip" title="Add New Candidate" role="button">
						<small>Add New</small>
					</a> -->
					<a class="float-right shadow-sm btn btn-sm btn-outline-info text-info mx-1" data-toggle="modal" data-target=".candidateAssignJobModal" role="button" data-toggle="tooltip" title="Assign Job">
						<small>Assign Job</small>
					</a>
					<?php include ROOT . 'app/views/components/candidate/addNewCandidateModal.php';?>
					<?php include ROOT . 'app/views/components/candidate/editCandidateModal.php';?>
					<?php include ROOT . 'app/views/components/candidate/candidateAssignJobModal.php';?>
					<?php include ROOT . 'app/views/components/candidate/displayCV.php';?>
					<?php include ROOT . 'app/views/components/candidate/updateCV.php';?>
					<?php include ROOT . 'app/views/components/candidate/updateImage.php';?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="container-fluid p-0">
						<div class="row pt-3 pb-3">
							<div class="col-sm-4 col-md-4 col-lg-4 text-center px-0 mx-0 my-0 py-0">
								<div class="mx-2 my-0 py-0">
									<?php if (!empty($candidate->image)): ?>
									<img src="<?=@DS.'public'.DS.'storage'.DS.'candidates'.DS.$candidate->id.DS.'images'.DS.$candidate->image ?>" alt="" class="img-thumbnail my-0">
									<?php else: ?>
									<img src="<?=@DS.'public'.DS.'storage'.DS.'candidates'.DS.'default'.DS.'defaultProfile.png' ?>" alt="" class="img-thumbnail my-0">
									<?php endif ?>
								</div>
							</div>
							<div class="col-sm-8 col-md-8 col-sm-8 my-2 py-2">
								<h5 class="d-inline-block h4 mx-2"><?=@ucwords($candidate->candidateFirstName . ' ' . $candidate->candidateLastName)?>&nbsp;&nbsp;
								<span class="p-1 rounded-circle shadow-sm bg-light shadow-sm">
									<i class="fa fa-<?=@strtolower($candidate->candidateGender)?>"></i>
								</span>
								</h5>
								<span class="badge badge-success p-2 rounded float-right"><?=@ucwords($candidate->role)?></span>
								<address class="my-2">
									<i class="fa fa-location-arrow fa-lg p-2 rounded-circle shadow-sm bg-light text-success"></i>
									<span class="text-dark"><?=@ucwords($candidate->candidateCity)?></span>
									<span class="text-dark"> - <?=@ucwords($candidate->candidateCountry)?></span>
								</address>
								<div class="birthday my-2 ">
									<i class="fa fa-birthday-cake p-2 rounded-circle shadow-sm bg-light text-danger"></i><span><?=@date_format(date_create($candidate->candidateBirthday), 'd. F. Y')?></span>
								</div>
								<div id="cv">
									<a class="shadow-sm btn btn-sm btn-outline-info text-info mx-1 my-2" data-toggle="modal" data-target=".displayCV" role="button" data-toggle="popover" title="Resume">
										<small>Show CV</small>
									</a>
									<a class="shadow-sm btn btn-sm btn-outline-success text-success mx-1 my-2" data-toggle="modal" data-target=".updateCV" role="button" data-toggle="popover" title="Resume">
										<small>Update CV</small>
									</a>
									<a class="shadow-sm btn btn-sm btn-outline-danger text-danger mx-1 my-2" data-toggle="modal" data-target=".updateImage" role="button" data-toggle="popover" title="Resume">
										<small>Update Image</small>
									</a>
								</div>

							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row bg-light shadow-sm border-top border-light">
				<div class="col-md-12">
					<div class="container-fluid pl-0 pr-0">
						<div class="row px-0 mx-0 my-1 py-1">
							<div class="col-md-6 pt-1 pb-1">
								<span style="font-size: 0.94em;" class="text-left border-secondary float-left mr-2">
									<i class="fa-fw fa fa-envelope text-danger mx-1"></i>
									<span class="text-dark">
										<a class="mailto" href="mailto:<?=@$candidate->candidateEmail?>"><?=@$candidate->candidateEmail?></a>
									</span>
								</span>
								<span style="font-size: 0.94em;" class="text-left border-secondary float-left mx-1">
									<i class="fa-fw fa fa-phone text-success mx-1"></i>
									<span class="text-dark">
										<?=@$candidate->candidatePhone?>
									</span>
								</span>
							</div>
							<div class="col-md-6 pt-1 pb-1">
								<span style="font-size: 0.94em;" class="text-right border-secondary float-right mx-1">
									<i class="fa-fw fa fa-refresh text-warning mx-1"></i>
									<span class="text-dark"><?=@date_format($candidate->updated_at, 'd.m.Y h:m')?>
									</span>
								</span>
								<span style="font-size: 0.94em;" class="text-right border-secondary float-right mx-1">
									<i class="fa-fw fa fa-user-circle text-primary mx-1"></i>
									<span class="text-dark">
										<a href="/user/show/<?=@$candidate->user->id?>" class="text-dark"><?=@$candidate->user->username?></a>
									</span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row border mb-1">
				<div class="col-md-12 pr-0 pl-0 bg-white border-top">
					<div class="container-fluid pr-0 pl-0">
						<dl class="row pl-0 pr-0 ml-0 mr-0 px-2 mb-0 pb-0">
							<dt class="col-sm-3 col-md-3 col-lg-3 p-1 mb-1 border-bottom border-dark-gray">
							<h5 class="d-block mt-4">Education</h5>
							</dt>
							<dd class="col-md-9 p-1 mb-1 border-bottom border-dark-gray">
							<?php for ($i = 1; $i <= sizeof($schoolName); $i++): ?>
							<div class="experience float-left border rounded mx-2 my-2 shadow-sm" style="font-size:1.3em;">
								<h6 class="m-0 alert-message-info alert-message text-info p-2">
								<strong><?=@ucwords($educationQualification[$i]) ?></strong>
								<strong>( <?=@ucwords($schoolName[$i]) ?> )</strong>
								</h6>
								<p class="m-0 p-2">
									<small class="p-1 m-1 text-center">
									<span class="">
										<i class="fa fa-graduation-cap text-info p-2 rounded-circle shadow-sm bg-light"></i>
									</span>
									<span class="ml-1"><?=@$educationYear[$i] ?></span>
									</small>
									<strong class="d-block p-1 m-1">
									<span class="">
										<i class="fa fa-location-arrow text-success p-2 rounded-circle shadow-sm bg-light"></i>
									</span>
									<small class="ml-1"><?=@ucwords($educationCity[$i]) ?></small>
									<small class="ml-1">(<?=@ucwords($educationCountry[$i])?>)</small>
									</strong>
								</p>
							</div>
							<!-- END -->
							<?php endfor;?>
							</dd>
							<dt class="col-sm-3 col-md-3 col-lg-3 mb-1 border-bottom p-1 py-1">
							<h5 class="mt-4 d-block">
							Professional Experience
							</h5>
							</dt>
							<dd class="col-sm-9 col-md-9 col-lg-9 mb-1 border-bottom p-1 py-1">
							<?php $experienceWorkFrom = json_decode($candidate->experienceWorkFrom, true)?>
							<?php $experienceWorkTill = json_decode($candidate->experienceWorkTill, true)?>
							<?php $experienceTask = json_decode($candidate->experienceTask, true)?>
							<?php $experienceTasksPerformed = json_decode($candidate->experienceTasksPerformed, true)?>
							<?php $experienceCompanyName = json_decode($candidate->experienceCompanyName, true)?>
							<?php $experienceCountry = json_decode($candidate->experienceCountry, true)?>
							<?php $experienceCity = json_decode($candidate->experienceCity, true)?>
							<div class="row">
								<?php for ($i = 1;$i <= sizeof($experienceCompanyName);$i++): ?>
								<div class="experience col-sm-4 col-md-4 col-lg-5 p-0 border rounded mx-2 my-2 shadow-sm" style="font-size:1.3em;">
									<h6 class="m-0 alert-message-info alert-message text-info p-2">
									<strong><?=@$experienceTask[$i] ?></strong>
									<strong>( <?=@$experienceCompanyName[$i] ?> )</strong>
									</h6>
									<p class="text-info m-0 p-2 text-justify shadow-sm">
										<span
											class="text-left text-dark text-break"
											data-toggle="popover"
											data-trigger="click"
											data-placement="left"
											data-content="<?=@$experienceTasksPerformed[$i] ?>"
											>
											<?=@$experienceTasksPerformed[$i] ?>
										</span>
									</p>
									<p class="m-0 bg-light p-2">
										<small class="px-1 text-center border-bottom">
										From:
										<span class="ml-1"><?=@date_format(date_create($experienceWorkFrom[$i]),'M.Y') ?></span>
										&nbsp;
										To:
										<span class="ml-1"><?=@date_format(date_create($experienceWorkTill[$i]),'M.Y') ?></span>
										</small>
										<br>
										<span class="rounded-circle shadow-sm p-1">
											<i class="fa fa-location-arrow text-success"></i>
										</span>
										<span class="ml-1"><?=@$experienceCity[$i] ?></span>
										<span class="ml-1">( <?=@$experienceCountry[$i] ?> )</span>
									</p>
								</div>
								<?php endfor ?>
							</div>
							</dd>
							<!-- Skills -->
							<dt class="col-sm-3 col-md-3 col-lg-3 p-2 mb-1 border-bottom h5">Professional Skills</dt>
							<dd class="col-sm-9 col-md-9 col-lg-9 p-2 mb-1 border-bottom">
							<?php $professionalSkills = json_decode(@$candidate->professionalSkills, true)?>
							<?php $professionalSkillsLevel = json_decode(@$candidate->professionalSkillsLevel, true)?>
							<?php for ($i = 1; $i <= @count($professionalSkills); $i++): ?>
							<span class="badge alert-message alert-message-info px-1 m-0 shadow-sm py-0" style="font-size: 1em;"><?=@ucwords($professionalSkills[$i])?> <small class="badge badge-primary p-2 m-0 ml-1"><?=@ucwords($professionalSkillsLevel[$i])?></small></span>
							<?php endfor;?>
							</dd>
							<div class="col-sm-6 col-md-6 col-lg-6 border px-0 my-1">
								<div class="col-sm-12 col-md-12 col-lg-12 px-0 bg-white">
									<div class="container-fluid px-0">
										<dl class="row pl-0 pr-0 ml-0 mr-0 p-0">
											<dt class="col-sm-12 col-md-12 col-lg-12 p-2 shadow-sm h5">Languages</dt>
											<dd class="col-sm-12 col-md-12 col-lg-12 p-1">
											<!-- Languages -->
											<?php $languages = json_decode($candidate->language, true)?>
											<?php $languagesKnowledgeLevel = json_decode($candidate->languageLevel, true)?>
											<?php for ($i = 1; $i <= count($languages); $i++): ?>
											<span
												class="badge alert-message py-0 alert-message-info px-1 m-0 shadow-sm mt-1"
												data-toggle="popover"
												data-trigger="click"
												data-content="<?=@$languages[$i]?>"
												data-placement="top"
												style="font-size: 1em;">
												<?=@ucwords($languages[$i])?>
												<small class="badge badge-primary p-2 m-0 ml-1">
												<?=@ucwords($languagesKnowledgeLevel[$i])?>
												</small>
											</span>
											<?php endfor;?>
											</dd>
										</dl>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-md-6 col-lg-6 border p-0 my-1">
								<!-- Skills -->
								<dt class="col-sm-12 col-md-12 col-lg-12 p-2 shadow-sm h6">Computer Skills</dt>
								<dd class="col-sm-12 col-md-12 col-lg-12 p-1">
								<?php $skills = json_decode($candidate->software, true)?>
								<?php $softwareKnowledgeLevel = json_decode($candidate->softwareKnowledgeLevel, true)?>
								<?php for ($i = 1; $i <= count($skills); $i++): ?>
								<span class="badge alert-message py-0 alert-message-info px-1 mb-1 shadow-sm mt-1" style="font-size: 1em;"><?=@ucwords($skills[$i])?> <small class="badge badge-primary p-2 m-0 ml-1"><?=@ucwords($softwareKnowledgeLevel[$i])?></small></span>
								<?php endfor;?>
								</dd>
							</div>
							<dt class="col-sm-3 col-md-3 col-lg-3 p-1 my-1 text-truncate border">Full Address</dt>
							<dd class="col-sm-3 col-md-3 col-lg-3 p-1 text-truncate my-1 border-bottom border-top">
							<?=@ucwords($candidate->candidateAddress) . ', ' . ucwords($candidate->candidateCity) . ', ' . ucwords($candidate->candidateCountry)?>
							</dd>
							<dt class="col-sm-3 col-md-3 col-lg-3 p-1 my-1 text-truncate border">Citizenship</dt>
							<dd class="col-sm-3 col-md-3 col-lg-3 p-1 text-truncate my-1 border-bottom border-top">
							<?php if (isset($candidate->candidateCitizenship)): ?>
							<?=@$candidate->candidateCitizenship ?>
							<?php else: ?>
							<span class="text-muted">Not Available</span>
							<?php endif ?>
							</dd>
							<dt class="col-sm-3 col-md-3 col-lg-3 p-1 my-1 text-truncate border">Driving Licence</dt>
							<dd class="col-sm-3 col-md-3 col-lg-3 p-1 text-truncate my-1 border-bottom border-top">
							<?php if (isset($candidate->candidateDrivingLicence)): ?>
							<?=@ucwords($candidate->candidateDrivingLicence) ?>
							<?php else: ?>
							<span class="text-muted">Not Available</span>
							<?php endif ?>
							</dd>
							<dt class="col-sm-3 col-md-3 col-lg-3 p-1 my-1 text-truncate border">Available From</dt>
							<dd class="col-sm-3 col-md-3 col-lg-3 p-1 text-truncate my-1 border-bottom border-top">
							<?=date_format(date_create($candidate->availableFrom), 'd.F.Y')?>
							</dd>
						</dl>
					</div>
				</div>
				<div class="col-md-6 pr-0 pl-0 bg-white">
					<div class="container-fluid pr-0 pl-0">
						<dl class="row pl-0 pr-0 ml-0 mr-0 p-2">
							<dt
							class="col-sm-12 col-md-12 col-lg-12 p-2 text-truncate border shadow-sm h6 mb-0"
							data-toggle="popover"
							data-content="Additional Information"
							data-placement="left"
							data-trigger="click"
							>
							Additional Information
							</dt>
							<dd class="col-sm-12 col-md-12 col-lg-12 p-2 border shadow-sm">
							<small class="alert m-0" style="font-size: 1em;"><?=$candidate->message ?></small>
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pl-0 pr-0 shadow-sm">
					<ul class="nav nav-tabs m-0 bg-light shadow-sm">
						<li class="nav-item mt-2 bg-outline-success rounded shadow-sm">
							<a href="#assignedopenJobs" class="nav-link text-dark active" data-toggle="tab">Assigned Open Jobs</a>
						</li>
					</ul>
					<div class="tab-content bg-white shadow-sm rounded p-2" style="min-height: 10vh">
						<div class="tab-pane fade show active" id="assignedopenJobs">
							<div class="container-fluid my-2">
								<!-- Assigned Jobs For this Candidate -->
								<?php if (count($candidate->jobs) > 0): ?>
								<?php foreach ($candidate->jobs as $job): ?>
								<div class="row py-2 border-left bg-light border-danger shadow-sm my-2 py-1" style="border-width: 0.3em !important">
									<div class="col-sm-1 col-md-1 col-lg-1 ml-3 mt-1">
										<span class="float-left m-1 p-1">
											<i class="fa fa-suitcase fa-2x text-danger shadow-sm ml-1 rounded-circle shadow-sm p-2"></i>
										</span>
									</div>
									<div class="col-sm-3 col-md-3 col-lg-3 mt-3">
										<a href="/job/show/<?=@$job->id?>" class="text-dark" style="text-decoration: none;">
											<strong><?=@ucwords($job->requiredProfession)?></strong>
											<p><?=@$job->company->companyName?></p>
										</a>
									</div>
									<div class="col-sm-3 col-md-3 col-lg-3 p-2 my-1">
										<span class="text-muted mr-2">
											<i class="fa fa-user-circle text-primary"></i>
											<span><?=@$job->user->username?></span>
										</span>
										<p>
											<i class="fa fa-refresh fa-fw text-warning"></i>
											<small><?=@date_format($job->updated_at, 'd.m.Y - h:m')?></small>
										</p>
									</div>
									
									<div class="col-sm-3 col-md-3 col-lg-3 p-2 my-1">
										<small
										class="btn btn-sm btn-outline-success float-left mr-1 py-0"
										id="<?=@$candidate->id?>"
										data-toggle="modal"
										data-id="<?=@$candidate->id ?>"
										data-target=".candidateRecruitmentStatus"
										role="button"
										data-toggle="tooltip"
										title="Assign Job"
										data-job_id="<?=@$job->id?>"
										data-candidate_id="<?=@$candidate->id ?>"
										data-status="<?=\app\models\Recruitment::where('job_id','=',$job->id)->where('candidate_id','=', $candidate->id)->first()->status ?>"><?=@\app\models\Recruitment::where('job_id','=',$job->id)->where('candidate_id','=', $candidate->id)->first()->status ?></small>
										<?php include(ROOT.'app'.DS.'views'.DS.'components'.DS.'candidate'.DS.'candidateRecruitmentStatus.php'); ?>
									</div>
									
									<div class="col-sm-1 col-md-1 col-lg-1 my-1 p-1">
										<form action="/recruitment/delete" method="post">
											<input type="hidden" name="job_id" value="<?=@$job->id?>">
											<input type="hidden" name="candidate_id" value="<?=@$candidate->id?>">
											<button type="submit" class="form-control p-0 m-1 btn-sm btn btn-outline-danger">Delete</button>
										</form>
									</div>
								</div>
								<?php endforeach?>
								<?php else: ?>
								<h4 class="text-center my-1 alert-message alert-message-danger">No jobs assigned!</h4>
								<?php endif ?>
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
						<div class="row text-center pt-3 pb-3">
							<a
								class="shadow-sm btn btn-sm btn-outline-success"
								id="modal-221164"
								href="#candidateAddNote"
								role="button"
								data-toggle="modal"
								title="Add Note">
								<small>Add Note</small>
							</a>
							<div class="modal fade" id="candidateAddNote" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
														<input type="hidden" name="user_id" value="<?=@$_SESSION['uid'] ?>">
														<input type="hidden" name="candidate_id" value="<?=@$candidate->id ?>">
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
							<a
								class="shadow-sm btn btn-sm btn-outline-info ml-2"
								id="addFileModalButton"
								href="#candidateAddFile"
								role="button"
								data-toggle="modal"
								title="Add Note">
								<small>Add File</small>
							</a>
							<div class="modal fade" id="candidateAddFile" role="dialog" aria-labelledby="candidateAddFile" aria-hidden="true">
								<form action="/file/store" method="post" accept-charset="utf-8" class="fileForm" enctype="multipart/form-data">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="candidateAddFile">
												Add File
												</h5>
											</div>
											<div class="modal-body">
												<div class="container-fluid">
													<div class="row">
														<input type="hidden" name="candidate_id" value="<?=@$candidate->id ?>">
														<input type="file" name="file" class="form-control-file">
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
									<?php foreach ($candidate->notes()->with('user')->orderBy('id', 'desc')->get() as $note): ?>
									<div class="col-sm-10 col-md-10 col-lg-10 offset-1">
										<div class="card alert-message alert-message-info shadow-sm py-1">
											<div class="card-body px-0 pt-0">
												<div class="mb-3">
													<p class="d-block py-2">
														<?=@$note->note?>
													</p>
												</div>
												<div class="d-flex justify-content-between">
													<div>
														<div class="">
															<span>
																<strong>Added on:</strong>
																<?=@date_format($note->created_at, 'd.m.y  h:m')?>
															</span>
														</div>
														<div>
															<span>
																<strong>Added by:</strong>
															</span>
															<span class="card-subtitle mb-2 text-muted my-1">
																<a href="/user/show/<?=@$note->user->id ?>"><?=@$note->user->username ?></a>
															</span>
														</div>
													</div>
													<?php if ($_SESSION['uid'] == $note->user->id): ?>
													<div class="">
														<a class="btn btn-sm btn-outline-danger" href="/note/delete/<?=@$note->id ?>">
															Delete
														</a>
													</div>
													<?php endif ?>
												</div>
											</div>
										</div>
									</div>
									<?php endforeach?>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="files">
							<div class="container-fluid pr-0 pl-0">
								<div class="row pl-0 pr-0 mx-1">
									<?php if (is_dir(ROOT.'public/storage/candidates/'.$candidate->id.'/other/')): ?>
									<?php foreach (new DirectoryIterator(ROOT.'public/storage/candidates/'.$candidate->id.'/other/') as $fileInfo): ?>
									<?php if ($fileInfo->isDot()): ?>
									<?php continue; ?>
									<?php else: ?>
									<div class="col-sm-12 col-md-12 col-lg-12">
										<div class="card alert-message alert-message-info shadow-sm">
											<div class="card-body px-0 pt-0">
												<h6 class="card-title text-truncate"><strong>Filename: </strong><?=@$fileInfo->getBasename() ?></h6>
												<span>
													<strong>File uploaded at:</strong>
												</span>
												<span class="card-subtitle mb-2 text-muted my-1"><?=date ("d.M.Y H:i", filectime('public'.DS.'storage'.DS.'candidates'.DS.$candidate->id.DS.'other'.DS.$fileInfo->getBasename())) ?></span>
												
											</div>
											<div class="row">
												<div class="float-left m-0 p-0 mx-2">
													<a class="card-link btn btn-outline-info mt-2" role="button" href="/public/storage/candidates/<?=@$candidate->id ?>/other/<?=@$fileInfo->getFileName() ?>"
														target="_blank"
														>
														<small>Open File</small>
													</a>
												</div>
												<!-- <div class="float-left m-0 p-0 mx-2">
													<form action="/file/delete/<?=@$fileInfo->getBasename() ?>" method="post">
														<input type="hidden" name="job_id" value="<?=@$job->id?>">
														<input type="hidden" name="name" value="<?=@$fileInfo->getBasename()?>">
														<input class="btn btn-outline-danger mt-2" type="submit"
														>
													</form>
												</div> -->
											</div>
										</div>
									</div>
									<?php include(ROOT.'app/views/components/candidate/candidateFiles.php'); ?>
								</div>
								<?php endif ?>
								<?php endforeach ?>
								<?php endif ?>
								<div class="col-sm-6 col-md-6 col-lg-6">
								</div>
							</div>
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
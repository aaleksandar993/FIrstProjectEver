<?=$this->setSiteTitle("Job");?>
<?=$this->start('head');?>
<?=$this->end('head');?>
<?=$this->start('body');?>
<div class="container-fluid">
	<div class="row">
		<!-- left column -->
		<div class="col-md-8 bg-white h-100">
			<div class="row shadow-sm rounded py-2">
				<div class="col-md-12">
					<a href="/candidate/show/<?=$job->id?>" title="" class="badge badge-info ml-2 rounded p-1 badge-info badge rounded">ID - <?=@$job->id?></a>
					<!-- Large modal -->
					<a
						class="shadow-sm  btn btn-sm btn-outline-info text-info float-right"
						role="button"
						data-toggle="modal"
						data-target=".editJob"
						>
						<small>Edit</small>
					</a>
					<?php include ROOT . 'app/views/components/job/editJob.php'?>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="container-fluid p-0">
						<div class="row py-2">
							<div class="col-sm-2 col-md-2 col-lg-2 text-center px-0 mx-0">
								<span>
									<i class="fa fa-suitcase fa-3x text-danger rounded-circle shadow-sm p-3"></i>
								</span>
							</div>
							<div class="col-sm-10 col-md-10 col-lg-10 my-1">
								<h5 class="d-inline-block h4 mx-2">
								<span class="mb-2 d-block"><?=ucwords($job->requiredProfession)?></span>
								</h5>
								<span class="badge badge-success p-2 mb-2"><?=@ucwords($job->corporateInsertion)?></span>
								<span class="badge badge-danger p-2 rounded float-right"><?=@ucwords($job->company->companyIndustry)?></span>
								<address class="my-2">
									<span class="text-dark mr-3">
										<i class="fa fa-building bg-light mx-2 shadow-sm text-info"></i>
										<a href="/company/show/<?=@$job->company->id?>" class="text-dark"><?=@ucwords($job->company->companyName)?></a>
									</span>
									<span class="text-dark">
										<i class="fa fa-location-arrow mx-2 shadow-sm bg-light text-success"></i>
										<?=@ucwords($job->placeOfWork)?>
									</span>
									<br />
									<br />
								</address>
								<p class="alert-message alert-message-danger m-0 p-2 float-left">
									<strong class="d-block my-2">
									<?=@$job->jobDescription ?>
									</strong>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row bg-light shadow-sm border-light">
				<div class="col-md-12">
					<div class="container-fluid px-0">
						<div class="d-flex justify-content-between">
							<?php if (!is_null($job->company->contact->first())): ?>
							<div class="col-sm-5 col-md-5 text-left p-2 flex-column">
								<span class="float-left p-2 mx-2">
									<i class="fa fa-user-circle-o fa-3x text-info"></i>
								</span>
								<div class="row pl-1 mt-2">
									<span class="p-0 ml-1 text-dark"><?=@$job->company->contact->first()->name?></span>
								</div>
								<div class="row my-1 p-0">
									<div style="font-size: 0.94em;" class="ml-1">
										<i class="fa-fw fa fa-envelope text-danger" ></i>
										<strong class="text-muted ml-1"><?=@$job->company->contact->first()->email?></strong>
									</div>
									<div style="font-size: 0.94em;" class="ml-1">
										<i class="fa-fw fa fa-phone text-success"></i>
										<strong class="text-muted ml-1"><?=@$job->company->contact->first()->phone?></strong>
									</div>
								</div>
							</div>
							<?php else: ?>
							<div class="col-sm-5 col-md-5 flex-column"></div>
							<?php endif?>
							<div class="col-sm-5 col-md-5 flex-column-reverse p-3 mt-3">
								<div style="font-size: 0.94em;" class="float-right mx-2">
									<i class="fa-fw fa fa-refresh text-warning"></i>
									<strong class="text-muted ml-1"><?=date_format($job->updated_at, 'd.m.Y h:m')?></strong>
								</div>
								<div style="font-size: 0.94em;" class="float-right">
									<i class="fa-fw fa fa-user-circle text-primary"></i>
									<strong class="text-muted ml-1">
									<a href="/user/show/<?=$job->user->id?>" class="text-muted"><?=$job->user->username?></a>
									</strong>
								</div>
							</div>
						</div>
						<div class="row">
						</div>
					</div>
				</div>
			</div>
			<div class="row border">
				<div class="col-md-6 px-0 bg-white">
					<div class="container-fluid pr-0 pl-0">
						<dl class="row pl-0 pr-0 ml-0 mr-0 px-2 mb-0 pb-0">
							<dd class="col-sm-12 col-md-12 col-lg-12 p-1 mb-1" style="font-size:1.2em;">
							<div class="experience float-left border rounded mx-2 my-2 shadow-sm">
								<p class="m-0 alert-message-success alert-message text-success p-3 shadow-sm">
									<strong><?=@ucwords($job->candidateQualification) ?></strong>
								</p>
								<dl class="row p-1">
									<dt class="col-sm-4 col-md-4 col-lg-4 text-truncate"
									data-toggle="popover"
									data-content="Education Qualification"
									data-placement="top"
									>
									<span class="">
										<small>
										<strong>
										Education Qualification
										</strong>
										</small>
									</span>
									</dt>
									<dd class="col-sm-8 col-md-8 col-lg-8 list-group">
									<small class="p-1 text-center">
									<strong><?=@ucwords($job->candidateEducation)?></strong>
									</small>
									</dd>
									<dt class="col-sm-4 col-md-4 col-lg-4 text-truncate"
									data-toggle="popover"
									data-content="Age"
									data-placement="top"
									>
									<span class="">
										<small>
										<strong>
										Age
										</strong>
										</small>
									</span>
									</dt>
									<dd class="col-sm-8 col-md-8 col-lg-8 list-group">
									<small class="p-1 text-center">
									<strong><?=@ucwords($job->candidateAge)?></strong>
									</small>
									</dd>
									<dt class="col-sm-4 col-md-4 col-lg-4 text-truncate"
									data-toggle="popover"
									data-content="Work Experience"
									data-placement="top"
									>
									<span class="">
										<small>
										<strong>
										Work Experience
										</strong>
										</small>
									</span>
									</dt>
									<dd class="col-sm-8 col-md-8 col-lg-8 list-group">
									<small class="p-1 text-center">
									<strong><?=@ucwords($job->candidateWorkExperience)?></strong>
									</small>
									</dd>
									<dt class="col-sm-4 col-md-4 col-lg-4 text-truncate"
									data-toggle="popover"
									data-content="Language"
									data-placement="top"
									>
									<span class="">
										<small>
										<strong>
										Language
										</strong>
										</small>
									</span>
									</dt>
									<dd class="col-sm-8 col-md-8 col-lg-8 list-group">
									<small class="p-1 text-center">
									<strong><?=@ucwords($job->language)?></strong>
									</small>
									</dd>
									<dt class="col-sm-4 col-md-4 col-lg-4 text-truncate"
									data-toggle="popover"
									data-content="Other Language"
									data-placement="top"
									>
									<span class="">
										<small>
										<strong>
										Other Language
										</strong>
										</small>
									</span>
									</dt>
									<dd class="col-sm-8 col-md-8 col-lg-8 list-group">
									<small class="p-1 text-center">
									<strong>
									<?php if (!empty($job->candidateOtherLanguage)): ?>
									<?=@ucwords($job->candidateOtherLanguage)?>
									<?php endif ?>
									</strong>
									</small>
									</dd>
									<dt class="col-sm-4 col-md-4 col-lg-4 text-truncate"
									data-toggle="popover"
									data-content="Skills"
									data-placement="top"
									>
									<span class="">
										<small>
										<strong>
										Skills
										</strong>
										</small>
									</span>
									</dt>
									<dd class="col-sm-8 col-md-8 col-lg-8 list-group">
									<small class="p-1 text-center">
									<strong>
									<?php if (!empty($job->candidateComputerSkills)): ?>
									<?=@ucwords($job->candidateComputerSkills)?>
									<?php endif ?>
									</strong>
									</small>
									</dd>
									<dt class="col-sm-4 col-md-4 col-lg-4 text-truncate"
									data-toggle="popover"
									data-content="Driving Licence"
									data-placement="top"
									>
									<span class="">
										<small>
										<strong>
										Driving Licence
										</strong>
										</small>
									</span>
									</dt>
									<dd class="col-sm-8 col-md-8 col-lg-8 list-group">
									<small class="p-1 text-center">
									<strong>
									<?php if (!empty($job->candidateDrivingLicence)): ?>
									<?=@ucwords($job->candidateDrivingLicence)?>
									<?php endif ?>
									</strong>
									</small>
									</dd>
									<dt class="col-sm-4 col-md-4 col-lg-4 text-truncate"
									data-toggle="popover"
									data-content="Means of Transport"
									data-placement="top"
									>
									<span class="">
										<small>
										<strong>
										Means of Transport
										</strong>
										</small>
									</span>
									</dt>
									<dd class="col-sm-8 col-md-8 col-lg-8 list-group">
									<small class="p-1 text-center">
									<strong>
									<?php if (!empty($job->candidateMeansOfTransport)): ?>
									<?=@ucwords($job->candidateMeansOfTransport)?>
									<?php endif ?>
									</strong>
									</small>
									</dd>
									<dt class="col-sm-4 col-md-4 col-lg-4 text-truncate"
									data-toggle="popover"
									data-content="Available Immediate"
									data-placement="top"
									>
									<span class="">
										<small>
										<strong>
										Available Immediate
										</strong>
										</small>
									</span>
									</dt>
									<dd class="col-sm-8 col-md-8 col-lg-8 list-group">
									<small class="p-1 text-center">
									<strong>
									<?php if (!empty($job->availableNow)): ?>
									<?=@ucwords($job->availableNow)?>
									<?php else: ?>
									<span class="text-muted">Not Specified</span>
									<?php endif ?>
									</strong>
									</small>
									</dd>
									<dt class="col-sm-4 col-md-4 col-lg-4 text-truncate"
									data-toggle="popover"
									data-content="Availability Date"
									data-placement="top"
									>
									<span class="">
										<small>
										<strong>
										Availability Date
										</strong>
										</small>
									</span>
									</dt>
									<dd class="col-sm-8 col-md-8 col-lg-8 list-group">
									<small class="p-1 text-center">
									<strong>
									<?php if (!empty($job->availabilityDate)): ?>
									<?=@ucwords($job->availabilityDate)?>
									<?php else: ?>
									<span class="text-muted">Not Specified</span>
									<?php endif ?>
									</strong>
									</small>
									</dd>
								</dl>
							</div>
							<!-- END -->
							</dd>
							<dd class="col-sm-12 col-md-12 col-lg-12 p-1 mb-1" style="font-size:1.2em;">
							<div class="contract float-left border rounded mx-2 my-2 shadow-sm"  >
								<?php if (@ucwords($job->accomodationsPays) === 'Employee'): ?>
								<p class="m-0 alert-message-danger alert-message text-danger p-2">
									<strong>Accomodation: <?=@ucwords($job->accomodations)?></strong>
								</p>
								<?php else: ?>
								<p class="m-0 alert-message-success alert-message text-success p-2">
									<strong>Accomodation: <?=@ucwords($job->accomodations)?></strong>
								</p>
								<?php endif ?>
								<p class="m-0 p-2">
									<small class="px-1 text-center">
									<span class="">
										<strong>Paid By : </strong>
									</span>
									<span><?=@ucwords($job->accomodationsPays)?></span>
									</small>
									<span class="d-block ml-1">
										<small class="">
										<strong>Price : </strong>
										</small>
										<small class="ml-1"><?=@ucwords($job->accomodationsCosts)?></small>
									</span>
								</p>
							</div>
							<!-- END -->
							</dd>
						</dl>
					</div>
				</div>
				<div class="col-md-6 px-0 bg-white">
					<div class="container-fluid pr-0 pl-0">
						<dl class="row pl-0 pr-0 ml-0 mr-0 px-2 mb-0 pb-0">
							<dt class="col-sm-1 col-md-1 col-lg-1 p-1 mb-1">
							</dt>
							<dd class="col-md-11 p-1 mb-1">
							<div class="experience float-left border rounded mx-2 my-2 shadow-sm" style="font-size:1.2em;">
								<p class="m-0 alert-message-warning alert-message text-warning p-2">
									<strong>Contract Information</strong>
								</p>
								<p class="m-0 p-2">
									<small class="d-block px-1">
									<span class="">
										<strong class="">Contract : </strong>
									</span>
									<span><?=@ucwords($job->contractDetails)?></span>
									</small>
									<span class="d-block ml-1">
										<small class="">
										<strong>Salary : </strong>
										</small>
										<?php if (!empty(@$job->salary)): ?>
										<small class="ml-1"><?=@ucwords($job->salary)?></small>
										<?php else: ?>
										<small class="ml-1 text-muted">Not specified</small>
										<?php endif ?>
									</span>
									<span class="d-block ml-1">
										<small class="">
										<strong>Shifts : </strong>
										</small>
										<?php if (!empty(@$job->shifts)): ?>
										<small class="ml-1"><?=@ucwords($job->shifts)?></small>
										<?php else: ?>
										<small class="ml-1 text-muted">Not specified</small>
										<?php endif ?>
									</span>
									<span class="d-block ml-1">
										<small class="">
										<strong>Working Hours : </strong>
										</small>
										<?php if (!empty(@$job->workingHours)): ?>
										<small class="ml-1"><?=@ucwords($job->workingHours)?></small>
										<?php else: ?>
										<small class="ml-1 text-muted">Not specified</small>
										<?php endif ?>
									</span>
									<?php if (!empty(@$job->fixedTerm)): ?>
									<span class="d-block p-1 m-0">
										<small class="">
										<strong>Fixed-Term : </strong>
										</small>
										<small class="ml-1"><?=@ucwords($job->fixedTerm)?></small>
									</span>
									<?php endif ?>
									<?php if (!empty(@$job->partTime)): ?>
									<span class="d-block p-1 m-0">
										<small class="">
										<strong>Part-Time : </strong>
										</small>
										<small class="ml-1"><?=@ucwords($job->partTime)?></small>
									</span>
									<?php endif ?>
								</p>
							</div>
							<!-- END -->
							</dd>
							<dd class="col-sm-12 col-md-12 col-lg-12 p-1 mb-1">
							<div class="experience float-left border rounded mx-2 my-2 shadow-sm" style="font-size:1.2em;">
								<p class="m-0 alert-message-info alert-message text-info p-2">
									<strong>Additional Job Information</strong>
								</p>
								<p class="m-0 p-2">
									<small class="d-block px-1">
									<span class="">
										<strong>Openings : </strong>
									</span>
									<span class="badge badge-light"><?=@ucwords($job->openings)?></span>
									</small>
									<?php if (!empty(@$job->additionalJobInformation)): ?>
									<span class="d-block p-1 m-0 alert alert-info my-1">
										<small class="">
										<strong>Additional Information : </strong>
										</small>
										<small class="ml-1"><?=@ucwords($job->additionalJobInformation)?></small>
									</span>
									<?php endif ?>
								</p>
							</div>
							<!-- END -->
							</dd>
						</dl>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12 p-xl-0 bg-white shadow-sm">
					<p class="text-center alert-message alert-message-info" style="font-size: 1.1em"><?=@$job->descriptionOfStaffRequest ?></p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 pl-0 pr-0">
					<ul class="nav nav-tabs m-0 bg-light">
						<li class="nav-item mt-2 bg-outline-success rounded shadow-sm">
							<a href="#assignedopenJobs" class="nav-link text-dark active" data-toggle="tab">Assigned Candidates</a>
						</li>
					</ul>
					<div class="tab-content bg-white shadow-sm rounded p-2">
						<div class="tab-pane fade show active" id="assignedopenJobs">
							<div class="container-fluid">
								<div class="row justify-content-end">
									<a
										class="shadow-sm  btn btn-sm btn-outline-success float-right"
										id="modal-221164"
										href="#addCandidateToJob"
										role="button"
										data-toggle="modal"
										title="Add Note"><small>Add Candidate</small>
									</a>
									<?php @include ROOT . 'app/views/components/job/addCandidateToJob.php'?>
								</div>
								<!-- Assigned Candidates For this Job -->
								<div class="row">
									<?php foreach ($job->candidates as $candidate): ?>
									<div class="col-sm-3 col-md-3 col-lg-3 p-0 my-1 pr-1">
										<div class="card p-0 my-1">
											<div class="card-body p-0">
												<h6 class="card-title p-1">
												<?php if (is_file(ROOT.'public'.DS.'storage'.DS.'candidates'.DS.$candidate->id.DS.'images'.DS.$candidate->image)): ?>
												<img src="<?=DS.'public'.DS.'storage'.DS.'candidates'.DS.$candidate->id.DS.'images'.DS.$candidate->image ?>" alt="" class="img-thumbnail" style="max-width: 5rem;max-height: 5rem;">
												<?php else: ?>
												<img src="<?=DS.'public'.DS.'storage'.DS.'candidates'.DS.'default.jpg' ?>" alt="" class="img-thumbnail" style="max-width: 5rem;max-height: 5rem;">
												<?php endif ?>
												<?=@$candidate->candidateFirstName .' '. $candidate->candidateLastName ?>
												</h6>
												<span class="px-2">
													Citizenship: &nbsp;<?=@ucwords($candidate->candidateCitizenship)?>
												</span>
												<br>
												<span class="px-2">
													Birthday: <?=@date_format(date_create($candidate->candidateBirthday), 'd.m.Y') ?>
												</span>
												<br>
												<span class="px-2">
													Gender: &nbsp;<i class="fa fa-<?=@strtolower($candidate->candidateGender)?>"></i>
												</span>
												<br>
												<small
												class="btn btn-sm btn-outline-success float-right m-1 py-0"
												data-toggle="modal"
												data-target=".candidateRecruitmentStatus"
												role="button"
												data-job_id="<?=@$job->id?>"
												data-candidate_id="<?=@$candidate->id ?>"
												data-status="<?=\app\models\Recruitment::where('job_id','=',$job->id)->where('candidate_id','=', $candidate->id)->first()->status ?>"
												>
												<small id="<?=@$candidate->id?>"><?=\app\models\Recruitment::where('job_id','=',$job->id)->where('candidate_id','=', $candidate->id)->first()->status ?></small>
												</small>
												<?php include(ROOT.'app'.DS.'views'.DS.'components'.DS.'candidate'.DS.'candidateRecruitmentStatus.php'); ?>
											</div>
										</div>
									</div>
									<?php endforeach ?>
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
					<div class="container-fluid pl-0">
						<div class="row text-center pt-3 pb-3 ml-1">
							<a
								class="shadow-sm  btn btn-sm btn-outline-success"
								id="modal-221164"
								href="#addNote"
								role="button"
								data-toggle="modal"
								title="Add"><small>Add Note</small>
							</a>
							<a
								class="shadow-sm  btn btn-sm btn-outline-info mx-2"
								href="#jobAddFile"
								role="button"
								data-toggle="modal"
								title="Add"><small>Add File</small>
							</a>
							<?php @include ROOT . 'app/views/components/job/addNote.php'?>
							<?php @include ROOT . 'app/views/components/job/addFile.php'?>
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
								<div class="row pl-0 pr-0" id="notesRow">
									<?php include ROOT . 'app/views/components/notes/notes.php'?>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="files">
							<div class="container-fluid pr-0 pl-0">
								<div class="row pl-0 pr-0">
									<?php if (is_dir(ROOT.'public/storage/jobs/'.$job->id.'/other/')): ?>
									<?php foreach (new DirectoryIterator(ROOT.'public/storage/jobs/'.$job->id.'/other/') as $fileInfo): ?>
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
												<span class="card-subtitle mb-2 text-muted my-1"><?=date ("d.M.Y H:i", filectime('public'.DS.'storage'.DS.'jobs'.DS.$job->id.DS.'other'.DS.$fileInfo->getBasename())) ?></span>
												
											</div>
											<div class="row">
												<div class="float-left m-0 p-0 mx-2">
													<a class="card-link btn btn-outline-info mt-2" role="button" href="/public/storage/jobs/<?=@$job->id ?>/other/<?=@$fileInfo->getFileName() ?>"
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
									<?php endif ?>
									<?php endforeach ?>
									<?php endif ?>
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
<?php include ROOT . 'app/views/components/job/candidateNote.php'?>
<?php include ROOT . 'app/views/components/job/jobDescription.php'?>
<?php include ROOT . 'app/views/components/job/descriptionOfTheStaffRequestModal.php'?>
<?=$this->end('body');?>
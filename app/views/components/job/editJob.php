<div class="modal fade editJob" tabindex="-1" role="dialog" aria-labelledby="editJob" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				Edit Job
			</div>
			<div class="container-fluid pb-3 pt-3">
				<form action="/Job/update/<?=@$job->id ?>" method="post" accept-charset="utf-8">
					<div class="card">
						<div class="card-header text-info">
							<h5>Add Job</h5>
						</div>
						<div class="card-body">
							<h3 class="alert p-2 text-info">Job Information</h3>
							<div class="form-row mt-2">
								<div class="form-group col-md-4 pb-4">
									<label for="requiredProfession">Required profession <span class="fa fa-star text-danger pl-2"></span></label>
									<input type="text" class="form-control <?=(isset($errors) && $errors->has('Profession')) ? 'is-invalid' : ''?>"  id="Qualifications" placeholder="Qualifications" name="requiredProfession" value="<?=@$job->requiredProfession?>">
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('requiredProfession')): ?>
									<?=$errors->first('requiredProfession');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-md-4 pb-4">
									<label for="companyName">Number of subjects to hire <span class="fa fa-star text-danger pl-2"></span></label>
									<input type="number" class="form-control <?=(isset($errors) && $errors->has('openings')) ? 'is-invalid' : ''?>"  id="numberOfUsers" placeholder="1,2,3,4,5,6..." name="openings" value="<?=@$job->openings?>">
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('openings')): ?>
									<?=$errors->first('openings');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-md-4 pb-4">
									<label for="placeOfWork">Place of work <span class="fa fa-star text-danger pl-2"></span></label>
									<input type="text" class="form-control <?=(isset($errors) && $errors->has('placeOfWork')) ? 'is-invalid' : ''?>"  id="placeOfWork" placeholder="Place of work" name="placeOfWork" value="<?=@$job->placeOfWork?>">
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('placeOfWork')): ?>
									<?=$errors->first('placeOfWork');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-md-4 pb-4">
									<label for="salary">Salary<span class="fa fa-star text-danger pl-2"></span></label>
									<input type="text" class="form-control <?=(isset($errors) && $errors->has('salary')) ? 'is-invalid' : ''?>"  id="salary" placeholder="Monthly wage" name="salary" value="<?=@$job->salary?>">
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('salary')): ?>
									<?=$errors->first('salary');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-md-4 pb-4">
									<label for="workingHours">Working hours<span class="fa fa-star text-danger pl-2"></span></label>
									<input type="text" class="form-control <?=(isset($errors) && $errors->has('workingHours')) ? 'is-invalid' : ''?>"  id="workingHours" placeholder="Working hours" name="workingHours" value="<?=@$job->workingHours?>">
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('workingHours')): ?>
									<?=$errors->first('workingHours');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-md-4 pb-4">
									<label for="avaliableNow">Available immediate <span class="fa fa-star text-danger pl-2"></span></label>
									<div class="form-check">
										<select class="custom-select <?=(isset($errors) && $errors->has('avaliableNow')) ? 'is-invalid' : ''?>"  id="avaliableNow" name="avaliableNow">
											<option value="Yes" <?php if ($job->avaliableNow == 'Yes') {
												echo "selected";
											} ?>>Yes</option>
											<option value="No" <?php if ($job->avaliableNow == 'No') {
												echo "selected";
											} ?>>No</option>
										</select>
									</div>
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('avaliableNow')): ?>
									<?=$errors->first('avaliableNow');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-md-8 pb-4">
									<label for="jobDescription">Main tasks <span class="fa fa-asterisk fa-xs text-danger pl-2"></span></label>
									<textarea name="jobDescription" rows="10" class="form-control <?=(isset($errors) && $errors->has('jobDescription')) ? 'is-invalid' : ''?>"  id="jobTasks" placeholder="Main tasks and activities"><?=@$job->jobDescription?></textarea>
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('jobDescription')): ?>
									<?=$errors->first('jobDescription');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-lg-4 col-md-6 pb-4">
									<label for="availabilityDate">If "No" , please specify date</label>
									<div class="">
										<input class="form-control" type="date" id="availabilityDate" name="availabilityDate" value="<?=@$job->availabilityDate ?>">
									</div>
								</div>
								<div class="form-group col-lg-3 pb-4">
									<label for="Shifts">Shifts</label>
									<input type="text" class="form-control <?=(isset($errors) && $errors->has('shifts')) ? 'is-invalid' : ''?>"  id="Shifts" placeholder="Shifts" name="shifts" value="<?=@$job->shifts?>">
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('shifts')): ?>
									<?=$errors->first('shifts');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-lg-3 pb-4">
									<label class="mr-sm-2" for="accomodations">Accomodations</label>
									<select class="custom-select mb-2 mr-sm-2 mb-sm-0 <?=(isset($errors) && $errors->has('accomodations')) ? 'is-invalid' : ''?>"  id="accomodations" name="accomodations">
										<option value="yes" <?php if ($job->accomodations == 'yes') {
											echo "selected";
										} ?>>Yes</option>
										<option value="no" <?php if ($job->accomodations == 'no') {
											echo "selected";
										} ?>>No</option>
									</select>
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('accomodations')): ?>
									<?=$errors->first('accomodations');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-lg-3 pb-4">
									<label class="mr-sm-2" for="previousAnswer">If "Yes", please specify by who</label>
									<select class="custom-select mb-2 mr-sm-2 mb-sm-0 <?=(isset($errors) && $errors->has('accomodationsPays')) ? 'is-invalid' : ''?>"  id="previousAnswer" name="accomodationsPays">
										<option value="Employer" <?php if ($job->accomodationsPays == 'Employer'): ?>
											selected
										<?php endif ?>>Employer</option>
										<option value="Employee" <?php if ($job->accomodationsPays == 'Employee'): ?>
											selected
										<?php endif ?>>Employee</option>
									</select>
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('accomodationsPays')): ?>
									<?=$errors->first('accomodationsPays');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-lg-3 pb-4">
									<label class="mr-sm-2" for="accomodationsCosts">If "Employee" pays specify costs</label>
									<input type="text" name="accomodationsCosts" class="form-control <?=(isset($errors) && $errors->has('accomodationsCosts')) ? 'is-invalid' : ''?>"  name="accomodationsCosts" value='<?=@$job->accomodationsCosts ?>'>
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('accomodationsCosts')): ?>
									<?=$errors->first('accomodationsCosts');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-lg-3 pb-4">
									<label for="corporateInsertion">Industry<span class="fa fa-star text-danger pl-2"></span></label>
									<input list="corporateInsertion" name="corporateInsertion" class="form-control" value="<?=@$job->corporateInsertion ?>">
									
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('corporateInsertion')): ?>
									<?=$errors->first('corporateInsertion');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-lg-3 pb-4">
									<label for="contractDetails">
										Contract
										<span class="fa fa-star text-danger pl-2"></span>
									</label>
									<select id="contractDetails" class="form-control <?=(isset($errors) && $errors->has('contractDetails')) ? 'is-invalid' : ''?>"  name="contractDetails" >
										<option selected>Choose</option>store
										<option value="Open-ended contract" <?php if ($job->contractDetails == 'Open-ended contract'): ?>
											selected
										<?php endif ?>>Open-ended contract</option>
										<option value="Fixed-term contract" <?php if ($job->contractDetails == 'Fixed-term contract'): ?>
											selected
										<?php endif ?>>Fixed-term contract</option>
										<option value="Temporary job" <?php if ($job->contractDetails == 'Temporary job'): ?>
											selected
										<?php endif ?>>Temporary job</option>
										<option value="Apprenticeship" <?php if ($job->contractDetails == 'Apprenticeship'): ?>
											selected
										<?php endif ?>>Apprenticeship</option>
										<option value="Project collaboration" <?php if ($job->contractDetails == 'Project collaboration'): ?>
											selected
										<?php endif ?>>Project collaboration</option>
										<option value="Part-time" <?php if ($job->contractDetails == 'Part-time'): ?>
											selected
										<?php endif ?>>Part-time</option>
										<option value="Freelance" <?php if ($job->contractDetails == 'Freelance'): ?>
											selected
										<?php endif ?>>Freelance</option>
										<option value="Remote" <?php if ($job->contractDetails == 'Remote'): ?>
											selected
										<?php endif ?>>Remote</option>
										<option value="Intership" <?php if ($job->contractDetails == 'Intership'): ?>
											selected
										<?php endif ?>>Intership</option>
									</select>
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('contractDetails')): ?>
									<?=$errors->first('contractDetails');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-lg-3 pb-4">
									<label class="mr-sm-2" for="fixedTerm">
										<small>If "Fixed-term" , specify the duration</small>
									</label>
									<input type="text" name="fixedTerm" class="form-control" value="<?=@$job->fixedTerm ?>">
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('fixedTerm')): ?>
									<?=$errors->first('fixedTerm');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-lg-3 pb-4">
									<label class="mr-sm-2" for="partTime">
										<small>If "Part-time" , specify type and working hours</small>
									</label>
									<input type="text" name="partTime" class="form-control" value="<?=@$job->partTime ?>">
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('partTime')): ?>
									<?=$errors->first('partTime');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-lg-6 offset-3">
									<label for="tasks">Additional Information <span class="fa fa-asterisk fa-xs text-danger pl-2"></span></label>
									<textarea name="additionalJobInformation" rows="10" class="form-control <?=(isset($errors) && $errors->has('additionalJobInformation')) ? 'is-invalid' : ''?>"  id="additionalJobInformation" placeholder="Additional Information"><?=@$job->additionalJobInformation?></textarea>
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('additionalJobInformation')): ?>
									<?=$errors->first('additionalJobInformation');?>
									<?php endif?>
									</small>
								</div>
								<div class="col-lg-12">
									<h3 class="alert text-info pb-3"> Candidate profile</h3>
								</div>
								<div class="form-group col-lg-4 pb-4">
									<label for="candidateQualification">Qualification</label>
									<input type="text" class="form-control <?=(isset($errors) && $errors->has('candidateQualification')) ? 'is-invalid' : ''?>"  id="candidateQualification" name="candidateQualification" value="<?=@$job->candidateQualification?>">
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('candidateQualification')): ?>
									<?=$errors->first('candidateQualification');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-lg-4 pb-4">
									<label for="candidateAge">Age</label>
									<input type="text" class="form-control <?=(isset($errors) && $errors->has('candidateAge')) ? 'is-invalid' : ''?>"  id="candidateAge" name="candidateAge" value="<?=@$job->candidateAge?>">
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('candidateAge')): ?>
									<?=$errors->first('candidateAge');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-lg-4 pb-4">
									<label for="CandidateEducation">Education</label>
									<input type="text" class="form-control <?=(isset($errors) && $errors->has('candidateEducation')) ? 'is-invalid' : ''?>"  id="candidateEducation" name="candidateEducation" value="<?=@$job->candidateEducation?>">
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('candidateEducation')): ?>
									<?=$errors->first('candidateEducation');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-lg-4 pb-4">
									<label for="candidateWorkExperience">Work Experience</label>
									<input type="text" class="form-control <?=(isset($errors) && $errors->has('candidateWorkExperience')) ? 'is-invalid' : ''?>"  id="candidateWorkExperience" name="candidateWorkExperience" value="<?=@$job->candidateWorkExperience?>">
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('candidateWorkExperience')): ?>
									<?=$errors->first('candidateWorkExperience');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-lg-4 pb-4">
									<label for="candidateForeignLanguage">Foreign languages</label>
									<input type="text" class="form-control <?=(isset($errors) && $errors->has('language')) ? 'is-invalid' : ''?>"  id="candidateForeignLanguage" name="language" value="<?=@$job->language?>">
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('language')): ?>
									<?=$errors->first('language');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-lg-4 pb-4">
									<label for="candidateOtherLanguage">Other language</label>
									<input type="text" class="form-control <?=(isset($errors) && $errors->has('candidateOtherLanguage')) ? 'is-invalid' : ''?>"  id="candidateOtherLanguage" name="candidateOtherLanguage" value="<?=@$job->candidateOtherLanguage?>">
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('candidateOtherLanguage')): ?>
									<?=$errors->first('candidateOtherLanguage');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-lg-4 pb-4">
									<label for="candidateComputerSkills">Computer Skills</label>
									<input type="text" class="form-control <?=(isset($errors) && $errors->has('candidateComputerSkills')) ? 'is-invalid' : ''?>"  id="candidateComputerSkills" name="candidateComputerSkills" value="<?=@$job->candidateComputerSkills?>">
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('candidateComputerSkills')): ?>
									<?=$errors->first('candidateComputerSkills');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-lg-4 pb-4">
									<label for="candidateDrivingLicence">Driving licence</label>
									<input type="text" class="form-control <?=(isset($errors) && $errors->has('candidateDrivingLicence')) ? 'is-invalid' : ''?>"  id="candidateDrivingLicence" name="candidateDrivingLicence" value="<?=@$job->candidateDrivingLicence?>">
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('candidateDrivingLicence')): ?>
									<?=$errors->first('candidateDrivingLicence');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-lg-4 pb-4">
									<label for="candidateMeansOfTransport">Means of transport</label>
									<input type="text" class="form-control <?=(isset($errors) && $errors->has('candidateMeansOfTransport')) ? 'is-invalid' : ''?>"  id="candidateMeansOfTransport" name="candidateMeansOfTransport" value="<?=@$job->candidateMeansOfTransport?>">
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('candidateMeansOfTransport')): ?>
									<?=$errors->first('candidateMeansOfTransport');?>
									<?php endif?>
									</small>
								</div>
								<div class="form-group col-lg-8 offset-2 pb-4">
									<label for="descriptionOfStaffRequest">Description of The Staff Request
										<span class="fa fa-asterisk fa-xs text-danger pl-2"></span>
									</label>
									<textarea name="descriptionOfStaffRequest" rows="10" class="form-control <?=(isset($errors) && $errors->has('descriptionOfStaffRequest')) ? 'is-invalid' : ''?>"  id="descriptionOfStaffRequest" placeholder="Description of the staff request"><?=@$job->descriptionOfStaffRequest?></textarea>
									<small class="text-danger">
									<?php if (isset($errors) && $errors->has('descriptionOfStaffRequest')): ?>
									<?=$errors->first('descriptionOfStaffRequest');?>
									<?php endif?>
									</small>
								</div>
							</div>
							<button type="submit" class="btn btn-outline-info col-2 offset-5 mb-2" id="jobSaveButton">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
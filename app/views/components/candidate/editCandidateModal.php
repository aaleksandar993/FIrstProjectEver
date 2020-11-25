<div class="modal fade editCandidate" tabindex="-1" role="dialog" aria-labelledby="editCandidate" aria-hidden="true">
	<div class="modal-dialog modal-xl modal-dialog-centered">
		<div class="modal-content rounded shadow-sm">
			<div class="modal-header">
				Edit Candidate
			</div>
			<div class="container-fluid pb-3 pt-3">
				<div class="card">
					<div class="card-body pt-1">
						<form method="POST" enctype="multipart/form-data" action="/candidate/update/<?=@$candidate->id ?>" id="candidateUpdateForm" class="candidateUpdateForm needs-validation">
							<div class="row pb-2">
								<div class="col-12">
									<h3 class="form-heading form-text text-info p-2 rounded border-info">Personal data</h3>
									<hr class="bg-info">
								</div>
								<div class="col-12 col-md-4 pb-4 form-group">
									<label for="candidateFirstName">First Name</label>
									<input  type="text" value="<?=@$candidate->candidateFirstName?>" class="form-control " name="candidateFirstName" id="candidateFirstName" >
								</div>
								<div class="col-12 col-md-4 pb-4 form-group">
									<label for="candidateAddress">Address</label>
									<input  type="text" value="<?=@$candidate->candidateAddress?>" class="form-control " name="candidateAddress" id="candidateAddress" >
								</div>
								<div class="col-12 col-md-4 pb-4 form-group">
									<label for="candidatePhone">Phone number</label>
									<input  type="tel" value="<?=@$candidate->candidatePhone?>" class="form-control " name="candidatePhone" id="candidatePhone" >
								</div>
								<div class="col-12 col-md-4 pb-4 form-group">
									<label for="candidateSurname">Last name</label>
									<input  type="text" value="<?=@$candidate->candidateLastName?>" class="form-control " name="candidateLastName" id="candidateSurname" >
								</div>
								<div class="col-12 col-md-4 pb-4 form-group">
									<label for="candidateCity">City/Postal code</label>
									<input  type="text" value="<?=@$candidate->candidateCity?>" class="form-control" name="candidateCity" id="candidateCity">
								</div>
								<div class="col-12 col-md-4 pb-4 form-group">
									<label for="candidateEmail">Email</label>
									<input  type="text" class="form-control" value="<?=@$candidate->candidateEmail?>" name="candidateEmail" id="candidateEmail" >
								</div>
								<div class="col-12 col-md-4 pb-4 form-group">
									<label for="candidateGender">Gender</label>
									<select  class="form-control" name="candidateGender" >
										<option value="<?=@$candidate->candidateGender ?>"><?=@ucwords($candidate->candidateGender) ?></option>
										<?php if (strtolower($candidate->candidateGender) == 'male'): ?>
										<option value="female">Female</option>
										<?php endif ?>
									</select>
								</div>
								<div class="col-12 col-md-4 pb-4 form-group">
									<label for="candidateCountry">Country</label>
									<input  type="text" class="form-control" value="<?=@$candidate->candidateCountry?>" name="candidateCountry" id="candidateCountry" >
								</div>
								<div class="col-12 col-md-4 pb-4 form-group">
									<label>Upload your photo</label>
									<div class="custom-file">
										<input  type="file" class="form-control custom-file-input" name="candidatePhoto" id="photo">
										<label class="custom-file-label">Choose photo</label>
									</div>
								</div>
								<div class="col-12 col-md-4 pb-4 form-group">
									<label for="candidateBirthday">Date of birth</label>
									<input  type="date" value="<?=@$candidate->candidateBirthday?>" class="form-control selector" name="candidateBirthday" id="candidateBirthday" >
								</div>
								<div class="col-12 col-md-4 pb-4 form-group">
									<label for="candidateCitizenship">Citizenship</label>
									<input  type="text" value="<?=@$candidate->candidateCitizenship?>" class="form-control " name="candidateCitizenship" id="candidateCitizenship" >
								</div>
								<div class="col-12 col-md-4 pb-4 form-group">
									<label>Upload your CV</label>
									<div class="custom-file">
										<input  type="file" class="form-control custom-file-input" name="candidateCV" id="candidateCV">
										<label class="custom-file-label">Choose CV</label>
									</div>
								</div>
								<div class="col-12">
									<h3 class="form-heading form-text text-info p-2 rounded">Education</h3>
									<hr class="bg-info">
								</div>
								<!-- Education row clone -->
								<div class="col-12 repeater-row-education d-none">
									<div class="row repeater-item-education">
										<div class="col-lg-3 col-md-3 pb-4 form-group">
											<label for="schoolName">School name</label>
											<input  type="text" class="form-control" name="schoolName[]" id="schoolName" >
										</div>
										<div class="col-lg-3 col-md-3 pb-4 form-group">
											<label for="educationQualification">Qualification</label>
											<input  type="text" class="form-control" name="educationQualification[]" id="educationQualification" >
										</div>
										<div class="col-lg-2 col-md-2 pb-4 form-group">
											<label for="educationYear">Year</label>
											<input  type="text" class="form-control" name="educationYear[]" id="educationYear" >
										</div>
										<div class="col-lg-1 col-md-1 pb-4">
											<label for="educationCity">City</label>
											<input  type="text" class="form-control" name="educationCity[]" id="educationCity" >
										</div>
										<div class="col-lg-2 col-md-2 pb-4">
											<label for="educationCity">Country</label>
											<input  type="text" class="form-control" name="educationCountry[]" id="educationCountry" >
										</div>
										<div class="col-lg-1 col-md-1 pb-4 delete-row">
											<div class="mb-2">
												&nbsp;
											</div>
											<a class="btn delete">
												<span class="">
													<i class="fa fa-trash fa-lg text-danger"></i>
												</span>
											</a>
										</div>
									</div>
								</div>
								<!-- End education row clone -->
								<div class="form-group dynamic-element">
									<!-- Start Education -->
									<?php $schoolName = json_decode($candidate->schoolName, true);?>
									<?php $educationQualification = json_decode($candidate->educationQualification, true);?>
									<?php $educationCountry = json_decode($candidate->educationCountry, true);?>
									<?php $educationCity = json_decode($candidate->educationCity, true);?>
									<?php $educationYear = json_decode($candidate->educationYear, true);?>
									<?php for ($i = 1; $i <= @sizeof($schoolName); $i++): ?>
									
									
									<div class="col-12">
										<div class="row">
											<div class="col-lg-3 col-md-3 pb-4 form-group">
												<label for="schoolName">School name</label>
												<input  type="text" class="form-control" name="schoolName[]" id="schoolName" value="<?=@$schoolName[$i] ?>">
											</div>
											<div class="col-lg-3 col-md-3 pb-4 form-group">
												<label>Qualification</label>
												<input  type="text" class="form-control" name="educationQualification[]" id="educationQualification" value="<?=@$educationQualification[$i] ?>">
											</div>
											<div class="col-lg-2 col-md-2 lg-pb-4 form-group">
												<label>Year</label>
												<input  type="text" class="form-control" name="educationYear[]" id="educationYear" value="<?=@$educationYear[$i] ?>">
											</div>
											<div class="col-lg-2 col-md-2 pb-4">
												<label>City</label>
												<input  type="text" class="form-control" name="educationCity[]" id="educationCity" value="<?=@$educationCity[$i] ?>">
											</div>
											<div class="col-lg-2 col-md-2 pb-4">
												<label>Country</label>
												<input  type="text" class="form-control" name="educationCountry[]" id="educationCountry" value="<?=@$educationCountry[$i] ?>">
												
											</div>
										</div>
									</div>
									<?php endfor ?>
									<div class="dynamic-stuff-education">
									</div>
									<div class="col">
										<button type="button" class="btn btn-outline-success btn-sm add-one-education m-2">Add Education <i class="fa fa-plus"></i></button>
									</div>
								</div>
							</div>
							<!-- skills -->
							<!-- skills clone -->
							<div class="col-12 repeater-row-skill d-none">
								<div class="row repeater-item-skill">
									<div class="col-12 col-md-6 pb-4 pr-md-5">
										<label>Professional Skill</label>
										<input  type="text" class="form-control" name="professionalSkills[]" id="professionalSkills">
									</div>
									<div class="col-12 col-md-4 pb-4 form-group pl-md-5">
										<label>Knowledge level</label>
										<select  class="form-control" name="professionalSkillsLevel[]" id="professionalSkillsLevel">
											<option value="">Choose an option</option>
											<option value="Low">Low</option>
											<option value="Medium">Medium</option>
											<option value="High">High</option>
										</select>
									</div>
									<div class="col-12 col-md-1 pb-4 delete-skill">
										<div class="mb-2">
											&nbsp;&nbsp;
										</div>
										<a class="btn ">
											<span class="delete-row">
												<i class="fa fa-trash text-danger"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
							<!-- Skills clone end -->
							<!-- Computer knowledge clone end -->
							<?php $professionalSkills = json_decode($candidate->professionalSkills, true);?>
							<?php $professionalSkillsLevel = json_decode($candidate->professionalSkillsLevel, true);?>
							<div class="col-12">
								<h3 class="form-heading form-text text-info p-2 rounded">Professional Skills</h3>
								<hr class="bg-info">
							</div>
							
							
							<div class="col-12">
								<div class="row">
									<?php if (sizeof($professionalSkills) == 0): ?>
									
									<?php else: ?>
									<?php for ($i = 1; $i <= @sizeof($professionalSkills); $i++): ?>
									<div class="col-12 col-md-6 pb-4 pr-md-5">
										<label>Professional Skill</label>
										<input  type="text" class="form-control" name="professionalSkills[]" id="professionalSkills" value="<?=@$professionalSkills[$i] ?>">
									</div>
									<div class="col-12 col-md-4 pb-4 form-group pl-md-5">
										<label>Knowledge level</label>
										<select  class="form-control" name="professionalSkillsLevel[]" id="professionalSkillsLevel">
											<option value="Low" <?php if ($professionalSkillsLevel[$i] == 'Low') {
														echo 'selected';
											} ?>>Low</option>
											<option value="Medium" <?php if ($professionalSkillsLevel[$i] == 'Medium') {
														echo 'selected';
											} ?>>Medium</option>
											<option value="High" <?php if ($professionalSkillsLevel[$i] == 'High') {
														echo 'selected';
											} ?>>High</option>
										</select>
									</div>
									<?php endfor; ?>
									<?php endif ?>
									<div class="col-12 col-md-1 pb-4">
									</div>
								</div>
								<div class="dynamic-stuff-skill">
								</div>
								<div class="row">
									<div class="col-12 col-md-3 pb-4 form-group">
										<button type="button" class="btn btn-outline-success btn-sm add-one-skill">Add Skill <i class="fa fa-plus"></i></button>
									</div>
								</div>
							</div>
							<!-- Experience Clone -->
							<div class="col-12 repeater-row-experience d-none mt-2">
								<div class="row repeater-item-experience">
									<div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
										<label>Working period from</label>
										<input  type="month" class="form-control" name="experienceWorkFrom[]" id="experienceWorkFrom">
									</div>
									<div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
										<label>Working period till</label>
										<input  type="month" class="form-control" name="experienceWorkTill[]" id="experienceWorkTill">
									</div>
									<div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
										<label>Task</label>
										<input  type="text" class="form-control" name="experienceTask[]" id="experienceTask">
									</div>
									<div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
										<label>Company name</label>
										<input  type="text" class="form-control" name="experienceCompanyName[]" id="experienceCompanyName">
									</div>
									<div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
										<label>Country</label>
										<input  type="text" class="form-control" name="experienceCountry[]" id="experienceCountry">
									</div>
									<div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
										<label>City</label>
										<input  type="text" class="form-control" name="experienceCity[]" id="experienceCity">
									</div>
									<div class="col-11 pb-4">
										<label>Tasks performed</label>
										<textarea class="form-control" name="experienceTasksPerformed[]" id="experienceTasksPerformed" rows="10"></textarea>
										<div class="mb-2">
											&nbsp;
										</div>
									</div>
									<div class="col-1 align-middle mt-3">
										<a class="btn delete-experience mt-4">
											<span class="">
												<i class="fa fa-trash fa-lg text-danger"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
							<!-- Experience clone end -->
							<?php $experienceWorkFrom = json_decode($candidate->experienceWorkFrom, true)?>
							<?php $experienceWorkTill = json_decode($candidate->experienceWorkTill, true)?>
							<?php $experienceTask = json_decode($candidate->experienceTask, true)?>
							<?php $experienceTasksPerformed = json_decode($candidate->experienceTasksPerformed, true)?>
							<?php $experienceCompanyName = json_decode($candidate->experienceCompanyName, true)?>
							<?php $experienceCountry = json_decode($candidate->experienceCountry, true)?>
							<?php $experienceCity = json_decode($candidate->experienceCity, true)?>
							<div class="col-12">
								<h3 class="form-heading form-text text-info p-2 rounded">Professional experiences</h3>
								<hr class="bg-info">
							</div>
							<div class="col-lg-12 col-md-6">
								<div class="row">
									<?php for ($i = 1; $i <= @sizeof($experienceCompanyName); $i++): ?>
									<div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
										<label>Working period from</label>
										<input  type="month"  class="form-control" name="experienceWorkFrom[]" id="experienceWorkFrom" value="<?=@$experienceWorkFrom[$i] ?>">
									</div>
									<div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
										<label>Working period till</label>
										<input  type="month"  class="form-control" name="experienceWorkTill[]" id="experienceWorkTill" value="<?=@$experienceWorkTill[$i] ?>">
									</div>
									<div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
										<label>Role/Title</label>
										<input  type="text"  class="form-control" name="experienceTask[]" id="experienceTask" value="<?=@$experienceTask[$i] ?>">
									</div>
									<div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
										<label>Company name</label>
										<input  type="text"  class="form-control" name="experienceCompanyName[]" id="experienceCompanyName" value="<?=@$experienceCompanyName[$i] ?>">
									</div>
									<div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
										<label>City</label>
										<input  type="text"  class="form-control" name="experienceCity[]" id="experienceCity" value="<?=@$experienceCity[$i] ?>">
									</div>
									<div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
										<label>Country</label>
										<input  type="text"  class="form-control" name="experienceCountry[]" id="experienceCountry" value="<?=@$experienceCountry[$i] ?>">
									</div>
									<div class="col-lg-8 offset-2 pb-4">
										<label>Tasks performed</label>
										<textarea class="form-control" rows="10" name="experienceTasksPerformed[]" id="experienceTasksPerformed" rows="1"><?=@$experienceTask[$i]?></textarea>
									</div>
									<?php endfor ?>
								</div>
								<div class="dynamic-stuff-experience">
								</div>
								<div class="row">
									<div class="col-12 col-md-5 pb-4">
										<button type="button" class="btn btn-outline-success btn-sm add-one-experience">Add Professional Experience <i class="fa fa-plus"></i></button>
									</div>
								</div>
							</div>
							<div class="col-12">
								<h3 class="form-heading form-text text-info p-2 rounded">Languages</h3>
								<hr class="bg-info">
							</div>
							<!-- Language clone -->
							<div class="col-12 repeater-row-language d-none">
								<div class="row repeater-item-language p-0">
									<div class="col-12 col-md-6 pb-4">
										<label>Language</label>
										<input  type="text" class="form-control" name="language[]" id="language">
									</div>
									<div class="col-12 col-md-5 pb-4">
										<label>Proficiency level</label>
										<select  class="form-control" name="languageLevel[]" id="languageLevel">
											<option value="">Choose an option</option>
											<option value="Native">Native</option>
											<option value="A1">A1</option>
											<option value="A2">A2</option>
											<option value="B1">B1</option>
											<option value="B2">B2</option>
											<option value="C1">C1</option>
											<option value="C2">C2</option>
											<option value="Low">Low</option>
											<option value="Medium">Medium</option>
											<option value="High">High</option>
										</select>
									</div>
									<div class="col-12 col-md-1 pb-4 delete-row-div">
										<div class="mb-2">
											&nbsp;
										</div>
										<a class="btn delete-language">
											<span>
												<i class="fa fa-trash fa-lg text-danger"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
							<!-- Language clone end -->
							<?php $language = json_decode($candidate->language, true);?>
							<?php $languageLevel = json_decode($candidate->languageLevel, true);?>
							<div class="col-12">
								<div class="row p-0">
									<?php for ($i = 1; $i <= @sizeof($language); $i++): ?>
									<div class="col-12 col-md-6 pb-4">
										<label>Language</label>
										<input  type="text" class="form-control" name="language[]" id="language" value="<?=@$language[$i] ?>">
									</div>
									<div class="col-12 col-md-5 pb-4 pl-md-5">
										<label>Proficiency level</label>
										<select  class="form-control" name="languageLevel[]" id="languageLevel">
											<option value="Native" <?php if ($languageLevel[$i] == 'Native') {
														echo "selected";
											} ?>>Native</option>
											<option value="A1" <?php if ($languageLevel[$i] == 'A1') {
														echo "selected";
											} ?>>A1</option>
											<option value="A2" <?php if ($languageLevel[$i] == 'A2') {
														echo "selected";
											} ?>>A2</option>
											<option value="B1" <?php if ($languageLevel[$i] == 'B1') {
														echo "selected";
											} ?>>B1</option>
											<option value="B2" <?php if ($languageLevel[$i] == 'B2') {
														echo "selected";
											} ?>>B2</option>
											<option value="C1" <?php if ($languageLevel[$i] == 'C1') {
														echo "selected";
											} ?>>C1</option>
											<option value="C2" <?php if ($languageLevel[$i] == 'C2') {
														echo "selected";
											} ?>>C2</option>
											<option value="Low" <?php if ($languageLevel[$i] == 'Low') {
														echo "selected";
											} ?>>Low</option>
											<option value="Medium" <?php if ($languageLevel[$i] == 'Medium') {
														echo "selected";
											} ?>>Medium</option>
											<option value="High" <?php if ($languageLevel[$i] == 'High') {
														echo "selected";
											} ?>>High</option>
										</select>
									</div>
									<?php endfor; ?>
								</div>
								<div class="dynamic-stuff-language">
								</div>
								<div class="row">
									<div class="col-12 col-md-3 pb-4 form-group">
										<button type="button" class="btn btn-outline-success btn-sm add-one-language">Add language <i class="fa fa-plus"></i></button>
									</div>
								</div>
							</div>
							<!-- Computer Knowledge clone -->
							<div class="col-12 repeater-row-software d-none">
								<div class="row repeater-item-software">
									<div class="col-12 col-md-6 pb-4 pr-md-5">
										<label>Computer Skills</label>
										<input  type="text" class="form-control" name="software[]" id="software">
									</div>
									<div class="col-12 col-md-4 pb-4 form-group pl-md-5">
										<label>Knowledge level</label>
										<select  class="form-control" name="softwareKnowledgeLevel[]" id="softwareKnowledgeLevel">
											<option value="">Choose an option</option>
											<option value="Low">Low</option>
											<option value="Medium">Medium</option>
											<option value="High">High</option>
										</select>
									</div>
									<div class="col-12 col-md-1 pb-4 delete-software">
										<div class="mb-2">
											&nbsp;&nbsp;
										</div>
										<a class="btn ">
											<span class="delete-row">
												<i class="fa fa-trash text-danger"></i>
											</span>
										</a>
									</div>
								</div>
							</div>
							<!-- Computer knowledge clone end -->
							<?php $software = json_decode($candidate->software, true);?>
							<?php $softwareKnowledgeLevel = json_decode($candidate->softwareKnowledgeLevel, true);?>
							
							
							
							<div class="col-12">
								<h3 class="form-heading form-text text-info p-2 rounded">Computer Skills</h3>
								<hr class="bg-info">
							</div>
							<div class="col-12">
								<div class="row">
									<?php for ($i = 1; $i <= sizeof($software); $i++): ?>
									<div class="col-12 col-md-6 pb-4 pr-md-5">
										<label>Skills</label>
										<input  type="text" class="form-control" name="software[]" id="software" value="<?=@$software[$i] ?>">
									</div>
									<div class="col-12 col-md-4 pb-4 form-group pl-md-5">
										<label>Knowledge level</label>
										<select  class="form-control" name="softwareKnowledgeLevel[]" id="softwareKnowledgeLevel">
											<option value="Low" <?php if ($softwareKnowledgeLevel[$i] == 'Low') {
														echo "selected";
											} ?>>Low</option>
											<option value="Medium" <?php if ($softwareKnowledgeLevel[$i] == 'Medium') {
														echo "selected";
											} ?>>Medium</option>
											<option value="High" <?php if ($softwareKnowledgeLevel[$i] == 'High') {
														echo "selected";
											} ?>>High</option>
										</select>
									</div>
									<div class="col-12 col-md-1 pb-4">
									</div>
									<?php endfor ?>
								</div>
								<div class="dynamic-stuff-software">
								</div>
								<div class="row">
									<div class="col-12 col-md-3 pb-4 form-group">
										<button type="button" class="btn btn-outline-success btn-sm add-one-software">Add Skill <i class="fa fa-plus"></i></button>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 pb-2">
									<h3 class="form-heading form-text text-info p-2 rounded" >Other</h3>
									<hr class="bg-info">
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6 py-1">
									<label for="">Driving Licence</label>
									<input type="text" name="candidateDrivingLicence" placeholder="A B C D E" class="form-control" value="<?=@$candidate->candidateDrivingLicence?>">
								</div>
								<div class="col-sm-6 col-md-6 col-lg-6 py-1">
									<label for="">Available From/Notice Period</label>
									<input type="date" name="availableFrom" class="form-control" value="<?=@$candidate->availableFrom?>">
								</div>
								<div class="col-12 py-4">
									<label>Other</label>
									<textarea class="form-control" name="message" id="message" rows="10"><?=@$candidate->message?></textarea>
								</div>
							</div>
							<div class="row d-flex justify-content-center">
								
								<div class="">
									<div class="align-content-center">
										<button type="submit" class="btn btn-outline-secondary text-uppercase" id="candidateSaveButton">
										Send
										<i class="fa fa-arrow-right"></i>
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
</div>
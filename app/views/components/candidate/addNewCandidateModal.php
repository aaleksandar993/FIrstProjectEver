<div class="modal fade addNewCandidate" tabindex="-1" role="dialog" aria-labelledby="addNewCandidate" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered">
		<div class="modal-content rounded shadow-sm">
			<div class="modal-header">
				Add New Candidate
			</div>
			<div class="container-fluid pb-3 pt-3">
						<form method="POST" enctype="multipart/form-data" action="/candidate/store" id="candidateCreateForm" class="candidateCreateForm needs-validation">
			<div class="row pb-2">
				<div class="col-12">
					<h3 class="form-heading form-text text-info p-2 rounded border-info">Personal data</h3>
					<hr class="bg-info">
				</div>
				<div class="col-12 col-md-4 pb-4 form-group">
					<label for="candidateFirstName">First Name</label>
					<input  type="text" value="<?=@$_POST['candidateFirstName']?>" class="form-control " name="candidateFirstName" id="candidateFirstName" >
				</div>
				<div class="col-12 col-md-4 pb-4 form-group">
					<label for="candidateAddress">Address</label>
					<input  type="text" value="<?=@$_POST['candidateAddress']?>" class="form-control " name="candidateAddress" id="candidateAddress" >
				</div>
				<div class="col-12 col-md-4 pb-4 form-group">
					<label for="candidatePhone">Phone number</label>
					<input  type="tel" value="<?=@$_POST['candidatePhone']?>" class="form-control " name="candidatePhone" id="candidatePhone" >
				</div>
				<div class="col-12 col-md-4 pb-4 form-group">
					<label for="candidateSurname">Last name</label>
					<input  type="text" value="<?=@$_POST['candidateLastName']?>" class="form-control " name="candidateLastName" id="candidateSurname" >
				</div>
				<div class="col-12 col-md-4 pb-4 form-group">
					<label for="candidateCity">City/Postal code</label>
					<input  type="text" value="<?=@$_POST['candidateCity']?>" class="form-control" name="candidateCity" id="candidateCity">
				</div>
				<div class="col-12 col-md-4 pb-4 form-group">
					<label for="candidateEmail">Email</label>
					<input  type="text" class="form-control" value="<?=@$_POST['candidateEmail']?>" name="candidateEmail" id="candidateEmail" >
				</div>
				<div class="col-12 col-md-4 pb-4 form-group">
					<label for="candidateGender">Gender</label>
					<select  class="form-control" name="candidateGender" >
						<option value="">Select gender</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
				<div class="col-12 col-md-4 pb-4 form-group">
					<label for="candidateCountry">Country</label>
					<input  type="text" class="form-control" value="<?=@$_POST['candidateCountry']?>" name="candidateCountry" id="candidateCountry" >
				</div>
				<div class="col-12 col-md-4 pb-4 form-group">
					<label>Upload your photo</label>
					<div class="custom-file">
						<input  type="file" class="form-control custom-file-input" name="candidatePhoto" id="photo" accept="image/*">
						<label class="custom-file-label">Choose photo</label>
					</div>
				</div>
				<div class="col-12 col-md-4 pb-4 form-group">
					<label for="candidateBirthday">Date of birth</label>
					<input  type="date" value="<?=@$_POST['candidateBirthday']?>" class="form-control selector" name="candidateBirthday" id="candidateBirthday" >
				</div>
				<div class="col-12 col-md-4 pb-4 form-group">
					<label for="candidateCitizenship">Citizenship</label>
					<input  type="text" value="<?=@$_POST['candidateCitizenship']?>" class="form-control " name="candidateCitizenship" id="candidateCitizenship" >
				</div>
				<div class="col-12 col-md-4 pb-4 form-group">
					<label>Upload your CV</label>
					<div class="custom-file">
						<input  type="file" class="form-control custom-file-input" name="candidateCV" id="candidateCV" accept="PDF">
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
							<input  type="month" class="form-control" name="educationYear[]" id="educationYear" >
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
					<div class="col-12">
						<div class="row">
							<div class="col-lg-3 col-md-3 pb-4 form-group">
								<label for="schoolName">School name</label>
								<input  type="text" class="form-control" name="schoolName[]" id="schoolName">
							</div>
							<div class="col-lg-3 col-md-3 pb-4 form-group">
								<label>Qualification</label>
								<input  type="text" class="form-control" name="educationQualification[]" id="educationQualification">
							</div>
							<div class="col-lg-2 col-md-2 lg-pb-4 form-group">
								<label>Year</label>
								<input  type="month" class="form-control" name="educationYear[]" id="educationYear">
							</div>
							<div class="col-lg-2 col-md-2 pb-4">
								<label>City</label>
								<input  type="text" class="form-control" name="educationCity[]" id="educationCity">
							</div>
							<div class="col-lg-2 col-md-2 pb-4">
								<label>Country</label>
								<input  type="text" class="form-control" name="educationCountry[]" id="educationCountry">
							</div>
						</div>
					</div>
					<div class="dynamic-stuff-education">
					</div>
					<div class="col">
						<button type="button" class="btn btn-outline-success btn-sm add-one-education m-2">Add Education <i class="fa fa-plus"></i></button>
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
			<div class="col-12">
				<h3 class="form-heading form-text text-info p-2 rounded">Professional experiences</h3>
				<hr class="bg-info">
			</div>
			<div class="col-lg-12 col-md-6">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
						<label>Working period from</label>
						<input  type="month"  class="form-control" name="experienceWorkFrom[]" id="experienceWorkFrom">
					</div>
					<div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
						<label>Working period till</label>
						<input  type="month"  class="form-control" name="experienceWorkTill[]" id="experienceWorkTill">
					</div>
					<div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
						<label>Role/Title</label>
						<input  type="text"  class="form-control" name="experienceTask[]" id="experienceTask">
					</div>
					<div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
						<label>Company name</label>
						<input  type="text"  class="form-control" name="experienceCompanyName[]" id="experienceCompanyName">
					</div>
					<div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
						<label>City</label>
						<input  type="text"  class="form-control" name="experienceCity[]" id="experienceCity">
					</div>
					<div class="col-12 col-md-6 col-lg-4 pb-4 form-group">
						<label>Country</label>
						<input  type="text"  class="form-control" name="experienceCountry[]" id="experienceCountry">
					</div>
					<div class="col-lg-8 offset-2 pb-4">
						<label>Tasks performed</label>
						<textarea class="form-control" rows="10" name="experienceTasksPerformed[]" id="experienceTasksPerformed" rows="1"></textarea>
					</div>
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
			<div class="col-12">
				<div class="row p-0">
					<div class="col-12 col-md-6 pb-4">
						<label>Language</label>
						<input  type="text" class="form-control" name="language[]" id="language">
					</div>
					<div class="col-12 col-md-5 pb-4 pl-md-5">
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
						<label>Skills</label>
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
			<div class="col-12">
				<h3 class="form-heading form-text text-info p-2 rounded">Skills</h3>
				<hr class="bg-info">
			</div>
			<div class="col-12">
				<div class="row">
					<div class="col-12 col-md-6 pb-4 pr-md-5">
						<label>Skills</label>
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
					<div class="col-12 col-md-1 pb-4">
					</div>
				</div>
				<div class="dynamic-stuff-software">
				</div>
				<div class="row">
					<div class="col-12 col-md-3 pb-4 form-group">
						<button type="button" class="btn btn-outline-success btn-sm add-one-software">Add Skill <i class="fa fa-plus"></i></button>
					</div>
				</div>
			</div>
			<div class="col-12">
				<h3 class="form-heading form-text text-info p-2 rounded" >Other</h3>
				<hr class="bg-info">
			</div>
			<div class="col-12 pb-4">
				<label>Other</label>
				<textarea class="form-control" name="message" id="message" rows="10"></textarea>
			</div>
			<div class="row">
				<div class="col-12 col-md-6">
					<div class="custom-control custom-checkbox">
						<input  type="checkbox" class="custom-control-input" id="consentcheck" name="candidateAgreement">
						<label class="custom-control-label" for="consentcheck">
							I consent to the processing of personal data in accordance with the REG. EU 2016/679 *
						</label>
					</div>
				</div>
				<div class="col-12 col-md-6">
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
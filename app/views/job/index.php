<?=$this->setSiteTitle("Job");?>
<?=$this->start('head');?>
<?=$this->end('head');?>
<?=$this->start('body');?>
<div class="card mb-4">
    <div class="card-header">
        <i class="fa fa-table mr-1"></i>
        Jobs
    </div>
    <div class="card-body p-1">
        <div class="table-responsive">
            <table class="table table-bordered " id="jobTable" width="100%" cellspacing="0">
                <thead class="text-truncate">
                    <tr>
                    	<th></th>
 						<th>ID</th>
						<th>Required Profession</th>
						<th>Open places</th>
						<th>Place of work</th>
						<th>Salary</th>
						<th>Working Hours</th>
						<th>Available Immediate</th>
						<th>Open until</th>
						<th>Main tasks</th>
						<th>Shifts</th>
						<th>Accomodations</th>
						<th>Accomodations Pays</th>
						<th>Cost of Accomodations</th>
						<th>Industry</th>
						<th>Contract</th>
						<th>Fixed term</th>
						<th>Part time</th>
						<th>Additional Information</th>
						<th>Candidate Qualification</th>
						<th>Candidate Age</th>
						<th>Candidate Education</th>
						<th>Candidate Work Experience</th>
						<th>Candidate Language</th>
						<th>Other languages</th>
						<th>Candidate computer skills</th>
						<th>Candidate Driving Licence</th>
						<th>Candidate means of transport</th>
						<th>Description</th>
 						<th>Added by</th>
 						<th>Added on</th>
                    </tr>
                </thead>
                <tbody class="text-truncate text-center">
                    <?php foreach ($jobs as $job): ?>
					<tr>
						<td></td>
						<td><a href="/job/show/<?=$job->id?>"><?=$job->id?></a></td>
						<td><?=$job->requiredProfession?></td>
						<td><?=$job->openings?></td>
						<td><?=$job->placeOfWork?></td>
						<td><?=$job->salary?></td>
						<td><?=$job->workingHours?></td>
						<td><?=$job->avaliableNow?></td>
						<td><?=@date_format($job->availabilityDate, 'd.m.Y')?></td>
						<td><?=$job->jobDescription?></td>
						<td><?=$job->shifts?></td>
						<td><?=$job->accomodations?></td>
						<td><?=$job->accomodationsPays?></td>
						<td><?=$job->accomodationsCosts?></td>
						<td><?=$job->corporateInsertion?></td>
						<td><?=$job->contractDetails?></td>
						<td><?=$job->fixedTerm?></td>
						<td><?=$job->partTime?></td>
						<td><?=$job->additionalJobInformation?></td>
						<td><?=$job->candidateQualification?></td>
						<td><?=$job->candidateAge?></td>
						<td><?=$job->candidateEducation?></td>
						<td><?=$job->candidateWorkExperience?></td>
						<td><?=$job->language?></td>
						<td><?=$job->candidateOtherLanguage?></td>
						<td><?=$job->candidateComputerSkills?></td>
						<td><?=$job->candidateDrivingLicence?></td>
						<td><?=$job->candidateMeansOfTransport?></td>
						<td><?=$job->descriptionOfStaffRequest?></td>
						<td><?=@$job->user->firstName?></td>
						<td><?=@date_format($job->created_at, 'd.m.Y - h:m')?></td>
					</tr>
                    <?php endforeach?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?=$this->end('body');?>
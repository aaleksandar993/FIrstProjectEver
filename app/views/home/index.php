<?=$this->setSiteTitle("Dashboard");?>
<?=$this->start('head');?>
<?=$this->end('head');?>
<?=$this->start('body');?>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-3">
      <a href="/User">
        <div class="card shadow">
          <div class="card-body">
            <div class="stat-widget-five">
              <div class="stat-icon dib flat-color-2">
                <i class="pe-7s-users"></i>
              </div>
              <div class="stat-content">
                <div class="text-left dib">
                  <div class="stat-text"><span class="count"><?=@\app\models\User::all()->count();?></span></div>
                  <div class="stat-heading">Users</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-lg-3 col-md-6 mb-3">
      <a href="/Candidate">
        <div class="card shadow">
          <div class="card-body">
            <div class="stat-widget-five">
              <div class="stat-icon dib flat-color-2">
                <i class="pe-7s-id text-warning"></i>
              </div>
              <div class="stat-content">
                <div class="text-left dib">
                  <div class="stat-text"><span class="count"><?=@\app\models\Candidate::all()->count();?></span></div>
                  <div class="stat-heading">Candidates</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-lg-3 col-md-6 mb-3">
      <a href="/Job">
        <div class="card shadow">
          <div class="card-body">
            <div class="stat-widget-five">
              <div class="stat-icon dib flat-color-2">
                <i class="pe-7s-note text-info"></i>
              </div>
              <div class="stat-content">
                <div class="text-left dib">
                  <div class="stat-text"><span class="count"><?=@\app\models\Job::all()->count();?></span></div>
                  <div class="stat-heading">Jobs</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-lg-3 col-md-6 mb-3">
      <a href="/Company">
        <div class="card shadow">
          <div class="card-body">
            <div class="stat-widget-five">
              <div class="stat-icon dib flat-color-2">
                <i class="pe-7s-culture text-success"></i>
              </div>
              <div class="stat-content">
                <div class="text-left dib">
                  <div class="stat-text"><span class="count"><?=@\app\models\Company::all()->count();?></span></div>
                  <div class="stat-heading">Companies</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>
</div>
<div class="container-fluid">

</div>
<div class="container-fluid">
  <div class="row p-0 m-0">
    <div class="col-sm-12 col-md-12 col-lg-12 p-0">
      <div class="card mb-4 px-0">
        <div class="card-header">
          <i class="fa fa-suitcase fa-2x text-danger mr-1"></i>
          <span class="h5">Jobs</span>
        </div>
        <div class="card-body px-0">
          <div class="table-responsive p-2">
            <table class="table table-hover table-bordered p-0" id="jobTable" width="100%" cellspacing="1">
              <thead class="text-truncate my-1">
                <tr>
                  <th></th>
                  <th>ID</th>
                  <th>Required Profession</th>
                  <th>Company</th>
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
              <tbody class="text-truncate">
                <?php foreach (\app\models\Job::all() as $job): ?>
                <tr>
                  <td></td>
                  <td><a href="/job/show/<?=$job->id?>" class="badge badge-success"><?=$job->id?></a></td>
                  <td><?=$job->requiredProfession?></td>
                  <td><a href="/company/show/<?=@$job->company->id ?>"><?=@$job->company->companyName ?></a></td>
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
    </div>
  </div>
</div>
<?=$this->end('body');?>
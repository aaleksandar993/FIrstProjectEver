<div class="modal fade addCandidateToJob" tabindex="-1" role="dialog" aria-labelledby="candidateNote" aria-hidden="true" id="addCandidateToJob">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				Add Candidate To <?=@$job->requiredProfession?>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="card mb-4 shadow-sm">
						<div class="card-body p-1">
							<div class="table-responsive">
								<table class="table table-hover table-bordered" id="candidateTable" width="100%" cellspacing="0">
									<thead class="text-truncate">
										<tr>
											<th class="bg-light">Status</th>
											<th class="bg-light">First name</th>
											<th class="bg-light">Last name</th>
											<th class="bg-light">Email</th>
											<th class="bg-light">Address</th>
											<th class="bg-light">City</th>
											<th class="bg-light">Country</th>
											<th class="bg-light">Phone</th>
											<th class="bg-light">Citizenship</th>
											<th class="bg-light">Birthday</th>
											<th class="bg-light">Gender</th>
											<th class="bg-light">School</th>
											<th class="bg-light">Language</th>
											<th class="bg-light">Professional Skills</th>
											<th class="bg-light">Skills</th>
											<th class="bg-light">Added by</th>
										</tr>
									</thead>
									<tbody class="text-truncate text-left">
										<?php foreach (\app\models\Candidate::all() as $candidate): ?>
										<!-- if exists skip -->
										<tr>
											<?php if (!\app\models\Recruitment::where('job_id','=',$job->id)->where('candidate_id','=', $candidate->id)->first()): ?>
											<td>
												
												<form action="/recruitment/store/" method="post" class="addCandidateToJob">
													<input type="hidden" name="job_id" value="<?=@$job->id?>">
													<input type="hidden" name="candidate_id" value="<?=@$candidate->id?>">
													<input type="hidden" name="user_id" value="<?=@$_SESSION['uid']?>">
													<button class="btn btn-sm btn-outline-success" role="button" value="submit" id="recruitmentSaveButton">Add</button>
												</form>
											</td>
											<?php else: ?>
											<td class="">
												<div class="alert alert-danger p-1 mb-0">Assigned</div>
											</td>
											<?php endif ?>
											
											<td><?=ucfirst($candidate->candidateFirstName)?></td>
											<td><?=ucfirst($candidate->candidateLastName)?></td>
											<td><?=$candidate->candidateEmail?></td>
											<td><?=ucfirst($candidate->candidateAddress)?></td>
											<td><?=ucfirst($candidate->candidateCity)?></td>
											<td><?=ucfirst($candidate->candidateCountry)?></td>
											<td><?=ucfirst($candidate->candidatePhone)?></td>
											<td><?=ucfirst($candidate->candidateCitizenship)?></td>
											<td><?=date('d.m.Y', strtotime($candidate->candidateBirthday))?></td>
											<td><i class="fa fa-<?=strtolower($candidate->candidateGender)?>"></i></td>
											<td>
												<small>
												<?php foreach (json_decode($candidate->schoolName, true) as $key => $value): ?>
												<?='<span class=" h6 alert alert-info text-left p-1">' . @ucfirst($value) . '</span>'?>&nbsp;
												<?php endforeach?>
												</small>
												<br>
											</td>
											<td>
												<?php foreach (json_decode($candidate->language, true) as $key => $value): ?>
												<?='<span class=" h6 alert alert-info text-left p-1">' . @ucfirst($value) . '</span>'?>&nbsp;
												<?php endforeach?>
											</td>
											<td>
												<?php foreach (json_decode($candidate->professionalSkills, true) as $key => $value): ?>
												<?='<span class=" h6 alert alert-info text-left p-1 text-break">' . @ucfirst($value) . '</span>'?>&nbsp;
												<?php endforeach?>
											</td>
											<td>
												<?php foreach (json_decode($candidate->software, true) as $key => $value): ?>
												<?='<span class=" h6 alert alert-info text-left p-1 text-break">' . @ucfirst($value) . '</span>'?>&nbsp;
												<?php endforeach?>
											</td>
											<td><?=@$candidate->user->firstName?></td>
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
	</div>
</div>
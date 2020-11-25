<div class="modal fade candidateAssignJobModal" tabindex="-1" role="dialog" aria-labelledby="candidateAssignJobModal" aria-hidden="true">
	<div class="modal-dialog modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				Assign Job To <?=@ucwords($candidate->candidateFirstName.' '.$candidate->candidateLastName) ?>
			</div>
			<div class="container-fluid pb-3 pt-3">
				<div class="table-responsive">
					<table class="table table-bordered " id="jobTable" width="100%" cellspacing="0">
						<thead class="text-truncate">
							<tr>
								<th>Status</th>
								<th>Required Profession</th>
								<th>Company</th>
								<th>Place of work</th>
								<th>Industry</th>
							</tr>
						</thead>
						<tbody class="text-truncate text-center">
							<?php foreach (\app\models\Job::all() as $job): ?>
							<tr class="p-0">
								<?php if (!\app\models\Recruitment::where('job_id','=',$job->id)->where('candidate_id','=', $candidate->id)->first()): ?>
								<td class="p-2">
									
									<form action="/recruitment/store/" method="post" id="asignJobToCandidate">
										<input type="hidden" name="candidate_id" value="<?=@$candidate->id?>">
										<input type="hidden" name="user_id" value="<?=@$_SESSION['uid']?>">
										<input type="hidden" name="job_id" value="<?=@$job->id?>">
									<input type="submit" value="Assign" class="btn btn-sm btn-outline-success recruitmentSaveButton p-1">
									</form>
								</td>
								<?php else: ?>
								<td class="p-2"><strong class="alert alert-danger p-1">Assigned</strong></td>
								<?php endif ?>
								<td class="p-2"><?=$job->requiredProfession?></td>
								<td class="p-2"><a href="/company/show/<?=@$job->company->id?>"><?=@$job->company->companyName?></a></td>
								<td class="p-2"><?=$job->placeOfWork?></td>
								<td class="p-2"><?=$job->corporateInsertion?></td>
							</tr>
							<?php endforeach?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<?php foreach ($job->candidates as $candidate): ?>
<div class="row justify-content-between py-2 border-left bg-light border-danger shadow-sm my-3 py-1" style="border-width: 0.3em !important">
	<div class="float-left ml-3">
		<span class="float-left m-1 p-1">
			<?php if (!empty($candidate->image)): ?>
			<img
			src="<?=DS.'public'.DS.'storage'.DS.'candidates'.DS.$candidate->id.DS.'images'.DS.$candidate->image ?>"
			alt="Candidate image"
			class="img-thumbnail"
			style="width: 50px;height: 50px;">
			<?php else: ?>
			<img
			src="<?=DS.'public'.DS.'storage'.DS.'candidates'.DS.'default.jpg' ?>"
			alt="Candidate image"
			class="img-thumbnail"
			style="width: 50px;height: 50px;">
			<?php endif ?>
			
		</span>
	</div>
	<div class="float-left p-2 my-1">
		<a href="/candidate/show/<?=@$candidate->id?>" class="text-dark" style="text-decoration: none;">
			<strong><?=@ucwords($candidate->candidateFirstName . ' ' . $candidate->candidateLastName)?></strong>
		</a>
		<br>
		<span class="text-muted mr-2">
			<small><?=@$candidate->candidateEmail?></small>
		</span>
	</div>
	<div class="float-left p-2 my-1">
		<span class="text-muted mr-2"><?=@$candidate->candidatePhone?></span>
	</div>
	<div class="float-left p-2 my-1">
	</div>
	<div class="float-left p-2 my-1">
	</div>
	<div class="float-left p-2 my-1">
		<small
		class="btn btn-sm btn-outline-success float-left mr-1 py-0"
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
	<div class="float-left p-2 my-1">
	</div>
	<div class="float-left p-2 my-1">
	</div>
	<div class="p-2 my-1">
		<form action="/recruitment/delete" method="post">
			<input type="hidden" name="job_id" value="<?=@$job->id?>">
			<input type="hidden" name="candidate_id" value="<?=@$candidate->id?>">
			<button type="submit" class="form-control p-0 m-0"><i class="fa fa-trash btn btn-sm btn-outline-danger float-right ml-1"></i></button>
		</form>
	</div>
</div>
<?php endforeach?>
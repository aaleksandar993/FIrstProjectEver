<?=$this->setSiteTitle("Profile");?>
<?=$this->start('head');?>
<?=$this->end('head');?>
<?=$this->start('body');?>
<div class="container-fluid">
	<div class="row d-flex justify-content-between">
		<?php foreach ($users as $user): ?>
		<div class="col-md-3 mb-3">
			<div class="card">
				<div class="card-header d-flex justify-content-between">
					<div><h4 class=""><?=@$user->firstName?> <?=@$user->surname?></h4></div>
				</div>
				<div class="card-body">
					<div class="col-md-12 my-1"><i class="fa fa-user-circle-o text-danger fa-lg mr-2"></i><span style="font-size: 1.2em;"><?=@$user->username?></span></div>
					<div class="col-md-12 my-1"><i class="fa fa-envelope text-danger fa-lg mr-2"></i><span style="font-size: 1.2em;"><?=@$user->email?></span></div>
					<div class="col-md-12 my-1"><i class="fa fa-phone text-success fa-lg mr-2"></i><?=@$user->phone?></div>
					<hr class="jumbotron-hr">
					<div class="alert-message alert-message-info p-0">
						<span class="m-2 d-inline-block font-weight-bold">Companies Registered</span>
						<span class="mx-3 p-2 float-right font-weight-bold"><?=@$user->companies->count() ?></span>
					</div>
					<div class="alert-message alert-message-info p-0">
						<span class="m-2 d-inline-block font-weight-bold">Jobs Registered</span>
						<span class="mx-3 p-2 float-right font-weight-bold"><?=@$user->jobs->count() ?></span>
					</div>
					<div class="alert-message alert-message-info p-0">
						<span class="m-2 d-inline-block font-weight-bold">Candidates Registered</span>
						<span class="mx-3 p-2 float-right font-weight-bold"><?=@$user->candidates->count() ?></span>
					</div>
					<div class="alert-message alert-message-info p-0">
						<span class="m-2 d-inline-block font-weight-bold">Recruitment Processes</span>
						<span class="mx-3 p-2 float-right font-weight-bold"><?=@$user->recruitments->count() ?></span>
					</div>
				</div>
				<div class="card-footer">
					<?php if ($user->role == 'user'): ?>
						<span class="float-left">
							<form action="/user/approveuser/<?=@$user->id?>">
								<button type="submit" class="btn btn-sm btn-outline-success mx-2">Approve</button>
							</form>
						</span>
						
					<?php endif ?>
					<span class="float-left">
							<form action="/user/delete/<?=@$user->id?>">
								<button type="submit" class="btn btn-sm btn-outline-danger mx-2">Delete</button>
							</form>
					</span>
					
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</div>
</div>
<?=$this->end('body');?>
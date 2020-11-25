<?php foreach ($job->notes()->with('user')->get() as $note): ?>
<div class="col-sm-10 col-md-10 col-lg-10 offset-1">
	<div class="card alert-message alert-message-info shadow-sm py-1">
		<div class="card-body px-0 pt-0">
			<div class="mb-3">
				<p class="lead d-block">
					<?=@$note->note?>
				</p>
			</div>
			<div class="d-flex justify-content-between">
				<div>
					<div class="">
						<span>
							<strong>Added on:</strong>
							<?=@date_format($note->created_at, 'd.m.y  h:m')?>
						</span>
					</div>
					<div>
						<span>
							<strong>Added by:</strong>
						</span>
						<span class="card-subtitle mb-2 text-muted my-1">
							<a href="/user/show/<?=@$note->user->id ?>"><?=@$note->user->username ?></a>
						</span>
					</div>
				</div>
				<?php if ($_SESSION['uid'] == $note->user->id): ?>
				<div class="">
					<a class="btn btn-sm btn-outline-danger" href="/note/delete/<?=@$note->id ?>">
						Delete
					</a>
				</div>
				<?php endif ?>
			</div>
		</div>
	</div>
</div>
<?php endforeach?>
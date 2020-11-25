<?=$this->setSiteTitle('Companies');?>
<?=$this->start('head');?>

<?=$this->end('head');?>
<?=$this->start('body');?>
<div class="card mb-4">
	<div class="card-header">
		<i class="fa fa-table fa-2x mr-1"><span class="ml-2" style="font-family: arial;">Companies</span></i>
		
	</div>
	<div class="card-body p-1">
		<div class="table-responsive">
			<table class="table table-bordered shadow-sm" id="companyTable" width="100%" cellspacing="0">
				<thead class="text-truncate">
					<tr>
						<th></th>
						<th>ID</th>
						<th>Company name</th>
						<th>Address</th>
						<th>Industry</th>
						<th>Website</th>
						<th>Phone</th>
						<th>Country</th>
						<th>City</th>
						<th>Company size</th>
						<th>About company</th>
						<th>Open jobs</th>
						<th>Added On</th>
						<th>Added By</th>
					</tr>
				</thead>
				<tbody class="text-truncate text-center">
					<?php foreach ($companies as $company): ?>
					<tr>
						<td></td>
						<td><a href="/company/show/<?=$company->id?>"><?=$company->id?></a></td>
						<td><?=$company->companyName?></td>
						<td><?=$company->companyAddress?></td>
						<td><?=$company->companyIndustry?></td>
						<td><a href="http://<?=$company->companyWebsite?>" target="_blank"><?=$company->companyWebsite?></a></td>
						<td><?=$company->companyPhone?></td>
						<td><?=$company->companyCountry?></td>
						<td><?=$company->companyCity?></td>
						<td><?=$company->companySize?></td>
						<td class="">
							<small class="" data-toggle="popover" data-trigger="click" data-title="<?=$company->companyName?>" data-content="<?=$company->companyAbout?>"><?=@$company->companyAbout ?></small>
						</td>
						<td><?=$company->jobs()->count()?></td>
						<td><?=@$company->created_at ?></td>
						<td><?=@$company->user->username ?></td>
					</tr>
					<?php endforeach?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?=$this->end('body');?>
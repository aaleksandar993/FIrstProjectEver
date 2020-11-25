<?php if (isset($_SESSION['loggedIn'])): ?>
<div id="layoutSidenav_nav">
	<nav class="sb-sidenav accordion sb-sidenav-light bg-white shadow" id="sidenavAccordion">
		<div class="sb-sidenav-menu pb-3">
			<div class="nav">
				<div class="sb-sidenav-menu-heading mt-0 shadow-sm">Core</div>
				<a class="nav-link shadow-sm pl-4" href="/">
					<div class="sb-nav-link-icon">
						<i class="pe-7s-settings m-1"></i>
					</div>
					Dashboard
				</a>
<!-- 				<div class="sb-sidenav-menu-heading shadow-sm bg-white">Actions</div>
				<a class="nav-link shadow-sm collapsed shadow-sm" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
					<div class="sb-nav-link-icon fs">
						<i class="fa fa-book-open"></i>
					</div>
					<h6><small>Candidate</small></h6>
					<div class="sb-sidenav-collapse-arrow">
						<i class="fa fa-angle-down"></i>
					</div>
				</a> -->
				<div class="shadow-sm bg-white ml-0 pl-0" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
					<nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
						<a class="nav-link shadow-sm collapsed" href="#" data-toggle="collapse" data-target="#candidateCollapse" aria-expanded="false" aria-controls="candidateCollapse">
							<i class="fa fa-user fa-fw text-primary"></i>
							&nbsp;Candidate
							<div class="sb-sidenav-collapse-arrow">
								<i class="fa fa-angle-down"></i>
							</div>
						</a>
						<div class="collapse" id="candidateCollapse" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
							<nav class="sb-sidenav-menu-nested nav">
								<a class="nav-link shadow-sm" href="/Candidate"><i class="fa fa-list-ul fa-fw text-info"></i>&nbsp;List of all candidates</a>
								<a class="nav-link shadow-sm" href="/Candidate/create"><i class="fa fa-plus fa-fw text-success"></i>&nbsp;Add candidate</a>
							</nav>
						</div>
						<a class="nav-link shadow-sm collapsed" href="#" data-toggle="collapse" data-target="#companyCollapse" aria-expanded="false" aria-controls="companyCollapse">
							<i class="fa fa-building-o fa-fw text-info"></i>
							&nbsp;Company
							<div class="sb-sidenav-collapse-arrow">
								<i class="fa fa-angle-down"></i>
							</div>
						</a>
						<div class="collapse" id="companyCollapse" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
							<nav class="sb-sidenav-menu-nested nav">
								<a class="nav-link shadow-sm" href="/Company">
									<i class="fa fa-list-ul fa-fw text-info"></i>
									&nbsp;List of all companies
								</a>
								<a class="nav-link shadow-sm" href="/Company/create">
									<i class="fa fa-plus fa-fw text-success"></i>
									&nbsp;Add company
								</a>
							</nav>
						</div>
						<a class="nav-link shadow-sm collapsed" href="#" data-toggle="collapse" data-target="#jobCollapse" aria-expanded="false" aria-controls="jobCollapse">
							<i class="fa fa-sticky-note-o fa-fw text-success"></i>
							&nbsp;Job
							<div class="sb-sidenav-collapse-arrow">
								<i class="fa fa-angle-down"></i>
							</div>
						</a>
						<div class="collapse" id="jobCollapse" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
							<nav class="sb-sidenav-menu-nested nav">
								<a class="nav-link shadow-sm" href="/Job">
									<i class="fa fa-list-ul fa-fw text-info"></i>
									&nbsp;List of all jobs
								</a>
								<a class="nav-link shadow-sm" href="/Job/create">
									<i class="fa fa-plus fa-fw text-success"></i>
									&nbsp;Add job
								</a>
							</nav>
						</div>
					</nav>
				</div>
				<div class="sb-sidenav-menu-heading alert-danger shadow-sm my-1">
          <a href="/file/list" class="text-dark">Files</a>
        </div>
			</div>
		</div>
		<div class="sb-sidenav-footer shadow-sm">
			<div class="small">Logged in as:</div>
			<?=$_SESSION['username'];?>
		</div>
	</nav>
</div>
<?php else: ?>
<?php endif?>
<!-- Modal -->
<div class="modal left fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				Hello
			</div>
			<div class="modal-body">
			</div>
		</div>
	</div>
</div>

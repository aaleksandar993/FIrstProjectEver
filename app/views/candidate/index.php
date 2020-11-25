<?=$this->setSiteTitle("Candidate's");?>
<?=$this->start('head');?>
<?=$this->end('head');?>
<?=$this->start('body');?>

<div class="container-fluid">
    <div class="row">
        <div class="card mb-4 shadow-sm">
            <div class="card-header">
                <i class="fa fa-table mr-1"></i>
                Candidates
            </div>
            <div class="card-body p-1">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="candidateTable" width="100%" cellspacing="0">
                        <thead class="text-truncate">
                            <tr>
                                <th>&nbsp;</th>
                                <th>ID</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Country</th>
                                <th>Phone</th>
                                <th>Citizenship</th>
                                <th>Birthday</th>
                                <th>Gender</th>
                                <th>School</th>
                                <th>Language</th>
                                <th>Software</th>
                                <th>Added by</th>
                            </tr>
                        </thead>
                        <tbody class="text-truncate text-center">
                            <?php foreach ($candidates as $candidate): ?>

                            <tr>
                                <td></td>
                                <td><a href="/candidate/show/<?=$candidate->id?>"><?=$candidate->id?></a></td>
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
                                    <?='<span class=" h6 badge badge-info">' . @ucfirst($value) . '</span>'?>&nbsp;
                                    <?php endforeach?>
                                    </small>
                                    <br>
                                </td>
                                <td>
                                    <?php foreach (json_decode($candidate->language, true) as $key => $value): ?>
                                    <?='<span class=" h6 badge badge-info">' . @ucfirst($value) . '</span>'?>&nbsp;
                                    <?php endforeach?>
                                </td>
                                <td>
                                    <?php foreach (json_decode($candidate->software, true) as $key => $value): ?>
                                    <?='<span class=" h6 badge badge-info">' . @ucfirst($value) . '</span>'?>&nbsp;
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
<?=$this->end('body');?>
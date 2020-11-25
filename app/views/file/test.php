<?=$this->setSiteTitle("Files");?>
<?=$this->start('head');?>
<?=$this->end('head');?>
<?=$this->start('body');?>
<div class="container-fluid bg-white shadow-sm rounded" style="min-height:90vh;">
  <div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 m-2">
      <a class="btn btn-outline-success float-right text-success" data-toggle="modal" data-target=".addFile" role="button">Add File</a>
    </div>
    <div class="modal fade addFile" tabindex="-1" role="dialog" aria-labelledby="addFile" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded shadow-sm">
          <div class="modal-header">
            Add File
          </div>
          <div class="container-fluid pb-3 pt-3">
            <form action="/file/store" method="post" enctype="multipart/form-data">
              <input type="file" name="file" class="form-control form-control-file">
              <button class="btn btn-outline-success my-2" type="submit">Add</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php if (is_dir(ROOT.'public/storage/files/')): ?>
    <?php foreach (new DirectoryIterator(ROOT.'public/storage/files/') as $fileInfo): ?>
    <?php if ($fileInfo->isDot()): ?>
    <?php continue; ?>
    <?php else: ?>
    <div class="col-sm-2 col-md-2 col-lg-2">
      <div class="card alert-message alert-message-info shadow-sm">
        <div class="card-body px-0 pt-0">
          <h6 class="card-title text-truncate"><strong>Filename: </strong><?=@$fileInfo->getBasename() ?></h6>
          <span>
            <strong>File uploaded at:</strong>
          </span>
          <span class="card-subtitle mb-2 text-muted my-1"><?=date ("d.M.Y H:i", filectime('public'.DS.'storage'.DS.'files'.DS.$fileInfo->getBasename())) ?></span>
        </div>
        <div class="row">
          <div class="float-left m-0 p-0 mx-2">
            <a class="card-link btn btn-outline-info mt-2" role="button" href="/public/storage/files/<?=@$fileInfo->getFileName() ?>"
              target="_blank"
              >
              <small>Open File</small>
            </a>
          </div>
          <div class="float-left m-0 p-0 mx-2">
            <a class="card-link btn btn-outline-danger mt-2" role="button" href="/file/delete/<?=@$fileInfo->getFileName() ?>"
              >
              <small>Delete File</small>
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php endif ?>
    <?php endforeach ?>
    <?php endif ?>
  </div>
</div>
<?=$this->end('body');?>
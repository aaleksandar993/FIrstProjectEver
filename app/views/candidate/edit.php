<?=$this->setSiteTitle("Edit");?>
<?=$this->start('head');?>
<?=$this->end('head');?>
<?=$this->start('body');?>
<div class="row justify-content-center mt-2">
  <div class="col-md-10">
    <div class="card">
      <div class="card-header">
        <h5 class="title">Edit Profile</h5>
      </div>
      <div class="card-body">
        <form action="/candidate/update/" method="post">
          <div class="row">
            <div class="col-md-5 pr-md-1">
              <div class="form-group">
                <label>User id</label>
                <input type="text" class="form-control" disabled="" placeholder="Company" value="<?=session_id()?>">
                <input type="hidden" name="id" value="<?=$candidate->id?>">
              </div>
            </div>
            <div class="col-md-3 px-md-1">
              <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username" value="<?=$candidate->username?>">
              </div>
            </div>
            <div class="col-md-4 pl-md-1">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" value="<?=$candidate->email?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-md-1">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" placeholder="Company" value="<?=$candidate->first_name?>">
              </div>
            </div>
            <div class="col-md-6 pl-md-1">
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="<?=$candidate->last_name?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" placeholder="Home Address" value="<?=$candidate->address?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 pr-md-1">
              <div class="form-group">
                <label>City</label>
                <input type="text" class="form-control" name="city" placeholder="City" value="<?=$candidate->city?>">
              </div>
            </div>
            <div class="col-md-4 px-md-1">
              <div class="form-group">
                <label>Country</label>
                <input type="text" class="form-control" name="locality" placeholder="Country" value="<?=$candidate->locality?>">
              </div>
            </div>
            <div class="col-md-4 pl-md-1">
              <div class="form-group">
                <label>Postal Code</label>
                <input type="number" class="form-control" placeholder="ZIP Code">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label>About Me</label>
                <textarea class="form-control" placeholder="Here can be your description"></textarea>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <button type="submit" class="btn btn-fill btn-primary">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?=$this->end('body');?>
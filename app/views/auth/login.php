<?=$this->setSiteTitle('Login');?>
<?=$this->start('head');?>
<?=$this->end('head');?>
<?=$this->start('body');?>
<?=@$errors ?>
<div class="row m-5">
  <div class="container-fluid mb-5">
  <div class="row mb-1">
    <div class="col-md-10 col-sm-10 col-xs-12">
      <div class="card shadow-lg border-0 rounded-lg mt-5 mb-5">
        <div class="card-header">
          <h3 class="text-center font-weight-light">
            Login
          </h3>
         <?php if (isset($message)): ?>
            <h5 class="text-center font-weight-light text-danger">
            <?=@$message ?>
          </h5>
         <?php endif ?>
        </div>
        <div class="card-body">
          <form role="form" action="/auth/login" method="POST">
            <div class="form-group">
              <label class="small mb-1" for="inputEmailAddress">Email</label>
              <input class="form-control py-2 <?php if (isset($request->email)) {echo 'border-danger';}?>" id="loginEmail" type="email" name="email" placeholder="Enter email address" />
              <?php if (isset($request->email)): ?>
              <small class="text-danger">
              <?=@$request->email['required'];?>
              </small>
              <?php else: ?>
              <?php endif?>
            </div>
            <div class="form-group">
              <label class="small mb-1" for="inputPassword">Password</label>
              <input class="form-control py-2 <?php if (isset($request->email)) {echo 'border-danger';}?>" id="loginPassword" type="password" name="password" placeholder="Enter password" />
              <?php if (isset($request->password)): ?>
              <small class="text-danger">
              <?php foreach ($request->password as $password): ?>
              <?=@$password;?>
              <?php endforeach?>
              </small>
              <?php else: ?>
              <?php endif?>
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
              </div>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
              <a class="small" href="/ResetPassword">Forgot Password?</a>
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
        </div>
        <div class="card-footer text-center">
          <div class="small"><a href="/register">Need an account? Sign up!</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?=$this->end('body');?>
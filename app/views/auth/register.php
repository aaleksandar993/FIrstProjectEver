<?=$this->setSiteTitle('Register');?>
<?=$this->start('head');?>
<?=$this->end('head');?>
<?=$this->start('body');?>
<div class="container mb-4">
  <div class="row justify-content-center">
    <div class="col-lg-7">
      <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
        <div class="card-body">
          <form role="form" method="POST" accept-charset="utf-8" action="/auth/registerUser" onsubmit="registerUser.disabled = true; return true;">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="small mb-1" for="inputFirstName">First Name</label>
                  <input class="form-control py-4" id="firstName" type="text" name="firstName" placeholder="Enter first name" />
                  <?php if (isset($request->firstName)): ?>
                  <small class="text-danger">
                  <?=$request->firstName['required'];?>
                  </small>
                  <?php else: ?>
                  <?php endif?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="small mb-1" for="surname">Last Name</label>
                  <input class="form-control py-4" id="surname" name="surname" type="text" placeholder="Enter last name" />
                  <?php if (isset($request->surname)): ?>
                  <small class="text-danger">
                  <?=$request->surname['required']?>
                  </small>
                  <?php else: ?>
                  <?php endif?>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label class="small mb-1" for="inputEmailAddress">Email</label>
              <input class="form-control py-4" id="email" name="email" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
              <?php if (isset($request->email)): ?>
              <small class="text-danger">
              <?=$request->email['required']?>
              </small>
              <?php else: ?>
              <?php endif?>
            </div>
            <div class="form-group">
              <label class="small mb-1" for="inputUsername">Username</label>
              <input class="form-control py-4" id="username" type="text" name="username" placeholder="Username" />
              <?php if (isset($request->username)): ?>
              <small class="text-danger">
              <?=$request->username['required'];?>
              </small>
              <?php else: ?>
              <?php endif?>
            </div>
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-group">
                  <label class="small mb-1" for="inputPassword">Password</label>
                  <input class="form-control py-4" id="password" name="password" type="password" placeholder="Enter password" />
                  <?php if (isset($request->password)): ?>
                  <small class="text-danger">
                  <?=$request->password['required']?>
                  </small>
                  <?php else: ?>
                  <?php endif?>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                  <input class="form-control py-4" id="confirmPassword" name="confirmPassword" type="password" placeholder="Confirm password" />
                </div>
              </div>
            </div>
            <button type="submit" id="registerUser" class="btn btn-outline-primary">Register</button>
          </form>
        </div>
        <div class="card-footer text-center">
          <div class="small"><a href="/login">Have an account? Go to login</a></div>
        </div>
      </div>
    </div>
  </div>
</div>
<?=$this->end('body');?>
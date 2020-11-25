<?=$this->setSiteTitle("Add Job");?>
<?=$this->start('head');?>
<?=$this->end('head');?>
<?=$this->start('body');?>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-5">
      <div class="card shadow-lg border-0 rounded-lg mt-5">
        <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <label class="small mb-1" for="inputEmailAddress">Email</label>
              <input class="form-control py-4" id="inputEmailAddress" type="email" placeholder="Enter email address" />
            </div>
            <div class="form-group">
              <label class="small mb-1" for="inputPassword">Password</label>
              <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
            </div>
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
              </div>
            </div>
            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
              <a class="small" href="password.html">Forgot Password?</a>
              <a class="btn btn-primary" href="index.html">Login</a>
            </div>
          </form>
        </div>
        <div class="card-footer text-center">
          <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
        </div>
      </div>
    </div>
  </div>
</div>



<div class="container mb-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputFirstName">First Name</label>
                                                        <input class="form-control py-4" id="inputFirstName" type="text" placeholder="Enter first name" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputLastName">Last Name</label>
                                                        <input class="form-control py-4" id="inputLastName" type="text" placeholder="Enter last name" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" id="inputEmailAddress" type="email" aria-describedby="emailHelp" placeholder="Enter email address" />
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputPassword">Password</label>
                                                        <input class="form-control py-4" id="inputPassword" type="password" placeholder="Enter password" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Confirm Password</label>
                                                        <input class="form-control py-4" id="inputConfirmPassword" type="password" placeholder="Confirm password" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group mt-4 mb-0"><a class="btn btn-primary btn-block" href="login.html">Create Account</a></div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
<?=$this->end('body');?>
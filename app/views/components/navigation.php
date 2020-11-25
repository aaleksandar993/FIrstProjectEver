<?php if (isset($_SESSION['uid'])): ?>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow">
      <a href="" class="text-dark"><i class="fa fa-bars" aria-hidden="true" id="menu-toggle"></i></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
<!--           <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php if (isset($_SESSION['username'])): ?>
              <?=$_SESSION['username']?>
              <?php else: ?>

              <?php endif?>
            </a>
            <!-- Here's the magic. Add the .animate and .slide-in classes to your .dropdown-menu and you're all set! -->
            <div class="dropdown-menu dropdown-menu-right animate slideIn" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="/User/Profile">Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="/auth/logout">Logout</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
<?php else: ?>

<?php endif?>

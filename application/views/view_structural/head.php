<header class="main-header">
  <!-- Logo -->
  <a href="<?= base_url(); ?>assets/index2.html" class="logo">

    <span class="logo-mini"><b>GMF</b></span>

    <span class="logo-lg">
      <img src="<?= base_url() ?>assets/dist/img/icon/logo.png" style="width: auto; height: 40px;" alt="">
    </span>
  </a>

	<div id="loadings"></div>
  <nav class="navbar navbar-static-top">

    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="<?= base_url(); ?>assets/dist/img/icon/user_icon.jpg" class="user-image" alt="User Image">
            <span class="hidden-xs name_user1"></span>
          </a>
          <ul class="dropdown-menu">

            <li class="user-header">
              <img src="<?= base_url(); ?>assets/dist/img/icon/user_icon.jpg" class="img-circle" alt="User Image">

              <p class="fullname_user">
              </p>
              <p>
                <small class="rolelogin"></small>
              </p>
            </li>
			
            <li class="user-footer">
              <div class="pull-right">
                <a href="#" id="sign_out" class="btn btn-default btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>

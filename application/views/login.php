<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in || GMF - DESICION SUPPORT SYSTEM</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/animate/animate.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/dist/css/gmf.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/toastr/build/toastr.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box wow bounceInUp" data-wow-duration="1000ms">
  <div class="login-box-body" >
    <div class="login-logo">
      <img src="<?= base_url() ?>assets/dist/img/icon/logo.png" class="logo-image-login" />
      <a href="<?= base_url(); ?>assets/index2.html">
         <b>Report Redelivery</b>
      </a>
    </div>
    <p class="login-box-msg">Sign in to start your session</p>

    <form method="post"  id="form">
      <div class="form-group has-feedback">
        <input type="email" id="email" class="form-control" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" id="password" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">

        <div class="col-xs-4 pull-right">
          <button type="button" id="login_user" class="btn btn-primary btn-block btn-flat gmf-login">Sign In &nbsp; <i class="fa fa-arrow-circle-o-right"></i></button>
        </div>
      </div>
    </form>

  </div>
</div>

<script src="<?= base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/wow/wow.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script>
<script src="<?= base_url(); ?>assets/plugins/session/jquerysession.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/toastr/build/toastr.min.js"></script>
<script>

$(document).ready(function () {
	 var base_url = '<?php echo base_url(); ?>index.php/';
	  $('#login_user').click(function(e) {
			var user = $('#email').val();
			var pass = $('#password').val();
			$('#login_user').text('Proses..');
				// $.ajax({
				// 	url: base_url+ 'login/masuk',
				// 	method: 'post',
				// 	dataType: 'json',
				// 	data: {
				// 		'username': user,
				// 		'password': pass
				// 	},
				// 	success: function (data) {
				// 		if(data.status == "1"){
				// 			 localStorage.setItem("user_id", data.sess.user_id);
				// 			 localStorage.setItem("nama", data.sess.nama);
				// 			 localStorage.setItem("username", data.sess.username);
				// 			 localStorage.setItem("email", data.sess.email);
				// 			 localStorage.setItem("role", data.sess.role);
				// 			 localStorage.setItem("role_id", data.sess.roleid);
				// 			 localStorage.setItem("status", data.sess.status);
				// 			notif("success", "Berhasil Login");
				// 			window.location.href = base_url + 'layouts';
				// 		}else {
				// 			// alert(data.status)
				// 			var user = $('#email').val('');
				// 			var pass = $('#password').val('');
				// 			$('#login_user').attr('disabled', false);
				// 			$('#login_user').text('Sign In');
				// 			notif("error", "Username atau Password anda salah!!!");
				// 		}
				// 	}
				// });
      window.location.href = base_url + 'layouts';
		});
	});

	  function notif(type, msg)
    {
      toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "preventDuplicates": false,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
      }
      switch (type) {
        case "success":
          toastr.success(msg);
        break;
        case "error":
          toastr.error(msg)
        break;
        case "warning":
          toastr.warning(msg)
        break;
        default:
      }
    }

  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });

    wow = new WOW(
    {
      animateClass: 'animated',
      offset:       100,
      callback:     function(box) {
        null;
      }
    }
  );
  wow.init();

  });
</script>
</body>
</html>

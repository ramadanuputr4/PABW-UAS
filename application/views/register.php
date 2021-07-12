<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Project UAS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url().'admin/bower_components/bootstrap/dist/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'admin/bower_components/font-awesome/css/font-awesome.min.css'?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url().'admin/bower_components/Ionicons/css/ionicons.min.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'admin/dist/css/AdminLTE.min.css'?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url().'admin/plugins/iCheck/square/blue.css'?>">
  <link href="<?php echo base_url(); ?>vendors/pnotify/dist/pnotify.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="register.php"><b>Tampilan </b>Register</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="<?php echo base_url().'login/daftar'?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="fullname" placeholder="Full name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="email" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password2" placeholder="Retype password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <a href="<?php echo base_url().'login'?>" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url().'admin/bower_components/jquery/dist/jquery.min.js'?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url().'admin/bower_components/bootstrap/dist/js/bootstrap.min.js'?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url().'admin/plugins/iCheck/icheck.min.js'?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>


<script src="<?php echo base_url(); ?>vendors/pnotify/dist/pnotify.js"></script>
  <script src="<?php echo base_url(); ?>vendors/pnotify/dist/pnotify.buttons.js"></script>
  <script src="<?php echo base_url(); ?>vendors/pnotify/dist/pnotify.nonblock.js"></script>

 <script type="text/javascript">
    $(document).ready(function() {
      $(".preloader").fadeOut();

      <?php if ($this->session->flashdata('msg')) { ?>
        var msg = <?= json_encode($this->session->flashdata('msg')) ?>;
        if (msg) {
          new PNotify({
            title: 'Login',
            text: msg,
            type: 'error',
            buttons: {
              closer_hover: false
            },
            styling: 'bootstrap3'
          });
        }

      <?php }  ?>

      <?php if ($this->session->flashdata('sukses')) { ?>
        var sukses = <?= json_encode($this->session->flashdata('sukses')) ?>;
        if (sukses) {
          new PNotify({
            title: 'Login',
            text: sukses,
            type: 'success',
            buttons: {
              closer_hover: false
            },
            styling: 'bootstrap3'
          });
        }

      <?php }  ?>
    });
  </script>

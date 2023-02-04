<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>สมัครสมาชิก</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
      <a href="register.php"><b>สมัครสมาชิก</b></a>
    </div>

    <div class="card">
      <div class="card-body register-card-body">
      <p class="login-box-msg">ลงทะเบียนสมัครสมาชิกใหม่</p>

      <form action="addregister.php" method="post">
        <div class="input-group mb-3">
          <input type="text" name="Cusname" id="Cusname" class="form-control" placeholder="ชื่อ-นามสกุล">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="Cusaddress" id="Cusaddress" class="form-control" placeholder="ที่อยู่">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-address-book"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="Custel" name="Custel" id="Custel" class="form-control" placeholder="เบอร์โทร">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="Email" name="Email" id="Email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
		<div class="input-group mb-3">
          <input type="password" name="Password" id="Password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fa fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="Level" value="M" require>
              <label for="agreeTerms">
               ยืนยันการสมัครสมาชิก
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="submit" id="submit" class="btn btn-success btn-block">สมัคร</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
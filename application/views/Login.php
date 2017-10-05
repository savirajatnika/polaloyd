<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">

  
</head>

<body>
  <body>
  <div class="login">
    <div class="login-screen">
      <div class="app-title">
        <h1>Login</h1>
      </div>
<form method="post" action="<?php echo base_url()?>index.php/My_Controller/login_admin">
      <div class="login-form">
        <div class="control-group">
        <input type="text" class="login-field" name="username" placeholder="username" id="username">
        <label class="login-field-icon fui-user" for="login-name"></label>
        </div>

        <div class="control-group">
        <input type="password" class="login-field" name="password" placeholder="password" id="password">
        <label class="login-field-icon fui-lock" for="login-pass"></label>
        </div>

        <button type="submit" class="btn btn-primary btn-large btn-block">login</button>
      </div>
</form>
    </div>
  </div>
</body>
  
  
</body>
</html>

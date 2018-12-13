<?php
$var1 = "123";
if (isset($_POST['password'])) {
  
  $var2 = $_POST['password'];
    if (strcmp($var1, $var2)  == 0){
      header( 'Location: /EditHomepage.php' );
  } else {
    print_form($_POST['password']);
  }
} else {
  print_form($var1);
}

function print_form($password) {
echo '
<html>
<head>
  <link rel="stylesheet" href="styles_login.css">
  <title> LoginPage </title>
</head>
<body>
  <div id="outside">
      <div id="inside">
      <div class="form-style-2">
      <div class="form-style-2-heading">Login zum Bearbeiten der Daten von Bart Simpson</div>
        
          <form method="post" action="">
            <label for="password"><span>Passwort: <span class="required"></span></span>
            <input id="password" type="password" class="input-field" name="password" value="" /></label>
              <input type="submit" value="login">
        ';

        if ($password != "123"){
        echo "<p style=\"color:red; font-weight:bold;\">The password you entered is wrong! $password</p>";
        }

        echo'
          </form>
            
        </div>
      </div>
 </div>
 </body>
 </html>
 ';
  }

            ?>
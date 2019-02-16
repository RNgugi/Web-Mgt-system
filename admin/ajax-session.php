<?php
// INIT
session_start();
require __DIR__ . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "config.php";

// HANDLE AJAX REQUEST
switch ($_POST['req']) {
  /* [INVALID REQUEST] */
  default:
    die("ERR");
    break;

  /* [LOGIN] */
  case "in":
    // ALREADY SIGNED IN
    if (is_array($_SESSION['user'])) { die("OK"); }

    // VERIFY
    else {
      // INIT
      require PATH_LIB . "lib-users.php";
      $usrLib = new Users();

      // GET + CHECK PASSWORD
      $user = $usrLib->getByEmail($_POST['email']);
      $pass = is_array($user);
      if ($pass) {
        $pass = password_verify($_POST['password'], $user['user_password']);
      }
      if ($pass) {
        $_SESSION['user'] = [
          "id" => $user['user_id'],
          "name" => $user['user_name'],
          "email" => $user['user_email']
        ];
      }
      echo $pass ? "OK" : "ERR" ;
    }
    break;

  /* [LOGOUT] */
  case "out":
    unset($_SESSION['user']);
    die("OK");
    break;
}
?>
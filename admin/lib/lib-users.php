<?php
class Users {
  private $pdo = null;
  private $stmt = null;

  function __construct () {
  // __construct() : connect to the database
  // PARAM : DB_HOST, DB_CHARSET, DB_NAME, DB_USER, DB_PASSWORD

    try {
      $this->pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET, DB_USER, DB_PASSWORD, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES => false
        ]
      );
      return true;
    } catch (Exception $ex) {
      $this->CB->verbose(0, "DB", $ex->getMessage(), "", 1);
    }
  }

  function __destruct () {
  // __destruct() : close connection when done

    if ($this->stmt !== null) {
      $this->stmt = null;
    }
    if ($this->pdo !== null) {
      $this->pdo = null;
    }
  }

  function get ($id) {
  // get() : get user
  // PARAM $id : user ID

    $sql = "SELECT * FROM `users` WHERE `user_id`=?";
    $this->stmt = $this->pdo->prepare($sql);
    $this->stmt->execute([$id]);
    $entry = $this->stmt->fetchAll();
    return count($entry)==0 ? false : $entry[0] ;
  }

  function getByEmail ($email) {
  // get() : get user by email
  // PARAM $email : user email

    $sql = "SELECT * FROM `users` WHERE `user_email`=?";
    $this->stmt = $this->pdo->prepare($sql);
    $this->stmt->execute([$email]);
    $entry = $this->stmt->fetchAll();
    return count($entry)==0 ? false : $entry[0] ;
  }

  function getAll () {
  // getAll() : get all users

    $sql = "SELECT * FROM `users`";
    $this->stmt = $this->pdo->prepare($sql);
    $this->stmt->execute();
    $entry = $this->stmt->fetchAll();
    return count($entry)==0 ? false : $entry ;
  }

  function add ($email, $name, $password) {
  // add() : add a new user
  // PARAM $email - email
  //       $name - name
  //       $password - password (clear text)

    $sql = "INSERT INTO `users` (`user_email`, `user_name`, `user_password`) VALUES (?, ?, ?)";
    $cond = [$email, $name, password_hash($password, PASSWORD_DEFAULT)];
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($cond);
    } catch (Exception $ex) {
      return false;
    }
    return true;
  }

  function edit ($email, $name, $password, $id) {
  // edit() : update user
  // PARAM $email - email
  //       $name - name
  //       $password - password (clear text)
  //       $id - user ID

    $sql = "UPDATE `users` SET `user_email`=?, `user_name`=?, `user_password`=? WHERE `user_id`=?";
    $cond = [$email, $name, password_hash($password, PASSWORD_DEFAULT), $id];
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($cond);
    } catch (Exception $ex) {
      return false;
    }
    return true;
  }

  function del ($id) {
  // del() : delete user
  // PARAM $id - user ID

    $sql = "DELETE FROM `users` WHERE `user_id`=?";
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute([$id]);
    } catch (Exception $ex) {
      return false;
    }
    return true;
  }
}
?>
<?php
  $username = @$_POST['username'];
  $password = @$_POST['password'];

  if($username == "tanon") {
    if($password == 12345) {
      header("location: home");
    } else {
      echo "Username atau password salah";
    }
  } else {
    echo "Username atau password salah";
  }
?>
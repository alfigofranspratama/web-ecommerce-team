<?php
require __DIR__."/../asset/sistem/koneksi.php";
if (isset($_POST["register"])) {
  $username = htmlspecialchars($_POST["username"]);
  $password = htmlspecialchars($_POST["password"]);
  $email = htmlspecialchars($_POST["email"]);
  $now = date("D, d M Y h:i:s A");
  
  /* check user udah ada / blom */
  if ($db->countRows("SELECT * FROM tb_users WHERE email='$email'")) {
    echo "user dengan email $email sudah ada";
    exit;
  }
  $encrypt_pass = password_hash($password, PASSWORD_DEFAULT);
  if (
  $db->insert("tb_users", [
      null,
      $username,
      $email,
      $encrypt_pass,
      $now
    ])
  ) {
    // success registrasi
    echo $db->affectedRows() ." affected";
    exit;
  } else {
    // gagal registrasi
    
    
  }
  
}
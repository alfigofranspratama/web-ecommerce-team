<?php
include __DIR__."/../controller/register.php"
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registrasi</title>
  </head>
  <body>
    <form action="" method="post" accept-charset="utf-8">
      <label for="username">username</label>
      <input type="text" name="username" id="username" value="" />
      
      <label for="email">email</label>
      <input type="text" name="email" id="email" value="" />
      
      <label for="password">password</label>
      <input type="text" name="password" id="password" value="" />
      
      <button type="submit" name="register">gas</button>
    </form>
  </body>
</html>
<?php
session_start();
if (isset($_POST['submit'])) {
  $_SESSION['nama'] = htmlspecialchars($_POST['nama']);
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <meta http-equiv="X-UA-Compatible" content="IE=7,8,edge" />
    <title>Admin</title>
    <link
      rel="stylesheet"
      href="./assets/css/admin.css"
      type="text/css"
      media="all"
    />
  </head>
  <body>
    <section class="login">
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="container">
        <div class="atas">
          <div class="title">YDM</div>
          <div class="desc">Let's join with the other user</div>
        </div>
        <div class="input">
          <input
            type="nama"
            name="nama"
            id="nama"
            required
            placeholder=" "
            value=""
          />
          <label class="nama" for="nama">Nama</label>

          <!--<input
            type="password"
            name="pass"
            placeholder=" "
            id="pass"
            value=""
            required
          />
          <label for="pass">password</label>-->
        </div>
        <div class="button">
          <!--<input type="checkbox" name="remember" id="remember" />-->
          <!--<label for="remember">Remember me</label>-->
          <button type="submit" name="submit" class="btn-login">Let's do it!</button>
        </div>
      </form>
    </section>
  </body>
</html>

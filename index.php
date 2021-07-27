<?php
session_start();
if(empty($_SESSION['nama'])) {
  header('location: login.php');
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
    <meta name="description" content="Let's chatting with others people!" />
    <meta name="keywoard" content="webchat, chating" />
    <meta name="author" content="Yadi" />
    <link
      rel="stylesheet"
      href="./assets/css/webfont.css"
      type="text/css"
      media="all"
    />

    <!--CSS-->
    <link
      rel="stylesheet"
      href="./assets/css/index.css"
      type="text/css"
      media="all"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />

    <!--JAVASCRIPT-->
    <script defer src="./assets/js/index.js"></script>

    <title>YDM Chat!</title>
  </head>
  <body>
    <header>
      <div class="login">
        <span class="icon" data-icon="&#xe056;"></span>
      </div>
      <div class="title">
        <h2 class="title-text">Hallo</h2>
        <p class="title-desc">Selamat datang di YDM web application</p>
      </div>
      <div class="opsi">
        <input type="checkbox" name="opsi" id="opsi" />
        <label for="opsi" class="tu"> </label>
        <ul>
          <li>
            <a href="#" class="icon" data-icon="&#xe035;">Create</a>
          </li>
          <li><a href="#" class="icon" data-icon="6">Join</a></li>
          <li><a href="./logout.php" class="icon" data-icon="=">Log out</a></li>
        </ul>
      </div>
    </header>

    <!-- Chat Section-->
    <section id="chat">
      <main>
      </main>
    </section>

    <section id="input">
      <footer>
        <textarea
          type="text"
          name="pesan"
          id="pesan"
          placeholder="Masukan pesan..."
          value=""
        ></textarea>
        <button type="submit" class="kirim">
          <i class="icon" data-icon="&"> </i>
        </button>
      </footer>
    </section>
    <script charset="utf-8">
      const phpSession = "<?=$_SESSION['nama']?>" || '';
    </script>
  </body>
</html>

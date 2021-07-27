<?php

session_start();
session_unset();
if(session_destroy()) {
  echo 'Log Out sukses!';
}

?>

<script>
  window.location.href = "login.php";
</script>

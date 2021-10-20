<?php

session_start();
session_unset();
session_destroy();
$_SESSION =[];

echo'<script>window.location="pageLogin.php"</script>';
exit;

?>
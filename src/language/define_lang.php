<?php
session_start();

$allowed_lang = array('islenska', 'english');

if (isset($_GET['lang']) === true && in_array($_GET['lang'], $allowed_lang) === true) {
    $_SESSION['lang'] = $_GET['lang'];
}
//Default language
else if (isset($_SESSION['lang']) === false) {
    $_SESSION['lang'] = 'islenska';
}

//include 'english.php';
echo("<script>console.log('Session núna er :  ".$_SESSION['lang']." ');</script>");
include  $_SESSION['lang'] . '.php';
?>
<?php
session_start();
if (isset($_POST['lang'])) {
    $lang = $_POST['lang'];
    if ($lang == "en") {
        $_SESSION['lang'] = "en";
    } elseif ($lang == "ru") {
        $_SESSION['lang'] = "ru";
    } elseif ($lang == "uz") {
        $_SESSION['lang'] = "uz";
    }
    header("Location: dashboard.php");
}
// test
?>
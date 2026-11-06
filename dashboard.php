<?php
session_start();
if ($_SESSION['lang'] == "uz") {
    echo "xush kelibsiz";
}
if ($_SESSION['lang'] == "ru") {
    echo "Dobro pojalovat";
}
if ($_SESSION['lang'] == "en") {
    echo "Welcome";
}

//test
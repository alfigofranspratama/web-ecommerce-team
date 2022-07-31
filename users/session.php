<?php
if ($_SESSION['login'] == FALSE) {
    header("location: login.php");
}
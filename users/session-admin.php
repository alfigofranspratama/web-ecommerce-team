<?php
if ($_SESSION['level'] != 'admin') {
    header("location: login.php");
}
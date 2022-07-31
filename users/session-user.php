<?php
if ($_SESSION['level'] != 'user') {
    header("location: login.php");
}
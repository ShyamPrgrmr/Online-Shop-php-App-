<?php

session_start();
$_SESSION['shopname'] = "Error : Unreachable";
$_SESSION['shusername'] = "Error : Unreachable";
session_unset();
?>
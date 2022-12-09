<?php
session_start();
include('authorization.php');
if (isset($_SESSION[''])){
    header ("Location: profile.php");
} else {
    header ("Location: autho.php");
}
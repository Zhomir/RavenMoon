<?php

include('config.php');
if(isset($_GET['exit']))
{
    session_destroy();
    header ("Location: autho.php");
    exit;
}

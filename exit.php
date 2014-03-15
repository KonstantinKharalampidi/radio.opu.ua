<?php
if(isset($_POST['exit']))
{
    setcookie('id', '', time() - 3600);
    setcookie('hash', '', time() - 3600);
    header('Location: login.php'); exit();
}


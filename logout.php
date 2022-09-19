<?php

session_start();
require('function.php');

unset($_SESSION['USER_LOGIN']);
unset($_SESSION['USER_ID']);
unset($_SESSION['USER_EMAIL']);

redirect('login.php');

?>
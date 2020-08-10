<?php
session_start();
 function regenerate() {
    $_SESSION['code'] = uniqid();
    $_SESSION['code_time'] = time();
}

if (empty($_SESSION['code']) || time() - $_SESSION['code_time'] > 3600)
    //if there's no code, or the code has expired
    regenerate();

 

?>
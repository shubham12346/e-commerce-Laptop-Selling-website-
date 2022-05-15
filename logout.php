<?php
session_start();
if((isset($_SESSION["user"]) )&& (isset($_SESSION["userEmail"])))
{
    session_destroy();
    echo "<script>
    alert('user successfully log out ');
    window.location.href='login.php';
    </script>";
    
}

?>
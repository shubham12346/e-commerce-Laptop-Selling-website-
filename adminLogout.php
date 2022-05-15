<?php
if(($_SESSION["Aduser"])=="")
{
    session_destroy();
    echo " <script>
        alert('User successfully Logged Out ');
        window.location.href='adminlogin.php';
    </script>";
   
}

?>
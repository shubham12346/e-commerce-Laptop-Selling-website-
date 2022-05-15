<?php

function OpenCon()
{
    $conn = new mysqli("localhost", "root", "", "lsw") or die('Connection failed %s\n'.$conn->error);
    
        return $conn;
    }

function Closecon($conn)
{
    mysqli_close($conn);
}


?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  
        $conn3 = mysqli_connect("localhost", "root", "", "lsw");
        if (!($conn3)) {
            die('Connection Failed ' . mysqli_connect_errno());
        } else {
            $sql3 = "UPDATE `productn` SET `name`='$_POST[pname]',`os`='$_POST[pos]',`internal`='$_POST[pinternal]',`description`='$_POST[pdesc]',`price`='$_POST[pprice]' WHERE `pid` = '$_POST[productId]'";

            if (mysqli_query($conn3, $sql3)) {
                echo " <script>
                      alert('Product successfully updated ');

                      </script>";
            } else {
                echo " <script>
                      alert('Failed  updation ');
                      
                      </script>";
                echo "Error: " . $sql3 . "<br>" . mysqli_error($conn3);
            }
        }
    }
?>
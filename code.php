<?php
session_start();
require_once "connection.php";
$message = "";
$role = "";
if(isset($_POST["loginform"]))
{
    $username =  $_POST["username"];
    $password =  $_POST["password"];

    $query = "SELECT * FROM tblUser WHERE Username= '$username' AND Password='$password '";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            if($role = $row["Role"] == "Admin")
            {
                $_SESSION['LoginUser'] = $row["Username"];
                header('Location: payroll.php');

            }
            else{
                $_SESSION['LoginUser'] = $row["Username"];
                header('Location: user.php');
            }
        }
    }
    else{
        header('Location: loginform.php');
    }
}
echo $role;
?>
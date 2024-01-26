<?php
$host="localhost";
$user_name="root";
$password="";
$db="asset_management_system";
$connect=mysqli_connect($host,$user_name,$password,$db);
if(isset($_POST['send']))
{
    $user_password=$_POST['password'];
    $user_email=$_POST['email'];
    $select=mysqli_query($connect,"SELECT email , password FROM user_tbl WHERE email='$user_email' AND password='$user_password'");
    if($select)
    {
        header("location:./registration/asset_registration.html");
    }
    else
    {
        echo"incorrect password and username";
    }
    
}
?>
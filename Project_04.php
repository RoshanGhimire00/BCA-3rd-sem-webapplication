<?php
$uname="admin";
$pwd="admin";

session_start();
if (isset($_SESSION['uname'])){
    echo"<h1>Welcome ".$_SESSION['uname']."</h1>";
    
}
{
    if($_POST['uname']==$uname && $_POST['pwd']==$pwd){
        $_SESSION['uname']=$uname;
        echo"<script>location.href='Project_04.php'</script>";
    }
    else{
        echo"<script> alert('username or password incorrect!')</script>";
    }
}
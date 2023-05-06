<?php
session_start();

$un ="admin";
$pss="pass";

$un1="johnpaul";
$pss1="amurao";
function redirect($pagename){
    header("Location: http://localhost/cc106/".$pagename.".php");
}

if(isset($_POST['login'])){
    
    if($un == $_POST['email'] and $pss == $_POST['pswd']){

        redirect("dashboard");
        $_SESSION['name']="Juan Luna";
    
    }elseif($un1 == $_POST['email'] and $pss1 == $_POST['pswd']){
        redirect("gallery");
        $_SESSION['name']="Pedro Hill";
    }else
        redirect("index");
    }

   
?>
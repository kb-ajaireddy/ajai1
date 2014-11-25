<?php
session_start();

if(!isset( $_POST['email'], $_POST['password']))
{
$message = 'Please enter a valid username and password';
}

if(isset($_POST['email'], $_POST['password'])){
$email=$_POST['email'];
$pass=$_POST['password'];
  $username = 'root';
  $password = '';
   $conn = new PDO("mysql:host=192.168.1.133;port=3306;dbname=salary;",$username,$password);
   $stmt ='SELECT email,password FROM users WHERE email="'.$email.'" AND password ="'.$pass.'"';
   $stmt1=$conn->query($stmt);
echo $stmt;
   if($row = $stmt1->fetch((PDO::FETCH_ASSOC))){

               header("Location: emp_1.html");
           }

    }

?>

<?php 

include 'connect.php';

if(isset($_POST['join-btn'])){//nama tombol
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password=md5($password);

     $checkUsername="SELECT * From users where username='$username'";
     $result=$conn->query($checkUsername);
     if($result->num_rows>0){
        echo "Username Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users(username,email,password)
                       VALUES ('$username','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: "); //lokasi halaman
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

if(isset($_POST['signIn'])){
   $username=$_POST['username'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM users WHERE username='$username' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['username']=$row['username'];
    header("Location: homepage.php"); //lokasi halaman home
    exit();
   }
   else{
    echo "Not Found, Incorrect Email or Password";
   }

}
?>
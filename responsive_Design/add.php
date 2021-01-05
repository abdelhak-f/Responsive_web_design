<?php

$host="localhost";
$user="root";
$pw="";
$ndb="responsive";
$conn=mysqli_connect($host,$user,$pw,$ndb,3306);
 if($conn){
  //echo"connected";
 }
 else{
 // echo"no connected";
}



if(isset($_POST['submit'])){
    $nom=($_POST['nom']);
    $email=($_POST['email']);
    $message=($_POST['message']);



$sql = "INSERT INTO contact (nom, email, message)
VALUES ('$nom', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
 echo "<div class='alert alert-success color-dark'> <script> New record created successfully </script></div>";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
header("location:index.html");
}

$conn->close();

?>
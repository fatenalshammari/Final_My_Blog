<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

  </head>
  <body>



<?php
$servername = "localhost";
$username = "root";
$password = "";
$db ="contact_blog";


// Create connection
$conn = new mysqli($servername, $username, $password, $db);



if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST['submit'])) {

  $name = $_POST['name'];
  $email= $_POST['email1'];
  $subject= $_POST['subject'];

  $query = "INSERT INTO contact (name, email, subject)
            VALUES ('$name', '$email', '$subject')";

  $result = mysqli_query($conn,$query);

    $msg ='';
    if($result == true){

   $msg ='<div class="container"><div class="alert alert-success">Send successfully</div></div>';
   echo $msg;


   //header("location: Task4.php" . $msg);


    }else{

    $msg='<div class="container"><div class="alert alert-danger">
    Sorry there was an error sending your message. Please try again later</div></div>';
    echo $msg;

     }

}

//header("location: Task4.php");

    $conn->close();

 ?>



 <div class="container-f">
  <div class="col-md-6 col-md-offset-3">
    <form class="" action="Task4.php" method="post">
      <input type="submit" name="return" value="Return to the home page" class="btn btn-default btn-lg btn-block">
    </form>

  </div>


 </div>




   </body>
 </html>

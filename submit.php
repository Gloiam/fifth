<!doctype html >
<html lang ="en">
<head> <title>FEED BACK</title></head>
<body>
    <h1> DETAILS</h1>
    <?php
      include 'dbconn.php';
      $name = $_POST['name'];
      $password =$_POST['password'];
      $email =$_POST['email'];
      $contact =$_POST['contact'];
      $nation =$_POST['nation'];
      $gender =$_POST['gender'];
      $sql =" INSERT INTO feedback(name, password, email, contact, nation, gender ) VALUES ('$name','$password','$email','$contact','$nation','$gender')";

      if (mysqli_query($conn,$sql)){
        echo "new sign up added";
      } else {
        echo "error";
      }
  
   ?>
   <br>
   <a href ="view.php">VIEW SIGNUPS</a>
    
</body>







    </html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Info</title>
</head>
<body>
   <h4 algin='center'> LogIN Form </h4>
    <form method="post" align="center" enctype="multipart/form-data">
        UserName: <input type="text" name="username"> <br>
        Password: <input type="password" name="pass"><br>
        
        <input type="submit" name="save">
        <br>
        Session Detail : <a href='showData.php'> Session Detail</a>;
    </form>
<?php
   if($_POST)
   {
   if($_POST['username']=="xyz@gmail.com" && $_POST['pass']=="12345#@")
   {
         //Also Setting Up the cOOKIES
         //thiss Cookie will saved for 1Min
         setcookie('name','Aditya Singh',time()+(60),'/showData');
         setcookie('reg','12345',time()+(60),'/showData');
         setcookie('address','Delhi'+time()+(60),'showData');
         
         session_start();
         echo "<h4 align='center'> Successfully Logged In </h4>";
         $_SESSION['name']="Aditya Singh";
         $_SESSION['reg']="123456";
         $_SESSION['pass']=$_POST['pass'];
         $_SESSION['address']="Delhi";

         

         echo "<h4 align='center'> Session Variable Set !!</h4>";
         
   }
   else
   {
       echo "<h4 align='center'> Wrong Credentials </h4>";
   }
}
   
  
?>

</body>
</html>
<?php
 session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Details</title>
</head>
<body>
    <a href="sessDel.php"<h5 align="left"> LogOut <h5> </a>
    <?php
       if(isset($_SESSION['pass']))
       {
           echo "<h4 align='center'>  Session Details <br>
                    Name - ".$_SESSION['name']."<br>"
                    ."Age -" .$_SESSION['reg']."<br>"
                    ."Address -".$_SESSION['address'].
                 "</h4>";

           echo " <h1 align='center'> Show Data By Cookie <br>
                     Name - ". $_COOKIE['name']."
                ";      
       }
       else
       {
           echo "<h1 align='center'> Not Authrized </h1>";
       }

    ?>
</body>
</html>
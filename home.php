<?php

@include 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style2.css">
</head>
<body>
<section class="header">
    <nav>
           <div class="link" id="navlink">
            <i class="fa fa-window-close" onclick="hidemenu()"></i>

               <ul>
                  <li> <a href = "home.php">Home</a></li>
                  <li> <a href="index.php">View products</a></li>
                </ul>
    </nav>    
</section>
<<div class= "textbox">
         <h1>Welcome to Jersey  Pasal</h1>
         <p>Complete E-shopping Portal, A new wave of e-commerce has begun</p><br><br>

        <a href="index.php" class = "register-btn"> Buy Here! </a>
     </div>
</body>
</html>
<?php

 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Geef uw bericht in:</title>
     <link rel="stylesheet" href="../../views/css/style.css">
   </head>
   <body>
     <div class="container">
       <form class="form" action="../../index.php?action=add" method="post">
         <div class="header">
           <h3>Geef uw bericht in:</h3>
         </div>
         <label for="name">Naam:</label>
        <input type="text" name="name" value="enter your name">
        <label for="email">Email:</label>
        <input type="email" name="email" value="enter your email">
        <label for="bericht">Bericht:</label>
        <textarea name="bericht" rows="8" cols="80"></textarea><br>
        <input class="subbut"type="submit" name="submit" value="Toevoegen">
         </form>
       </div>
     </div>
   </body>
 </html>

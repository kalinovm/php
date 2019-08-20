<html>
 <head>
 <title>Pozadinska boja</title>
 </head>
 <?php
 $today = date("w");
 $bgcolor = array(
 "#BA55D3", "#0000FF", "#00FFFF", "#228B22",
 "#FFA500", "#FFFF00", "#FF0000"
 );
 ?>
 <body bgcolor="<?php print("$bgcolor[$today]"); ?>">
 <br>Ovo je boja za danasnji dan.
 </body>
</html>
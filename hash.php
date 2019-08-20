<?php

 $tekst ="Koriscenje HASH funkcija u PHP jeziku.";
 
 $md5 = md5($tekst);
 $sha1 = sha1($tekst);
 $crypt = crypt($tekst);
 
 echo "$md5 <br />";
 echo "$sha1 <br />";
 echo "$crypt <br />";
 
 ?>
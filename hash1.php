<?php
 $tekst ="Koriscenje HASH funkcija u PHP jeziku.";
echo md5($tekst);

if (md5($tekst) == "9bfd7ad266493aa936506b040813a040")
  {
  echo "<br> Hash za string pomoću MD5 funkcije";
  }
 
?>
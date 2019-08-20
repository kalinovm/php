<?php
 $tekst ="Koriscenje HASH funkcija u PHP jeziku.";
echo md5($tekst);

if (md5($tekst))
  {
  echo "<br>Hash za string pomoću MD5 funkcije";
  }
?>
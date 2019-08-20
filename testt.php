<?php
$xml = new SimpleXMLElement($xmlTekst);
$r = $xml->xpath('/izdanja/knjiga');
<izdanja>
     <knjiga id="01" isbn="1234567">
          <naslov>Petrova knjiga</naslov>
          <autor>Petar Petrovic</autor>
     </knjiga>
     <knjiga id="02" isbn="5555555">
          <naslov>Jovanova knjiga</naslov>
          <autor>Jovan Jovanovic</autor>
     </knjiga>
</izdanja>
?>
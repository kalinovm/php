
<?php
/* Naziv skripta: mailGraphic
* Opis: Salje graficki fajl kao prilog poruke
*/
 $filename = “logo.gif”;
 $fh = fopen($filename,”rb”);
 $fileContent = fread($fh,filesize($filename));
 fclose($fh);
 $mess = chunk_split(base64_encode($fileContent));
 $to = “ivan.ivanovic@barn.edu.yu”;
 $subj = “Slanje slike u prilogu”;
 $headers = “Content-disposition: attachment;
  filename=logo.gif\n ”;
 $headers .= “Content-type: image/gif ”;
 $headers .=”Content-Transfer-Encoding: base64\n ”;
 if(!$mailsend = mail($to,$subj,$mess,$headers))
  {
   echo “Poruka nije poslata\n ”;
 }
 else
 {
  echo “Poruka je poslata\n ”;
 }
?>

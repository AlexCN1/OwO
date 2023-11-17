<?php
   $respuestas = array(
       "Si",
       "No",
       "Tal vez",
       "Porque el peduano es gei",
       "Mi huevo",
       "Chupalo"
       );
   $random = array_rand($respuestas);
   echo $respuestas[$random];
?>
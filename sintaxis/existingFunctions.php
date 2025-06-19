<?php

echo strtoupper("González") . "<br>"; // Convierte todo a mayúsculas
echo strtolower("González") . "<br>"; // Convierte todo a minúsculas
echo mb_strtoupper("González") . "<br>"; // Convierte todo a mayúsculas (multibyte)

echo strlen("González") . "<br>"; // Longitud de la cadena. "á" lo tomará como 2 caracteres
echo mb_strlen("González") . "<br>"; // Longitud de la cadena (multibyte)

echo rand(1, 10) . "<br>"; // Genera un número aleatorio entre 1 y 10
echo time() . "<br>"; // Devuelve la hora actual en segundos desde 1970
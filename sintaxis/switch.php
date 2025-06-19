<?php

$age = 29;

switch ($age) {
    case ($age <= 18):
        echo "Eres menor de edad.";
        break;
    case ($age >= 18 && $age < 60):
        echo "Eres adulto.";
        break;
    case ($age >= 60):
        echo "Eres un adulto mayor.";
        break;
    default:
        echo "Edad no válida.";
}

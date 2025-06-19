<?php

$age = -2;

if ($age >= 18) {
    echo "Eres mayor de edad.";
} elseif ($age > 0 && $age < 60) {
    echo "Eres menor de edad.";
} elseif ($age >= 60) {
    echo "Eres un adulto mayor.";
} else {
    echo "Edad no válida.";
}

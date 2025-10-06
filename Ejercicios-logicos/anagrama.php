<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anagrama</title>
</head>
<body>

<div>
    <h1>#2 ¿Es un anagrama?</h1>
    <p>Ejercicio 2 de <a href="https://retosdeprogramacion.com/ejercicios/">https://retosdeprogramacion.com/ejercicios/</a></p>
    <h3>Escribe una función que reciba dos palabras (String) y retorne verdadero o falso (Bool) según sean o no anagramas.</h3>
    <ul>
        <li>Un Anagrama consiste en formar una palabra reordenando TODAS las letras de otra palabra inicial.</li>
        <li>NO hace falta comprobar que ambas palabras existan.</li>
        <li>Dos palabras exactamente iguales no son anagrama.</li>
    </ul>
</div>

<?php
    // Logica
    function Anagrama($palabra1, $palabra2){
        $palabra1 = mb_strtolower($palabra1);
        $palabra2 = mb_strtolower($palabra2);

        if($palabra1 == $palabra2) {
            return "Las palabras son exactamente igual.";
        }

        $palabra1Array = str_split($palabra1);
        $palabra2Array = str_split($palabra2);

        sort($palabra1Array);
        sort($palabra2Array);

        if($palabra1Array === $palabra2Array) {
            return "Es Anagrama";
        } else {
            return "No es Anagrama";
        }
    }

    echo Anagrama("Amor", "Roma") . "<br>";
    echo Anagrama("Amiga", "Magia") . "<br>";
    echo Anagrama("Hola", "Mundo") . "<br>";
    echo Anagrama("Amor", "Amor");
?>

    
</body>
</html>
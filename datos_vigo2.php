<?php
$response = file_get_contents("https://datos.vigo.org/data/turismo/poi-lugares-gl.json");
$data = json_decode($response);
$lugaresInteres = [];
foreach ($data as $lugar) {
    if(!array_key_exists($lugar->tipo, $lugaresInteres)){
        $lugaresInteres[$lugar->tipo] = 1;
    }else{
        $lugaresInteres[$lugar->tipo] += 1;
    }
}

foreach ($lugaresInteres as $tipo => $valor) {
    echo $tipo . ": " . $valor . "<br>";
}

?>

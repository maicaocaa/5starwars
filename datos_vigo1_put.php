<?php
    $response = file_get_contents("https://datos.vigo.org/data/trafico/treal_congestion.json");
    $data = json_decode($response);

    $peorRuta = $data[0];

    foreach ($data as $ruta) {
        $array = explode(" ", $ruta->tiempo);
        $arrayPeorRuta = explode(" ", $peorRuta->tiempo);
        if((int)$array[0] > (int)$arrayPeorRuta[0]) {
            $peorRuta = $ruta;
        }else if((int)$array[0] == (int)$arrayPeorRuta[0]){
            if((int)$array[2] > $arrayPeorRuta[2]){
                $peorRuta = $ruta;
            }
        }
    }
    echo "La peor ruta es: " . $peorRuta->nombre_tramo . " con un tiempo de " .
    $peorRuta->tiempo . "\n";

    file_put_contents("log.log", $peorRuta->nombre_tramo .
        " ---- tiempo: " . $peorRuta->tiempo . "\n", FILE_APPEND);
?>
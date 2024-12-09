<?php
$baseUrl = "https://www.swapi.tech/api/people";
$page = 1;
$limit = 10;
$totalPages = 1; // Inicializamos con un valor que permita al menos una iteración
$uids = [];

while ($page <= $totalPages) {
    $url = "$baseUrl?page=$page&limit=$limit";
    $response = file_get_contents($url);

    if ($response === false) {
        die("Error al realizar la solicitud a la API en la página $page");
    }

    $data = json_decode($response, true);

    if ($page === 1 && isset($data['total_pages'])) {
        $totalPages = $data['total_pages'];
    }

    if (isset($data['results']) && is_array($data['results'])) {
        foreach ($data['results'] as $character) {
            $uids[] = $character['uid'];
        }
    }

    $page++;
}

echo "Todos los UID de los personajes:<br>";
foreach ($uids as $uid) {
    echo $uid . "<br>";
}

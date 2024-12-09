<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:beige ; font-family:helvetica; color:darkblue;">
    <?php
        $array = array(
            "Titulo" => "Desarrollador backend php",
            "Descripcion" => "Desarrollo de API y páginas web en php con Laravel",
            "Sector" => "informatica",
            "Salario" => "35000",
            "Experiencia" => "2 años",
            "Modalidad" => "Teletrabajo",
            "Incorporación" => "Inmediata",
        );
    ?>
    
        <?php foreach ($array as $key => $value) {
             echo "<h2>$key: $value</h2>";
        }; ?>
   
    
    <section style="display:flex; justify-content:center;" >
        <hgroup style="width:75%; border: 1px solid black; padding: 8px; ">
            <?php
                echo "1. Crea un script que muestre \"Hola Mundo\"" ."<br>";

                    echo "Hola Mundo";
                    echo "<br><br>";

                echo "2. Crea un script que muestre un número aleatorio cada vez que se carga la página."."<br>";
                    echo "Tu número aleatorio del 1 al 10 es : " . rand(0,10) ;
                    echo "<br>";

                    $randNum =  rand(0,100);
                    echo "Tu número aleatorio del 1 al 100 es : $randNum" ;
                    echo "<br><br>";
                
                echo  "3. Crea un script que, dado un valor numérico que estará almacenado en una variable llamada \$valor devuelva ese valor multiplicado por 2."."<br>";
                    $valor = $randNum;
                    echo "El valor de \$valor es $valor y multiplicado por dos es: ". $valor*2;
                    echo "<br><br>";

                echo "4. Crea un script que tenga una constante (variable que no puede cambiar de valor a lo largo del tiempo) muestra por pantalla el siguiente mensaje: \"El valor de la constante es: valor\"" ."<br>";
                    const VALOR_FIJO = 1.5;
                    echo"El valor de la constante VALOR_FIJO es: ". VALOR_FIJO;
                    echo "<br><br>";


                echo "Crea el siguiente array en php.\$nums = array(5,3,8,1,10,2,3)"."<br>";
                    $nums=[5,3,8,1,10,2,3]; 

                echo "5. Devuelve por pantalla el numero de elementos  que contiene el array."."<br>";
                    echo "El array recien creado contiene". count($nums) ." elementos"."<br>";
                    echo "<br><br>";

                echo "6. Recorre el array y multiplica cada elemento por 3"."<br>";
                    echo "Los valores almacenados en el array y multiplicados por 3 son los siguientes:[ ";
                        foreach ($nums as $n){
                            echo $n*3 ." ";
                        };
                    echo "]";
                    echo "<br><br>";

                echo "7. Recorre el array y devuelve por pantalla unicamente los elementos múltiplos de 2"."<br>";
                    echo "Los valores pares son: ";
                        foreach ($nums as $n){
                            if ($n%2 ==0){
                                echo $n ." ";
                            };
                        };
                    echo "<br><br>";

                echo "8. Recorre el array y devuelve la suma de todos los elementos"."<br>";
                    $sum=0;
                    foreach ($nums as $n){
                        $sum+=$n;
                    }
                    echo "El valor de la suma de todos los elementos del array es: $sum";
                    echo "<br><br>";


                echo "9. Ahora recorre el array mostrado su clave y valor. ¿Que claves tienen?"."<br>";
                ?>
                <p style="font-style: italic; color:brown; text-align:center;"><?php
                    foreach ($nums as $key => $value ){
                        echo "<br> clave $key = valor $value ";
                    };
                    echo "<br><br>";
                ?></p>


                <?php echo "10. Crea una página web con html donde aparezca (\"Oferta de trabajo\" como H1).";?>
        </hgroup>
    </section>
</body>
</html>
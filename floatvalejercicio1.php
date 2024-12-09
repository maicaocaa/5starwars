<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section>
        <p>Ejercicio 1: "1- Crea un script php que muestre en un documento HTML 5, para una altura de cm dada, el número de pulgadas y de pies que le corresponda (Algoritmo 5.2 del documento)"</p>
            <div style="border:1px black solid; width:30%; padding:2em; display:flex; flex-direction:column; text-align:center;">
                <p>1 pulgada = 2.54 cm</p>
                <p>1 pie = 12 pulgadas</p>
            </div>
        <form method="POST">
            <label for="high">Escribe la atura en centimetros</label><br>
            <input type="number" id="high" name="high" step="0.1" required><br>
            <input type="submit" value="Enviar">
        </form> 
        <h1>
            <?php 
                $high = floatval($_POST["high"]);
                $inch= $high / 2.54;
                $feets=$inch/12;
                echo "Altura en pulgadas es $inch pulgadas". "<br>";
                echo "Altura en pulgadas es $feets pies" . "<br>";
            ?>
        </h1>
    </section>
       

    <section>
        <p>2- Crea un script php que muestre en un documento HTML 5, para un valor x dado,la salida de f(x) del algoritmo 5.3 del documento de ejemplo.</p>
         
        <form method="POST">
            <label for="num2">Inserta un valor x para obtener f(x):</label><br>
            <input type="number" id="num2" name="num2" step="0.1" required><br>
            <input type="submit" value="Enviar">
        </form> 
        <h1>
            <?php 
                $f=0;
                $num2 = floatval($_POST["num2"]);
                if ($num2>0){
                    $f=$num2**2;
                };
                echo "El valor de f es $f". "<br>"
            ?>
        </h1>
    </section>

   
    <section>
        <p>3- Crea un script php que muestre en un documento HTML 5, para unos valores a, b, c dados, calcule siguiendo el algoritmo 5.4 del documento..</p>
         
        <form method="POST">
            <label for="num3">Inserta un valor x para obtener f(x):</label><br>
            <input type="number" id="num3" name="num_a" step="0.1" required><br>
            <input type="number" id="num3" name="num_b" step="0.1" required><br>
            <input type="number" id="num3" name="num_c" step="0.1" required><br>
            <input type="submit" value="Enviar">
        </form> 
        <h1>
            <?php 
                $d=0;
                $a = floatval($_POST["num_a"]);
                $b = floatval($_POST["num_b"]);
                $c = floatval($_POST["num_c"]);
                $d=$b**2 - 4*$a*$c;
                $aa=2*$a;

                if ($d>=0){  // aqui no puede ser igual a 0 sino da error de division a 0
                    $dd=sqrt($d);
                    $x1=(-$b-$dd)/$aa;
                    $x2=(-$b-$dd)/$aa;
                    echo "La ecuacion tiene raices reales: $x1, $x2 <br>"; 
                } else {
                    $dd=sqrt(-$d);
                    $Re=-$b/$aa;
                    $Im= $dd/$aa;
                    echo "La ecuacion tiene raices complejas conjugadas: <br>"; 
                    echo "La parte real: $Re <br>";
                    echo "La parte imaginaria: $Im <br>";
                };
               
            ?>
        </h1>
    </section>

</body>
</html>











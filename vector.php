<?php 

if(isset($_POST["Calcular"])){

    $valor1 = $_POST["txtvalor1"];
    $valor2 = $_POST["txtvalor2"];
    $valor3 = $_POST["txtvalor3"];
    $valor4 = $_POST["txtvalor4"];
    $valor5 = $_POST["txtvalor5"];


    if($valor1 == "" || $valor2 =="" || $valor3 == "" || $valor4 == "" || $valor5 == ""){
       echo "Debes deligenciar todos los campos";
       exit;
    }

    $numero1 = $valor1;
    $numero2 = $valor2;
    $numero3 = $valor3;
    $numero4 = $valor4;
    $numero5 = $valor5;

}

$vector1 = array($numero1,$numero2, $numero3, $numero4, $numero5);
echo "suma del primer vector: " . array_sum($vector1);


?>
    

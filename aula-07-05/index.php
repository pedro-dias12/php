
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<h2>ARRAY:OFFICNA EXPRICITA</h2>
<pre>
<?php

$alunos=array("pedro", "cristiana", "gleysson", "mateus","yasmin","gabriel", "luciana", "eugenia");

echo"[for]:  ";

for($a=0; $a<8; $a++){
    
    echo "<br>No indice $a o nome do aluno é $alunos[$a] ";
    
}

echo "<br><br> Numero de elementos: " . count($alunos);

?>
</pre>


<h2>numeros </h2>

<pre>
    <?php
    $var=array(1 , 2, 3, 4,5 ,6 ,7, 8);
    echo"[for]:  ";

for($a=0; $a<8; $a++){
    
    echo"<br>$var[$a]";
}
    
    
    
    
    
    ?>
</pre>


<h1> Array: Definição Explicita </h1>
    <pre>

        <?php
            $var2 = ["Lipe" => 19, "Lunna" => 26, "Gabribaldo" => 8, "Eduardo" =>39];
            echo "<br>[foreach]: ";
            foreach ($var2 as $chave => $valor){
                echo "<br>Na posição: $chave";
                echo "<br>O valor é: $valor";
            }
            echo "<br><br> Numero de elementos: " . count($var);
        ?>

    </pre>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays com laços</title>
    <link rel="stylesheet" href="../aula-07-05/styles.css">
</head>
<body>

  <h1> Arrays - Laços</h1>

  <h2> Array: Definição Explícita (sem chave):</h2>

  <pre>
    <?php
       $var = array(1,2,3,4);
       
       echo "impressão 1 por 1";
       echo $var[0];
       echo $var[1];
       echo $var[2];
       echo $var[3];
    ?>
  </pre>

  <h2>Impressão com for:</h2>

  <pre>
    <?php
    
     for($a=0; $a<4; $a++){
        echo "$var[$a]";
     }
    
    ?>
  </pre>

  <h2>Impressão com foreach:</h2>

  <pre>
    <?php
    $var1 = array("Pedro", "Caio", "Pedro", "Roufran
    ");
    
     foreach($var1 as $dados){
      echo $dados;
      echo "<br>";
     }
    
    ?>
  </pre>

  <h2>print-r-> mostra o que tem armazenado no array</h2>
  <pre>
    <?php
     print_r($var1);
     
    
    ?>
  </pre>

  <h2>array multidimensional; definição explicita</h2>
  <pre>
    <?php
   $alunos= array("maria" =>
                            array("endereco" => "rua chila 1046",
                            "bairro"  => "rebouças"),
                  "joão"=>
                            array("endereco" => "rua ipe 1543",
                            "bairro"  => "choica"),
                  "zeca"=>     
                            array("endereco" => "rua uta",
                            "bairro"  => "montes claros"),
                   "pedro"=>
                            array("endereco" => "rua chila 090",
                            "bairro"  => "espinosa"));
  print_r($alunos["maria"]);
                          
   
     
    
    ?>
  </pre>
</body>
</html>
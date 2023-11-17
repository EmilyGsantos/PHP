<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Ranking</title>
    <link rel="stylesheet" type="text/css" href="styles.css"/>
</head>
<body>
    <h1>Ranking de Cadastros das Farmácias </h1>

    <h2>Numeros de cadastros:</h2>
    <button>Farmacia A
        <?php  
          echo "O numero total de cadastros é de:", $farA;
        ?>
    </button>
    <br>

    <button>Farmacia B 
        <?php
          echo "O numero total de cadastros desta farmácia é de:", $farmaB;
         ?>
    </button>

    <button>Farmacia C
        <?php
          echo "O numero total de cadastros desta farmácia é de:", $farmaC;
         ?>
    </button>

    <button>Farmacia D
        <?php
          echo "O numero total de cadastros desta farmácia é de:", $farmaD;
         ?>
    </button>
    
     
    

    
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Página de Cadastro</title>
</head>
<body>

    <h1>Página de Cadastro</h1>

    <?php  include 'cadastro.php';  ?>
    <div class="farmA">
        <form method="POST">
            
            <label>Nome Completo: </label>
            <input type="text" id="tNome" name="tNome"/>
            <br><br>

            <label>RG: --------------- </label>
            <input type="text" id="tRG" name="tRG"/>
            <br><br>
            
            <label>Telefone: --------- </label>
            <input type="text" id="tTel" name="tTel"/>
            <br><br>

            <label>Possui Plano de saúde?</label>
            <input type="hidden" id="tPlano" name="tPlano"/>
            <br><br>
            <input type="checkbox" name="opcao" id="sim"><label>Sim</label>
            <br>
            <input type="checkbox" name="opcao" id="nao"><label>Não</label>
            <br><br>
            <?php
                if($_POST ['nao']){
                echo "Plano de saude não selecionado";
            }else{
                echo"plano de sáude selecionado";
            }
            ?>

            <label>Uso da Farmácia Popular:</label>
            <input type="hidden" id="tEscolha" name="tEscolha"/>
            <br></br>
            <input type="checkbox" name="opcaof" id="1"><label>Sim</label>
            <br>
            <input type="checkbox" name="opcaof" id="2"><label>Não</label>
            <br><br>
            
            <button class="bnt-farmA"> Cadastrar 
            <?php     
                session_start();
                //Passe o dado para o construtor
                $_SESSION['tRG'] = $_POST['tRG'];
                $_SESSION['tNome'] = $_POST['tNome'];
                $_SESSION['tTel'] = $_POST['tTel'];
                $_SESSION['tPlano'] = $_POST['tPlano'];
                $_SESSION['tEscolha'] = $_POST['tEscolha'];

                /*função para coletar o maior numero de cadastro*/ 
                public function numbercad(){
                    for($i= 0, $i<100, $i++1){
                      $farA = session_start();
                    }
                }
            ?>
            </button>
            <br>
            <button >
            <a class="bnt-voltar" href="index.php">Voltar</a>
            </button>
     </div>    
    </form>

</body>
</html>
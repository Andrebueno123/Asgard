<?php


    /* isto e um comentario */

    if(isset ($_GET[ "bt_nome"])){
        $nome = $_GET ["bt_nome"];
        $nota1 = $_GET ["bt_nota1"];
        $nota2 = $_GET ["bt_nota2"];
        $nota3 = $_GET ["bt_nota3"];
        $nota4 = $_GET ["bt_nota4"];

    }



?>



<!DOCTYPE html>
<html lang="pr-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo notas media</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel= "stylesheet" href= " meu_estilo.css">
</head>
<body>

    <div class="container text-center">
    <h1>Exemplo -Notas Media</h1>
    </div>

    <div class="container">
        <form action="" method= "get">
            <label for="">Nome do Aluno</label>
            <input class="form-control" type= "text" name= "bt_nome">
            <label for="">Nota 1</label>
            <input class="form-control" type= "text" name= "bt_nota1">
            <label for="">nota 2</label>
            <input class="form-control"  type= "text" name= "bt_nota2">
            <label for="">nota 3</label>
            <input class="form-control"  type= "text" name= "bt_nota3">
            <label for="">nota 4</label>
            <input  class="form-control" type= "text" name= "bt_nota4">

            <input  class="btn btn-success" type="submit">
            <input  class="btn btn-danger"  type="reset">
            
        </form>

        <?php
            if(isset ($nome)){
                /*
                echo "<hr>";
                echo $nome;
                echo $nota1;
                echo $nota2;
                echo $nota3;
                echo $nota4;
                echo"<hr>";
                 */


                $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

                if($media>=7){

                    echo "<p>";
                    echo "O aluno " . $nome . "esta APROVADO com a media " . $media;
                    echo "</p>";
                }elseif($media<=5){
                    echo "<p>";  
                    echo "O aluno " . $nome . "esta de RECUPERAÇAO com a media " . $media;
                    echo "</p>";
                    }else{
                    echo "<p>";
                    echo "O aluno " . $nome . "esta REPROVADO com a media " . $media;
                    echo "</p>";
                 }   
                    



            }
            
                
                


        ?>
    </div>


</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/favicon-32x32.png" type="image/png">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP: Marvel x DC</title>
</head>
<body>
    <main>
        <?php
            if(!empty($_POST['nome_heroi'])){
                $nome_heroi = strtolower($_POST['nome_heroi']);
                $universo = strtolower($_POST['universo']);
                if($universo=="dc"){
                    switch($nome_heroi){
                        case "batman":
                            $img_heroi = "dc/batman.jpg";
                            break;
                        case "mulher-maravilha":
                            $img_heroi = $universo . "dc/mulher-maravilha.jpg";
                            break;
                        default:
                            $img_heroi = "Herói inválido.";
                            break;
                    }
                }else if($universo=="marvel"){
                    switch($nome_heroi){
                        case "wolverine":
                            $img_heroi = "marvel/wolverine.jpg";
                            break;
                        case "vampira":
                            $img_heroi = $universo . "marvel/vampira.jpg";
                            break;
                        default:
                            $img_heroi = "Herói inválido.";
                            break;
                    }
                }

                ?>
                <section class="heroi"><?php mostrarHeroi($universo, $img_heroi); ?></section>
                <?php
            }

            function mostrarHeroi($universo, $img_heroi){
                if($img_heroi=="Herói inválido."){
                    msgInvalido($img_heroi);
                }else{
                    ?>
                    <figure>
                        <img src="imgs/<?php echo $img_heroi; ?>" ><br>
                    </figure>
                    <a href="index.php" class="btn">Voltar</a>
                    <?php
                }
            }

            function msgInvalido($img_heroi){
                ?>
                <h2>:(</h2><br>
                <h3><?php echo $img_heroi; ?></h3><br>
                <a href="index.php" class="btn">Voltar</a>
                <?php
            }
        ?>

    </main>
</body>
</html>
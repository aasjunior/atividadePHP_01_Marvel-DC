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
            if(!empty($_POST['nome_heroi'])){//Verifica se 
                $nome_heroi = strtolower($_POST['nome_heroi']);
                $universo = strtolower($_POST['universo']);
                if($universo=="dc"){
                    switch($nome_heroi){
                        case "batman":
                            $img_heroi = "dc/batman.jpg";
                            break;
                        case "mulher-maravilha":
                            $img_heroi = "dc/mulher-maravilha.jpg";
                            break;
                        case "rorschach":
                            $img_heroi = "dc/rorschach.jpg";
                            break;
                        case "supergirl":
                            $img_heroi = "dc/supergirl.jpg";
                            break;
                        case "superman":
                            $img_heroi = "dc/superman.jpg";
                            break;
                        default:
                            $img_heroi = "Herói inválido.";
                            break;
                    }
                }else if($universo=="marvel"){
                    switch($nome_heroi){
                        case "homem-aranha":
                            $img_heroi = "marvel/homem-aranha.jpg";
                            break;
                        case "homem de ferro":
                            $img_heroi = "marvel/homem-de-ferro.jpg";
                            break;
                        case "motoqueiro-fantasma":
                            $img_heroi = "marvel/motoqueiro-fantasma.jpg";
                            break;
                        case "vampira":
                            $img_heroi = "marvel/vampira.jpg";
                            break;
                        case "wolverine":
                            $img_heroi = "marvel/wolverine.jpg";
                            break;
                        default:
                            $img_heroi = "Herói inválido.";
                            break;
                    }
                }

                ?>
                <section class="heroi"><?php mostrarHeroi($universo, $img_heroi); ?></section>
                <?php
            }else{
                $universo = $_POST['universo'];
                $img_heroi = "Digite um herói!!!";
                ?>
                <section class="heroi"><?php msgInvalido($universo, $img_heroi); ?></section>
                <?php
            }

            function mostrarHeroi($universo, $img_heroi){
                if($img_heroi=="Herói inválido."){
                    msgInvalido($universo, $img_heroi);
                }else{
                    ?>
                    <figure>
                        <img src="imgs/<?php echo $img_heroi; ?>" ><br>
                    </figure>
                    <a href="index.php" class="btn">Voltar</a>
                    <?php
                }
            }

            function msgInvalido($universo, $img_heroi){
                ?>
                <form action="universo.php" method="post">
                    <input type="hidden" name="universo" value="<?php echo $universo;?>">    
                    <h2>:(</h2><br>
                    <h3><?php echo $img_heroi; ?></h3><br>
                    <input type="submit" value="Voltar" class="btn">
                </form>
                <?php
            }
        ?>

    </main>
</body>
</html>
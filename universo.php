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
            if(!empty($_POST['universo'])){//verifica a radio box foi selecionada
                $universo = $_POST['universo'];
                ?>
                <section class="box">
                    <h1>Digite um herói do universo <?php echo $universo; ?>: </h1>
                    <form action="heroi.php" method="post">
                        <input type="hidden" name="universo" value="<?php echo $universo; ?>" >
                        <input type="text" name="nome_heroi" class="ipt-txt"><br>
                        <input type="submit" class="btn">
                    </form>
                </section>
                <?php
            }else{
                ?>
                <section class="box">
                    <h2>:(</h2><br>
                    <h3>Selecione o Universo!!!</h3><br>
                    <a href="index.php" class="btn">Voltar</a>
                </section>
                <?php
            }
        ?>
    </main>
</body>
</html>
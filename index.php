<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="imgs/favicon-32x32.png" type="image/png">
    <title>PHP: Marvel x DC</title>
</head>
<body>
    <main>
        <section>
            <h1>Escolha um universo (Marvel ou DC):</h1>
            <form action="universo.php" method="post">
                <input type="radio" class="ipt-rdo" name="universo" value="Marvel">Marvel<br>
                <input type="radio" class="ipt-rdo" name="universo" value="DC">DC<br>
                <input type="submit" value="Confirmar" class="btn">
            </form>
        </section>
    </main>
</body>
</html>
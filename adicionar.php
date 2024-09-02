
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="styleadicionar.css">
</head>

<body>

<header>
    <a href="formulario.php" class="back-button">&#10094;</a>
</header>

<div class="form-container">
    <strong><u><p>CADASTRO</u></p></strong>
    <form class="border1" method="POST" action="adicionar_action.php">
        <label for="name">
            <h2>Nome:</h2>
            <input type="text" id="name" name="name" placeholder="Digite seu nome completo" required/>
        </label>

        <label for="email">
            <h2>E-mail:</h2>
            <input type="email" id="email" name="email" placeholder="Digite seu e-mail" required/>
        </label>

        <strong><h2><input type="submit" value="ADICIONAR"/></h2></strong>
    </form>
</div>

</body>
</html>
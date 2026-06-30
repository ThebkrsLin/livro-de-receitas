<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../_css/new_recipe_style.css">
    <title>Nova Receita</title>
</head>
<body>
    <div class="container">
        <div class="save-content">
            <form method="post" action="save_recipe.php">
                Nome da Receita:<br> <input type='text' name='name' required='text'/><br>
                Ingredientes:<br> <textarea name='ingredients'></textarea><br>
                Modo de Preparo:<br> <textarea name='preparation' required='text'></textarea><br>
                Tempo de Preparo:<br> <textarea name="prep-time" min="1" required="text"></textarea><br>
                <button type="submit" class="save">Salvar Receita</button><br>
            </form>
            <form action="javascript:history.go(-1)">
                <button type="submit" class="return">Voltar</button>
            </form>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/new_recipe_style.css">
    <title>Nova Receita</title>
</head>
<body>
    <div>
        <form method="post" action="save_recipe.php">
            <fieldset>
                Nome da Receita:<br> <input type='text' name='name' required='text'/><br>
                Ingredientes:<br> <textarea name='ingredients'></textarea><br>
                Modo de Preparo:<br> <textarea name='preparation' required='text'></textarea><br>
                Tempo de Preparo:<br> <input type="number" name="prep-time" min="1" required="number"/><br>
                <input type="submit" value="Salvar Receita"/><br> 
            </fieldset><br>
            <a href="javascript:history.go(-1)">Volar</a>
        </form>
    </div>
</body>
</html>
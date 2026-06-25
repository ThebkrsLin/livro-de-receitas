<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css">
    <title>Salvando Receita</title>
</head>
<body>
    <div>
        <?php 
        $json = file_get_contents("recipes.json");
        $recipes = json_decode($json, true);
        $ingredients = $_POST["ingredients"];
        $name = $_POST["name"];
        $preparation = $_POST["preparation"];
        $recipes["receitas"][$name] = [
            "ingredientes" => $ingredients,
            "preparo" => $preparation
        ];
        $saveRecipe = json_encode($recipes, JSON_PRETTY_PRINT);
        file_put_contents("recipes.json", $saveRecipe);
        echo"<h1>Receita Salva com Sucesso!!!</h1>"
        ?><br>
        <a href="index.php">Voltar</a>
    </div>
</body>
</html>
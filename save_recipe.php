<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css">
    <title>Salvando Receita</title>
</head>
<body>
    <div class="container">
        <?php 
        $json = file_get_contents("recipes.json");
        $recipes = json_decode($json, true);
        $date = date("d/m/Y");
        $preptime = $_POST["prep-time"];
        $ingredients = $_POST["ingredients"];
        $name = $_POST["name"];
        $preparation = $_POST["preparation"];
        $recipes["receitas"][$name] = [
            "ingredientes" => $ingredients,
            "preparo" => $preparation,
            "data" => $date,
            "tempopreparo" => $preptime
        ];
        $saveRecipe = json_encode($recipes, JSON_PRETTY_PRINT);
        file_put_contents("recipes.json", $saveRecipe, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        echo"<h1 class='saved'>Receita Salva com Sucesso!!!</h1>"
        ?><br>
        <form action="index.php" >
            <button type="submit" class="new_recipe_button">Voltar</button>
        </form>
    </div>
</body>
</html>
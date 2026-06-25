<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/style.css">
    <title>Receita</title>
</head>
<body>
    <div>
        <?php
        $json = file_get_contents("recipes.json");
        $recipes = json_decode($json);
        $keys = get_object_vars($recipes->receitas);
        $choose = $_POST["choose"];
        $recipe = $recipes->receitas->$choose;
        $ingredients = $recipe->ingredientes;
        $preparation = $recipe->preparo;

        echo "<h1>$choose</h1>";
        echo "<h2>Ingredientes:</h2>";
        echo "<p>".nl2br(htmlspecialchars($ingredients))."</p>";
        echo "<h2>Modo de Preparo</h2>";
        echo "<p>".nl2br(htmlspecialchars($preparation))."</p>";
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </div>
</body>
</html>
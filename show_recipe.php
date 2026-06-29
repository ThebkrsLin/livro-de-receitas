<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="_css/show_recipe_style.css">
    <title><?php $choose = $_POST["choose"];
    echo "$choose";
    ?></title>
    <style>
        h1{
            content: <?php echo "$choose";?>;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><?php echo $choose;?></h1>
        <div class="content">
            <?php
            $json = file_get_contents("recipes.json");
            $recipes = json_decode($json);
            $keys = get_object_vars($recipes->receitas);
            $recipe = $recipes->receitas->$choose;
            $ingredients = $recipe->ingredientes;
            $preparation = $recipe->preparo;
            $preptime = $recipe->tempopreparo;
            $date = $recipe->data;
            echo "<h2>Ingredientes</h2>";
            echo "<p>".nl2br(htmlspecialchars($ingredients))."</p>";
            echo "<h2>Modo de Preparo</h2>";
            echo "<p>".nl2br(htmlspecialchars($preparation))."</p>";
            ?>
            <h2>Finalizção</h2>
            <footer><?php
            echo "<strong>Tempo de Preparo:</strong> ".nl2br(htmlspecialchars($preptime))."<br>";
            echo "<strong>Data:</strong> ".nl2br(htmlspecialchars($date))."";
            ?></footer>
            <br>
            <form action="javascript:history.go(-1)">
                <button type="submit" class="return">Voltar</button>
            </form>
        </div>
    </div>
</body>
</html>
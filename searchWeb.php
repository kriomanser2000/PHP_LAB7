<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Пошук продукту</h1>
<form method="post" action="">
    <label for="search">Введіть назву продукту:</label>
    <input type="text" id="search" name="search" required>
    <button type="submit" name="submit">Пошук</button>
</form>
<?php
function searchByName($name)
{
    $products = [
        ['id' => 1, 'name' => 'Яблуко'],
        ['id' => 2, 'name' => 'Банан'],
        ['id' => 3, 'name' => 'Груша']
    ];
    foreach ($products as $product)
    {
        if (stripos($product['name'], $name) !== false)
        {
            return $product;
        }
    }
    return null;
}
if (isset($_POST['submit']))
{
    $searchName = $_POST['search'];
    $result = searchByName($searchName);
    if ($result)
    {
        echo "<h2>Знайдено продукт:</h2>";
        echo "<p>ID: " . htmlspecialchars($result['id']) . "</p>";
        echo "<p>Назва: " . htmlspecialchars($result['name']) . "</p>";
    }
    else
    {
        echo "<h2>Продукт не знайдено.</h2>";
    }
}
?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" Content="ru">
    <title>Family</title>
</head>
<body>
<hr>
</hr>

<?php

try
{
    $db = new PDO('mysql:host=localhost;dbname=Trees','root','123');
}
catch(PDOException $e) {
    echo $e->getMessage();
}
$name = $_POST['name'];
if ($name != ''){

    try {
        $query = $db->prepare("INSERT INTO tree_family (name) VALUES ('$name')");
        $query->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    {
        echo '<b>Запись создана</b>';
//print_r($result);
    }

}
?>

<form method="post" action="#">
    <p><b>Создание Семейства дерева</b></p>
    <p>
        Название <input type="text" name="name"><br>
    </p>
    <p><input type="submit"></p>
</form>
<a href="/family/index.php">Назад</a>
<hr>
</hr>
</body>



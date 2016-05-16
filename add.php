<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Trees</title>
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
$type = $_POST['type'];
$family = $_POST['family'];
$name = $_POST['name'];
$age = $_POST['age'];
$kind = $_POST['kind'];
$height = $_POST['height'];
if ($type != ''){

    try {
        $query = $db->prepare("INSERT INTO trees1(type, family, name, age, kind, height) VALUES ('$type', '$family', '$name', '$age', '$kind','$height')");
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
    <p><b>Создание дерева</b></p>
    <p>
        Тип <input type="text" name="type"><br>
        Род <input type="text" name="family"><br>
        Название <input type="text" name="name"><br>
        Возраст <input type="text" name="age"><br>
        Вид <input type="text" name="kind"><br>
        Высота <input type="text" name="height"><br>
    </p>
    <p><input type="submit"></p>
</form>
<a href="index.php">Назад</a>
<a href="Update.php">Update</a>
<hr>
</hr>
</body>



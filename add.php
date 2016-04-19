<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Trees</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: deneb
 * Date: 19.04.16
 * Time: 20:20
 */
if (isset($_POST['name'])) {
    try {
        $db = new PDO('mysql:host=localhost;dbname=derevja', 'root', '12041972');
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $type = $_POST['type'];
    $family = $_POST['family'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $kind = $_POST['kind'];
    $height = $_POST['height'];
    try {
        $query = $db->prepare("INSERT INTO derevja(type, family, name, age, kind, height) VALUES ('$type', '$family', '$name', '$age', '$kind','$height')");
        $query->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }


    echo '<b>Запись создана</b>';

//print_r($result);
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
</body>
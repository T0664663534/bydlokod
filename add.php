<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" Content="ru">
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
$type = $_POST['type_id'];
$family = $_POST['family_id'];
$name = $_POST['name'];
$age = $_POST['age'];
$kind = $_POST['kind_id'];
$height = $_POST['height'];
if ($type != ''){

    try {
        $query = $db->prepare("INSERT INTO trees(type_id, family_id, name, age, kind_id, height) VALUES ('$type', '$family', '$name', '$age', '$kind','$height')");
        $query->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    {
        echo '<b>Запись создана</b>';
//print_r($result);
    }

}
$query = $db->prepare("SELECT id, name FROM tree_family");
$query->execute();
$families = $query->fetchAll();
$query = $db->prepare("SELECT id, name FROM tree_kind");
$query->execute();
$kinds = $query->fetchAll();
$query = $db->prepare("SELECT id, name FROM tree_type");
$query->execute();
$types = $query->fetchAll();
?>

<form method="post" action="#">
    <p><b>Создание дерева</b></p>
    <p>
        Тип <select name="type">
            <?php
            foreach ($types as $type ){
                echo '<option value="'.$type['id'].'">'.$type['name'].'</option>';
            }
            ?>
            </select><br>
        Род <select name="family">
            <?php
            foreach ($families as $family ){
                echo '<option value="'.$family['id'].'">'.$family['name'].'</option>';
            }
            ?>
        </select><br>
        Название <input type="text" name="name"><br>

        Возраст <input type="text" name="age"><br>
        Вид <select name="kind">
            <?php
            foreach ($kinds as $kind ){
                echo '<option value="'.$kind['id'].'">'.$kind['name'].'</option>';
            }
            ?>
        </select><br>
        Высота <input type="text" name="height"><br>
    </p>
    <p><input type="submit"></p>
</form>
<a href="index.php">Назад</a>
<a href="Update.php">Update</a>
<hr>
</hr>
</body>



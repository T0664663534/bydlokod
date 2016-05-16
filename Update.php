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
$treeId = $_GET['id'];
$type = $_POST['type'];
$family = $_POST['family'];
$name = $_POST['name'];
$age = $_POST['age'];
$kind = $_POST['kind'];
$height = $_POST['height'];
$query = $db->prepare("SELECT * FROM trees1 WHERE id = ".$treeId);
$query->execute();
$tree = $query->fetch();
if ($type != ''){

    try {
        $query = $db->prepare("UPDATE `trees1` SET `type` = '$type',`family` = '$family',`name`=  '$name',`age`=  '$age',`kind`=  '$kind',`height`= '$height' WHERE id = ".$treeId);
        $query->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    {
        echo '<b>Запись изменена</b>';
//print_r($result);
    }

}
?>

<form method="post" action="#">
    <p><b>Update дерева</b></p>
    <p>
        Тип <input type="text" name="type" value="<?php echo $tree['type']; ?>"><br>
        Род <input type="text" name="family" value="<?php echo $tree['family']; ?>"><br>
        Название <input type="text" name="name" value="<?php echo $tree['name']; ?>"><br>
        Возраст <input type="text" name="age"value="<?php echo $tree['age']; ?>"><br>
        Вид <input type="text" name="kind"value="<?php echo $tree['kind']; ?>"><br>
        Высота <input type="text" name="height"value="<?php echo $tree['height']; ?>"><br>
    </p>
    <p><input type="submit"></p>
</form>
<a href="delete.php?id=<?php echo $treeId; ?>">Удалить</a>
<a href="add.php">Добавить</a>
<a href="index.php">Назад</a>
<hr>
</hr>
</body>
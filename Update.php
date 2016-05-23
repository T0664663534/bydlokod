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
$query = $db->prepare("SELECT * FROM trees WHERE id = ".$treeId);
$query->execute();
$tree = $query->fetch();
if ($type != ''){

    try {
        $query = $db->prepare("UPDATE `trees` SET `type_id` = '$type',`family_id` = '$family',`name`=  '$name',`age`=  '$age',`kind_id`=  '$kind',`height`= '$height' WHERE id = ".$treeId);
        $query->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    {
        echo '<b>Запись изменена</b>';
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
    <p><b>Update дерева</b></p>
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
        Название <input type="text" name="name" value="<?php echo $tree['name']; ?>"><br>
        Возраст <input type="text" name="age"value="<?php echo $tree['age']; ?>"><br>
        Вид <select name="kind">
            <?php
            foreach ($kinds as $kind ){
                echo '<option value="'.$kind['id'].'">'.$kind['name'].'</option>';
            }
            ?>
        </select><br>
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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kind</title>
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
$kindId = $_GET['id'];
$name = $_POST['name'];
$query = $db->prepare("SELECT * FROM tree_kind WHERE id = ".$kindId);
$query->execute();
$kind = $query->fetch();
if ($name != ''){

    try {
        $query = $db->prepare("UPDATE tree_kind SET name = '$name' WHERE id = ".$kindId);
        $query->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    echo "UPDATE 'tree_kind' SET 'name'=  '$name' WHERE id = ".$kindId;
    {
        echo '<b>Запись изменена</b>';
//print_r($result);
    }

}

?>

<form method="post" action="#">
    <p><b>Update Семейства дерева</b></p>
    <p>

        Название <input type="text" name="name" value="<?php echo $family['name']; ?>"><br>

    </p>
    <p><input type="submit"></p>
</form>
<a href="/family/add.php">Добавить</a>
<a href="/family/index.php">Назад</a>
<hr>
</hr>
</body>
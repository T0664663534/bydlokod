<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
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
$familyId = $_GET['id'];
$name = $_POST['name'];
$query = $db->prepare("SELECT * FROM tree_family WHERE id = ".$familyId);
$query->execute();
$family = $query->fetch();
if ($name != ''){

    try {
        $query = $db->prepare("UPDATE tree_family SET name = '$name' WHERE id = ".$familyId);
        $query->execute();
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    echo "UPDATE 'tree_family' SET 'name'=  '$name' WHERE id = ".$familyId;
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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Trees</title>
</head>
<body>
<hr>
</hr>
<table>
    <tr>
        <th>type</th>
        <th>family</th>
        <th>name</th>
        <th>age</th>
        <th>kind</th>
        <th>height</th>
        <th></th>

    </tr>
<?php
/**
 * Created by PhpStorm.
 * User: deneb
 * Date: 19.04.16
 * Time: 20:20
 */
try {
    $db = new PDO('mysql:host=localhost;dbname=Trees', 'root', '123');
} catch (PDOException $e) {
    echo $e->getMessage();
}
$treeId = intval($_GET['ID']);
$query = $db->prepare("SELECT * FROM trees1");
$query->execute();
$trees = $query->fetchAll();
foreach ($trees as $tree){
    echo '<tr><td>'.$tree['type'].'</td>
            <td>'.$tree['family'].'</td>
            <td>'.$tree['name'].'</td>
            <td>'.$tree['age'].'</td>
            <td>'.$tree['kind'].'</td>
            <td>'.$tree['height'].'</td>
            <td><a href="show.php?id='.$tree['id'].'">Показать</a><a href="Update.php?id='.$tree['id'].'">Update</a></td>
            </tr>';
}
?>
</table>
<a href="add.php">Добавить</a>
<hr>
</hr>
</body>

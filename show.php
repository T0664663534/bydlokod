<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Trees</title>
</head>
<body>
<table>
    <tr>
        <th>Id</th>
        <th>Название</th>
        <th>family</th>
        <th>age</th>
        <th>kind</th>
        <th>height</th>

    </tr>
<?php
/**
 * Created by PhpStorm.
 * User: deneb
 * Date: 19.04.16
 * Time: 20:20
 */
try {
    $db = new PDO('mysql:host=localhost;dbname=derevja', 'root', '12041972');
} catch (PDOException $e) {
    echo $e->getMessage();
}
$treeId = intval($_GET['id']);
$query = $db->prepare("SELECT * FROM derevja WHERE id = ".$treeId);
$query->execute();
$tree = $query->fetch();

    echo '<tr><td>'.$tree['id'].'</td>
            <td>'.$tree['name'].'</td>
            <td>'.$tree['family'].'</td>
            <td>'.$tree['age'].'</td>
            <td>'.$tree['kind'].'</td>
            <td>'.$tree['height'].'</td>
            </tr>';

//print_r($result);
?>

</table>
<a href="add.php">Добавить</a>
</body>
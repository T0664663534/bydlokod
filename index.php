<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Family</title>
</head>
<body>
<hr>
</hr>
<table>
    <tr>
        <th>id</th>
        <th>name</th>
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
$query = $db->prepare("SELECT
	id,
	name
FROM tree_family
");
$query->execute();
$families = $query->fetchAll(PDO::FETCH_ASSOC);


foreach ($families as $family){
    echo '<tr><td>'.$family['id'].'</td>
            <td>'.$family['name'].'</td>
            <td><a href="/family/show.php?id='.$family['id'].'">Показать</a><a href="/family/Update.php?id='.$family['id'].'">Update</a></td>
            </tr>';
}
?>
</table>
<a href="/family/add.php">Добавить</a>
<a href="/add.php">Ввести новое дерево</a>

<hr>
</hr>
</body>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Kind</title>
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
FROM tree_kind
");
$query->execute();
$kinds = $query->fetchAll(PDO::FETCH_ASSOC);


foreach ($kinds as $kind){
    echo '<tr><td>'.$kind['id'].'</td>
            <td>'.$kind['name'].'</td>
            <td><a href="/kind/show.php?id='.$kind['id'].'">Показать</a><a href="/kind/Update.php?id='.$kind['id'].'">Update</a></td>
            </tr>';
}
?>
</table>
<a href="/kind/add.php">Добавить</a>
<a href="/add.php">Ввести новое дерево</a>

<hr>
</hr>
</body>

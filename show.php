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
    $treeId = intval($_GET['id']);
    $query = $db->prepare("SELECT
	trees.id,
	trees.name,
	tree_family.name AS family,
	tree_kind.name AS kind,
    tree_type.name AS type
FROM trees
JOIN tree_family ON tree_family.id = trees.family_id
JOIN tree_kind ON tree_kind.id = trees.kind_id
JOIN tree_type ON tree_type.id = trees.type_id
WHERE trees.id = ".$treeId);
    $query->execute();
    $tree = $query->fetch();
    echo '<tr><td>'.$tree['type'].'</td>
            <td>'.$tree['family'].'</td>
            <td>'.$tree['name'].'</td>
            <td>'.$tree['age'].'</td>
            <td>'.$tree['kind'].'</td>
            <td>'.$tree['height'].'</td>
            </tr>';
    //print_r($result);
    ?>

</table>
<a href="delete.php?id=<?php echo $treeId; ?>">Удалить</a>
<a href="add.php">Добавить</a>
<a href="index.php">Назад</a>
<a href="Update.php?id=<?php echo $treeId; ?>">Update</a>
<hr>
</hr>
</body>
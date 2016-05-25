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

        <th>name</th>


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
    $kindId = intval($_GET['id']);
    $query = $db->prepare("SELECT
		id,
		name
        FROM tree_kind");
    $query->execute();
    $kind = $query->fetch();
    echo '<tr>
            <td>'.$kind['name'].'</td>
            </tr>';
    //print_r($result);
    ?>

</table>
<a href="/kind/add.php">Добавить</a>
<a href="/kind/index.php">Назад</a>
<a href="/kind/Update.php?id=<?php echo $treeId; ?>">Update</a>
<hr>
</hr>
</body>
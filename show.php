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
    $familyId = intval($_GET['id']);
    $query = $db->prepare("SELECT
		id,
		name
        FROM tree_family");
    $query->execute();
    $family = $query->fetch();
    echo '<tr>
            <td>'.$family['name'].'</td>
            </tr>';
    //print_r($result);
    ?>

</table>
<a href="/family/add.php">Добавить</a>
<a href="/family/index.php">Назад</a>
<a href="/family/Update.php?id=<?php echo $treeId; ?>">Update</a>
<hr>
</hr>
</body>
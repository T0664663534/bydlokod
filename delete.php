<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Trees</title>
</head>
<body>
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
    $query = $db->prepare("DELETE FROM derevja WHERE id = ".$treeId);
    $query->execute();
    $tree = $query->fetch();

    echo '<b>Запись '.$treeId.' удалена</b>';

    //print_r($result);
    ?>


<a href="index.php">Назад</a>
</body>
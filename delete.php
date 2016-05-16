<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Trees</title>
</head>
<body>
<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=Trees', 'root', '123');
} catch (PDOException $e) {
    echo $e->getMessage();
}
$treeId = intval($_GET['id']);
$query = $db->prepare("DELETE FROM trees1 WHERE id = ".$treeId);
$query->execute();
$tree = $query->fetch();
echo '<b>Запись '.$treeId.' удалена</b>';
//print_r($result);
?>


<a href="index.php">Назад</a>
</body>





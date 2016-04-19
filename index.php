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
        <th></th>
        <th></th>
    </tr>
<?php
/**домашнее задание: с помощью get вывод и удаление строк из бд. с помощью post - вставка.
 * Дополнительно адейт данных - get и post. для каждого действия отдельный файл. переход с помощью html тега
 * - <a href="YOUR_LINK">LINK_TEXT</a>
 * должен быть вывод как одной строки из базы, так и всех - это внутри одного файла реализовать
 * ну и соответсвенно создать базу для описания деревьев, тех что растения
 * типа вид, семья, название, возраст, тип, высота и т.д
 */


try {
    $db = new PDO('mysql:host=localhost;dbname=derevja', 'root', '12041972');
} catch (PDOException $e) {
    echo $e->getMessage();
}
$query = $db->prepare("SELECT * FROM derevja");
$query->execute();
$result = $query->fetchAll();

foreach ($result as $tree)
{
 echo '<tr><td>'.$tree['id'].'</td>
            <td>'.$tree['name'].'</td>
            <td><a href="show.php?id='.$tree['id'].'">Показать</a></td>
            <td><a href="delete.php?id='.$tree['id'].'">Удалить</a></td>
            </tr>';
}

//print_r($result);
    ?>

    </table>
        <a href="add.php">Добавить</a>
</body>
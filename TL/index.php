<?php
include('BG.php');
//подключение бд
require('connectBD.php');

echo '<form method="POST" action="'.'addpage.php'.'">
        <input name="name" placeholder="Название книги">
        <input name="price" placeholder="Цена">
        <input name="name_a" placeholder="Имя автора">
        <button type="submit" class="but">Добавить книгу</button>
        <a href="delete.php">Удалить книгу</a>

    </form>
</div>';

$sql = $dbc->query('SELECT books.*, authors.* FROM books,authors,books_authors WHERE books_authors.id_books = books.id AND books_authors.id_author = authors.id');
$sql = $sql->fetchAll();
echo '<table>';
echo '<tr><td>Название</td><td>Цена</td><td>Автор</td></tr>';
foreach ($sql as $row) {
    echo '<tr>';
    echo '<td>'.$row['title'].'</td>';
    echo '<td>'.$row['price'].'</td>';
    echo '<td>'.$row['name'].'</td>';
    echo '<tr>';

}
echo '</table>';

//вызов функции вывода всех записей
/*
$mysql->getAllPost();*/
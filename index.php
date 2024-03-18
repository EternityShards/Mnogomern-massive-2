<?php

$library_books = array(
    array("название" => "Война и мир", "автор" => "Лев Толстой", "жанр" => "Роман"),
    array("название" => "Преступление и наказание", "автор" => "Федор Достоевский", "жанр" => "Роман"),
    array("название" => "1984", "автор" => "Джордж Оруэлл", "жанр" => "Фантастика"),
    array("название" => "Мастер и Маргарита", "автор" => "Михаил Булгаков", "жанр" => "Фэнтези"),
    array("название" => "Маленький принц", "автор" => "Антуан де Сент-Экзюпери", "жанр" => "Детская литература")
);

function find_books_by_genre($library_books, $genre) {
    $found_books = array();
    foreach ($library_books as $book) {
        if ($book["жанр"] === $genre) {
            $found_books[] = $book;
        }
    }
    return $found_books;
}

$genre_to_find = "Роман";
$found_books = find_books_by_genre($library_books, $genre_to_find);

if (empty($found_books)) {
    echo "Книги жанра '$genre_to_find' не найдены.";
} else {
    echo "Найденные книги жанра '$genre_to_find':\n";
    foreach ($found_books as $book) {
        echo $book["название"] . " - " . $book["автор"] . "\n";
    }
}

?>
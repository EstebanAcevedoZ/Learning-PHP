<?php

require_once('book.php');

$book1 = new Book("Gabriel Garcia Marquez", "Cien años de soledad", 482);
$book2 = new Book("George Orwell", "1984", 328);

$book1->showDescription();
$book2->showDescription();

Book::compareBooks($book1, $book2);

?>
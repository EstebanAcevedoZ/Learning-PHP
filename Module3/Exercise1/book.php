<?php

class Book
{
    private $title;
    private $pages;
    private $author;

     public function __construct($author, $title, $pages)
     {
        $this->title = $title;
        $this->pages = $pages;
        $this->author = $author;
     }
     //Getters
     public function getTitle()
     {
        return $this->title;
     }
     public function getPages()
     {
        return $this->pages;
     }
     public function getAuthor()
     {
        return $this->author;
     }
     //Setters
     public function setTitle($title)
     {
        $this->title = $title;
     }

     public function setPages($pages)
     {
        $this->pages = $pages;
     }

     public function setAuthor($author)
     {
        $this->author = $author;
     }
     //METHODS
     //Method for showing book information
     public function showDescription()
     {
        echo "The book ". $this->title .", from the author ". $this->author .', has '. $this->pages .' pages. <br>';
     }
     //Method to compare books
     public static function compareBooks($libro1, $libro2)
     {
        if ($libro1->getPages() > $libro2->getPages()) {
            echo 'The book '. $libro1->getTitle() .' has more pages.';
        }
        elseif ($libro2->getPages() > $libro1->getPages()){
            echo 'The book '. $libro2->getTitle() .' has more pages.';
        }
        else {
            echo 'Both books have the same amount of pages.';
        }
     }
}
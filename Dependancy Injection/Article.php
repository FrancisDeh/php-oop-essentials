<?php

class Author {

}

class Article {
    private $author;
    private $title;

    public function __construc($title, $author) {
        $this->author = $author;
        $this->title = $title;
    }

    public function getAuthor() {
        return $this->author;
    }

}

$author = new Author;
$article = new Article("To Php and Beyond", $author);
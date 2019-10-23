<?php

class Author extends User {

    /**
     * calculate scores for author
     * @return int
     */
    public function calcScores() {
        return $this->numberOfArticles * 10 + 20;
    }
}

$author1 = new Author;
$author1->setNumberOfArticles(5);

echo 'author 1 scores ' . $author1->calcScores();
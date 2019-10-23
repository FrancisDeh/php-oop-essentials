<?php

abstract class User {

    /**
     * holds score for user
     * @var int $scores
     */
    protected $scores = 0;

    /**
     * holds number of articles written by user
     * @var int $numberOfArticles
     */
    protected $numberOfArticles = 0;

    /**
     * sets number of articles to user
     * @param int $int
     */
    public function setNumberOfArticles(int $articles) {
        $this->numberOfArticles = $articles;
    }

    /**
     * Gets number of articles written by user
     * @return int
     */
    public function getNumberOfArticles() {
        return $this->numberOfArticles;
    }

    /**
     * abstract function to calculate score
     */
    abstract function calcScores();

}
<?php

class Editor extends User {

   /**
    * calculate scores for author
    * @return int
    */
   public function calcScores() {
       return $this->numberOfArticles * 6 + 15;
    }
}

$editor1 = new Editor;
$editor1->setNumberOfArticles(5);

echo 'editor 1 scores ' . $editor1->calcScores();
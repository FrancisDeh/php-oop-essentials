<?php

interface User {}

trait Writing {
    abstract public function startWriting();
}

class Author implements User {
use Writing;

public function startWriting() {
    echo "Author is writng";
}

}

class Commentator implements User {
    use Writing;

    public function startWriting() {
        echo "Commentator is writing";
    }

}

class Viewer implements User {

}

$author = new Author;
echo $author->startWriting();
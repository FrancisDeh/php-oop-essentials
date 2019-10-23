<?php

class User {

    /**
     * Holds the usernme of user
     * @var String $username
     */
    protected $username;

    /**
     * abstract function to calculate score
     */
    abstract function calcScores();

    /**
     * Sets username
     * @param String $username
     * 
     */
    public function setUsername(string $username) {
        $this->username = $username;
    }

    /**
     * Gets the username
     * @return String
     */
    public function getUsername() {
        return $this->username;
    }

}
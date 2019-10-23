<?php

class Commentator implements User {

    public $username;
    public $gender;

    public function setUsername($username) {
        $this->username = $username;
    }
    public function getUsername() {
        return $this->username;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }
    public function getGender() {
        return $this->gender;
    }
}

function addPrefixToName(User $user) {
    return $user->gender == "M" ? "Mr " . $user->getUsername() : "Mrs " . $user->getUsername();
}
<?php

class Utils {

    static public $numberOfRedirects = 0;

    static public function redirect($url) {
        self::$numberOfRedirects++;
        header('Location: $url');
        exit;
    }
}

Utils::redirect("https://sapphire.com");
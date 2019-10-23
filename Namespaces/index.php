<?php
require 'src/Car/CarIntro.php';
require 'src/Car/CarPrice.php';
require 'src/Car/User.php';

use Colon\Car\CarIntro;
use Colon\Car\CarPrice as Price;

/**
 * or Group use declarations
 * 
 * use Colon\{
 * Car\CarIntro as Intro,
 * Car\CarPrice as Price
 * }
 */

$intro = new CarIntro();
$intro->sayHello();

//from the global scope
$user = new \User();
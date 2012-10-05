<?php

$autoloadFile = 'vendor/autoload.php';
if (!file_exists($autoloadFile)) {
    die("Autoloader file not found in '" . $autoloadFile . "'.");
}

include 'vendor/autoload.php';

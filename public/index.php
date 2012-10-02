<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

chdir(dirname(__DIR__));

// Setup autoloading
include 'vendor/autoload.php';

// Load config, init and run the application
Zend\Mvc\Application::init(include 'config/application.config.php')->run();

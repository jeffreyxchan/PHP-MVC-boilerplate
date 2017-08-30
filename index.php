<?php

define('ROOT', '.' . DIRECTORY_SEPARATOR);
define('APP', './app' . DIRECTORY_SEPARATOR);
define('VIEWS', './views' . DIRECTORY_SEPARATOR);
define('CONTROLLERS', './app/controllers' . DIRECTORY_SEPARATOR);

require APP . 'index.php';

$app = new App();

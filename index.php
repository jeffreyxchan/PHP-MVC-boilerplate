<?php

define('ROOT', '.' . DIRECTORY_SEPARATOR);
define('APP', './app' . DIRECTORY_SEPARATOR);
define('VIEWS', './views' . DIRECTORY_SEPARATOR);
define('CONTROLLERS', APP . 'controllers' . DIRECTORY_SEPARATOR);
define('CORE', APP . 'core' . DIRECTORY_SEPARATOR);

require_once ROOT . 'App.php';

$app = new App();

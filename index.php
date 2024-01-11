<?php

require __DIR__ . '/vendor/autoload.php';

use src\model\MyModel;
use src\MyController;


$model = new MyModel();
$controller = new MyController($model);
$controller->processRequest();
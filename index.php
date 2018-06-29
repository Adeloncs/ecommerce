<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;

$app = new Slim();

$app->config('debug', true); // view error

$app->get('/', function() { // rota principal
    
	$page = new Page();

	$page->setTpl("index");

});

$app->run();

 ?>
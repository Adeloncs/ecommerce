<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;

$app = new Slim();

$app->config('debug', true); // view error

$app->get('/', function() { // rota principal
    
	$page = new Page();

	$page->setTpl("index");

});

$app->get('/admin', function() { // rota principal
    
	$page = new PageAdmin();

	$page->setTpl("index");

});


$app->run();

 ?>
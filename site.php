<?php 

use \Hcode\Page;
use \Hcode\Model\Product;

$app->get('/', function() { // rota principal

	$products = Product::listAll();
    
	$page = new Page();

	$page->setTpl("index", [
		'products'=>Product::checkList($products)
	]);

});



 ?>
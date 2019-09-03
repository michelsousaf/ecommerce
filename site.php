<?php 


use \Hcode\Page;
use \Hcode\Model\Product;
use \Hcode\Model\Category;


$app->config('debug', true);

$app->get('/', function() {
    	
    	$page = new Page();

    	$page->setTpl("index");

});


$app->get("/categories/:idcategory", function($idcategory){
	//User::verifyLogin();
	$category = new Category();
	$category->get((int)$idcategory);
	$page = new Page();
	$page->setTpl("category", [
		'category'=>$category->getValues(),
		'products'=>[]
	]);
});


 ?>
<?php
//connect to the user account class
require("../classes/product_class.php");

//sanitize data


//--INSERT--//
function add_product_ctr($name,$price,$category){
	$addproduct=new product_class();
	return $addproduct->add_product($name,$price,$category);


}


//--SELECT--//
function view_products_ctr(){
	$viewproducts=new product_class();
	return $viewproducts->view_products();

}
function view_one_category_ctr($id){
	$viewcat=new product_class();
	return $viewcat->view_one_category($id);

}

function view_categories_ctr(){
	$viewcategories=new product_class();
	return $viewcategories->view_categories();


}

//--UPDATE--//
function edit_product_ctr($id,$name,$price,$cid){
	$updateproduct=new product_class();
	return $updateproduct->edit_product($id,$name,$price,$cid);


}

//--DELETE--//
function delete_product_ctr($id){
	$deleteproduct=new product_class();
	return $deleteproduct->delete_product($id);


}
?>
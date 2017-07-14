<?php
error_reporting(0);
require_once('crud.php');
date_default_timezone_set('Asia/Kathmandu');


if(!empty($_FILES['image']['name']))
{
	$image = time().rand(10,20).'.jpg';
	$imageloc = $_FILES['image']['tmp_name'];
	ImageUpload($image,$imageloc);
}else{
	$image =(!empty($_POST['old_name'])) ? $_POST['old_name']:'';
}

function deleteimage($imageName){
	if($imageName != 'NA.jpg'){
		unlink('assets/img/'.$imageName);
	}

}

function ImageUpload($imageName,$imageLocation){
	move_uploaded_file($imageLocation,'assets/img/'.$imageName);
}


$data=[
"id"=>$_POST['id'],
"user"=>$_POST['user'],
"status"=>$_POST['status'],
"password"=>$_POST['password'],
"email"=>$_POST['email'],
"number"=>$_POST['number'],
"media"=>($image) ? $image:"NA.jpg"
];

$datanews = [
'id' =>$_POST['id'],
"user" => $_POST['user'],
"title" => $_POST['title'],
"description" => $_POST['description'],
"media" => ($image) ? $image:"NA.jpg",
"category" => $_POST['category'],
"status" => $_POST['status'],
];

$datacompany = [
"id"=>$_POST['id'],
"company_name"=>$_POST['company_name'],
"address"=>$_POST['address'],
"fb"=>$_POST['fb'],
"twitter"=>$_POST['twitter'],
"logo" => ($image)? $image :'NA.jpg',
];

$datanewstable = [
"categoryname"=>$_POST['categoryname'],
"description"=>$_POST['description'],
"id"=>$_POST['id']
];



$datasection = [
"section_name"=>$_POST['section_name'],
"page"=>$_POST['page'],
"id"=>$_POST['id']
];

$obj = new Crud();
 // for user
if($_POST['set'] == 'add'){
	if($obj->addUser($data) == true){
	 header('location:usertable.php');
	}
}else if($_POST['edit'] == 'SUBMIT'){
	if($obj->updateUser($data) == true){
		header('location:usertable.php');
	}
}else{
	if($_GET['page'] == 'user'){
	if($obj->deleteUser() == true){
		header('location:usertable.php');
	}
}
}

// for news
if ($_POST['news'] == 'insert') {
	if($obj->addNews($datanews) == true){
		header('location:Newstable.php');
	}
} else if ($_POST['news'] == 'edit') {
	if($_FILES['image']['name']){
		deleteimage($_POST['old_name']);
	}
	if($obj->editNews($datanews) == true){
		header('location:Newstable.php');
	}
} else{
if($_GET['page'] == 'news'){
if ($obj->deleteNews() == true) {

	header('location:Newstable.php');
}
}
}


// for company_setting
if ($_POST['company'] == 'insert') {
	if($obj->companyaddNews($datacompany) == true){
		header('location:Companytable.php');
	}
}else if ($_POST['company_setting'] == 'edit') {
	if($_FILES['image']['name']){
		deleteimage($_POST['old_name']);
	}
	if($obj->companyeditNews($datacompany) == true){
		header('location:Companytable.php');
}
}else{
if($_GET['page'] == 'company'){	
if ($obj->companydeleteNews() == true) {

	header('location:Companytable.php');
}
}
}

// for news_table
// if($_POST['news_table']){
	
	if($_POST['news_table'] == 'add'){
	if($obj->Addnewstable($datanewstable) == true){
		header('location:Categorytable.php');
	}
}else if($_POST['news_edit'] == 'edit'){
	if($obj->editnewstable($datanewstable) == true){
		header('location:Categorytable.php');
	}
}else{
	if($_GET['page'] == 'category'){	
	if($obj->deleteNewstable() == true){
		header('location:Categorytable.php');
	}
}
}
// }



// forsection
if($_POST['section_add'] == 'add'){
	if($obj->sectionadd($datasection) == true){
		header('location:sectiontable.php');
	}
}else if($_POST['section_edit'] == 'edit'){
	if($obj->sectionedit($datasection) == true){
		header('location:sectiontable.php');
	}
}else{
	if($_GET['page'] == 'section'){
	if($obj->sectiondelete() == true){
		header('location:sectiontable.php');
	}
}
}
?>
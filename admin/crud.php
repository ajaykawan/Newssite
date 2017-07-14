<?php
require_once('connection.php');
class Crud extends Connection{

	private $id;
	private $user;
	private $password;
	private $email;
	private $number;
	private $company_name;
	private $address;
	private $fb;
	private $twitter;
	private $logo;
	private $title;
	private $description;
	private $media;
	private $category;
	private $status;
	private $categoryname;
	private $section_name;
	private $page;


    // 1 for user_part

	public function addUser(array $data){
		$this->user = $data['user'];
		$this->media = $data['media'];
		$this->password = sha1($data['password']);
		$this->email = $data['email'];
		$this->number = $data['number'];
		$this->status = $data['status'];

		parent::connect();
        
		$sql = 'INSERT INTO `myuser`(`status`,`user`,`password`,`email`,`number`,`media`) VALUES (:status,:user,:password,:email,:number,:media)';
		$query = parent::$con->prepare($sql);
		$query->execute(array(':status'=>$this->status,':user'=>$this->user,':password'=>$this->password,':email'=>$this->email,':number'=>$this->number,':media'=>$this->media));
   
		return true;
	}

	public function updateUser(array $data){
		$this->id = $data['id'];
		$this->media = $data['media'];
		$this->user = $data['user'];
		$this->status = $data['status'];
		$this->password = sha1($data['password']);
		$this->email = $data['email'];
		$this->number = $data['number'];

		parent::connect();

		$sql = 'UPDATE `myuser` SET `user`=:user,`password`=:password,`email`=:email,`number`=:number,`status`=:status,`media`=:media WHERE `id`=:id';

		$query = parent::$con->prepare($sql);
		$query->execute(array(':id'=>$this->id,':user'=>$this->user,':password'=>$this->password,':email'=>$this->email,':number'=>$this->number,'media'=>$this->media,':status'=>$this->status));
		return true;
	}
	public function deleteUser(){

		$this->id = $_GET['id'];
		$sql = 'DELETE FROM myuser WHERE `id`=:id';
		parent::connect();
		$query = parent::$con->prepare($sql);
		$query->execute(array(':id'=>$this->id));
		if($_GET['image'] != 'NA.jpg')
		$this->ImageDeleteuser($_GET['image']);
		return true;
	}
	public function ImageDeleteuser($imageName){
		unlink('assets/img/'.$imageName);
	}

	// 2 For company
	public function companyaddNews(array $datacompany){
		$this->company_name = $datacompany['company_name'];
		$this->address = $datacompany['address'];
		$this->fb = $datacompany['fb'];
		$this->twitter =$datacompany['twitter'];
		$this->logo = $datacompany['logo'];

		parent::connect();

		$mysql ='INSERT INTO `company_setting`(`company_name`, `address`, `fb`, `twitter`, `logo`) VALUES (:company_name,:address,:fb,:twitter,:logo)';

		$query = parent::$con->prepare($mysql);

		$query->execute(array(
			":company_name"=>$this->company_name,
			":address"=>$this->address,
			":fb"=>$this->fb,
			":twitter"=>$this->twitter,
			":logo"=>$this->logo));
		return true;
	}

	public function companyeditNews(array $datacompany){
		$this->id = $datacompany['id'];
		$this->company_name = $datacompany['company_name'];
		$this->address = $datacompany['address'];
		$this->fb = $datacompany['fb'];
		$this->twitter =$datacompany['twitter'];
		$this->logo = $datacompany['logo'];
		parent::connect();
		$mysql = 'UPDATE `company_setting` SET `company_name`=:company_name,`address`=:address,`fb`=:fb,`twitter`=:twitter,`logo`=:logo WHERE `id`=:id';
		$query = parent::$con->prepare($mysql);
		$query->execute(array(
			":company_name"=>$this->company_name,
			":address"=>$this->address,
			":fb"=>$this->fb,
			":twitter"=>$this->twitter,
			":logo"=>$this->logo,
			":id"=>$this->id
			));
		return true;
	}
	public function companydeleteNews(){
		$id = $_GET['id'];
		$sql = "DELETE FROM company_setting where `id`=?";
		parent::connect();
		$query = parent::$con->prepare($sql);
		$query->execute(array($id));
		if($_GET['image'] != 'NA.jpg')
			$this->ImageDeletecompany($_GET['image']);
		return true;
	}
	public function ImageDeletecompany($imageName){
		unlink('assets/img/'.$imageName);
	}

	// 3 for newcrud
	public function addNews(array $datanews)
	{
		$this->title = $datanews['title'];
		$this->description = $datanews['description'];
		$this->media = $datanews['media'];
		$this->user = $datanews['user'];
		$this->category = $datanews['category'];
		$this->status = $datanews['status'];
		$sql = "INSERT INTO news (`user`,`title`,`description`,`media`,`category`,`status`) values(:user,:title,:description,:media,:category,:status)";
		parent::connect();
		$query = parent::$con->prepare($sql);
		$query->execute(array(':user'=>$this->user,':title'=>$this->title,':description'=>$this->description,':media'=>$this->media,':category'=>$this->category,':status'=>$this->status));
		return true;
	}

	public function editNews(array $datanews)
	{   
		$this->id = $datanews['id'];
		$this->title = $datanews['title'];
		$this->description = $datanews['description'];
		$this->media = $datanews['media'];
		$this->user = $datanews['user'];
		$this->category = $datanews['category'];
		$this->status = $datanews['status'];
		$this->id = $datanews['id'];

		$sql = "UPDATE `news` SET `user`=:user,`title`=:title,`description`=:description,`media`=:media,`category`=:category,`status`=:status WHERE `id`=:id";
		
		parent::connect();
		$query = parent::$con->prepare($sql);
		$query->execute(array(':user'=>$this->user,':media'=>$this->media,':title'=>$this->title,':description'=>$this->description,':category'=>$this->category,':status'=>$this->status,':id'=>$this->id));
		return true;
	}

	public function deleteNews(){
		$id = $_GET['id'];
		$sql = "DELETE FROM news where `id`=?";
		parent::connect();
		$query = parent::$con->prepare($sql);
		$query->execute(array($id));
		if($_GET['image'] != 'NA.jpg')
			$this->ImageDeletenews($_GET['image']);
		return true;
	}
	public function ImageDeletenews($imageName){
		unlink('assets/img/'.$imageName);
	}

 // 4 for news_tabel
	public function Addnewstable(array $datanewstable){
		$this->categoryname = $datanewstable['categoryname'];
		$this->description = $datanewstable['description'];

		parent::connect();

		$mysql = 'INSERT INTO `news_table`(`categoryname`, `description`) VALUES (:categoryname,:description)';
		$query = parent::$con->prepare($mysql);
		$query->execute(array(
			"categoryname"=>$this->categoryname,
			"description"=>$this->description
			));
		return true;

	}

	public function editnewstable(array $datanewstable){
		$this->id = $datanewstable['id'];
		$this->categoryname = $datanewstable['categoryname'];
		$this->description = $datanewstable['description'];

		parent::connect();
		$mysql = 'UPDATE `news_table` SET `categoryname`=:categoryname,`description`=:description WHERE `id`=:id';
		$query = parent::$con->prepare($mysql);
		$query->execute(array(
			"categoryname"=>$this->categoryname,
			"description"=>$this->description,
			"id"=>$this->id
			));
		return true;
	}
	public function deleteNewstable(){
		$this->id = $_GET['id'];
		parent::connect();
		$mysql = 'DELETE FROM `news_table` WHERE `id`=:id';
		$query =  parent::$con->prepare($mysql);
		$query->execute(array(
			":id"=>$this->id
			));
		return true;
	}

    // 5 for section_part
	public function sectionadd(array $datasection){
		$this->section_name = $datasection['section_name'];
		$this->page = $datasection['page'];

		parent::connect();

		$mysql = 'INSERT INTO `section_table`(`section_name`, `page`) VALUES (:section_name,:page)';
		$query = parent::$con->prepare($mysql);
		$query->execute(array(
			"section_name"=>$this->section_name,
			"page"=>$this->page
			));
		return true;

	}

	public function sectionedit(array $datasection){
		$this->id = $datasection['id'];
		$this->section_name = $datasection['section_name'];
		$this->page = $datasection['page'];

		parent::connect();
		$mysql = 'UPDATE `section_table` SET `section_name`=:section_name,`page`=:page WHERE `id`=:id';
		$query = parent::$con->prepare($mysql);
		$query->execute(array(
			"section_name"=>$this->section_name,
			"page"=>$this->page,
			":id"=>$this->id
			));
		return true;
	}
	public function sectiondelete(){
		$this->id = $_GET['id'];
		parent::connect();
		$mysql = 'DELETE FROM `section_table` WHERE `id`=:id';
		$query =  parent::$con->prepare($mysql);
		$query->execute(array(
			":id"=>$this->id
			));
		return true;
	}
}
?>
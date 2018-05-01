<?php
require_once 'models/user.php';
class User extends Controller{
	public function index(){ 
$user = new UserModel(); 
$all=$user::getUid(); 
$data = $_GET; 
if(isset($data['uid'])){ 
if(in_array($data['uid'], $all)){ 
$_SESSION['user'] = $data['uid']; 
} 
else{ 
$_SESSION['user'] = $data['uid']; 
$user->addUser($data); 
} 
} 
if(isset($_SESSION['user'])){ 
header('Location: '.URL.'/'); 
} 
View::render('user/user'); 
}
 public function logout(){
    if(isset($_SESSION['user'])){
     unset($_SESSION['user']);
     header('Location: '.URL.'/');
    }
} 	
	
}

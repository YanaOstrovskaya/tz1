<?php
class View{
	public static function render($path, $data){
		extract($data);
		require 'views/header.php';
		require 'views/'.$path.'.php';//home/main
		require 'views/footer.php';
	}
}
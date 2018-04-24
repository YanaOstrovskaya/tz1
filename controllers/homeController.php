<?php
class Home extends Controller{
	public function index(){
		echo __CLASS__.' '.__METHOD__;

		View::render('home/index');
	}
}
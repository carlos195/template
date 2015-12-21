<?php
	
	class home extends controller{
		protected $model;
		protected $view;

		function __construct(){
			parent::__construct();
			$this -> model = new mhome();
			$this -> view = new vhome();
			//echo 'Hello controller';
		}

		function home(){
			//echo 'Home llegue';
		}
	}
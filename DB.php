<?php 
	require '_mysqli.php';

	class DB 
	{
		public static $query; 

		public $_mysql;

		 function __construct()
		{
			if($this->_mysql == null)
				$this->_mysql = new _mysqli;


		}

		public static function query($query)
		{
			if($this->_mysql == null)
				$this->_mysql = new _mysqli;
			else
				$this->_mysql->obj->query($query);

			var_dump($this->_mysql);
		}

		function fetch_array($query)
		{
			return $this->query->fetch_array();
		}
	}

	$a = new DB;
	var_dump($a->_mysql);

 ?>
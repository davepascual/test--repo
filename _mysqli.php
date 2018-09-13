<?php 

	class _mysqli extends mysqli
	{
		public $username = 'root';

		public $password = '';

		public $server = 'localhosts';

		public $db = 'db_escardas_trading';

		public $obj;

		function  __construct()
		{
			parent::__construct($this->server,$this->username, $this->password, $this->db);
		}

		function new_added_function($param1, $param2)
		{
			echo "Hello WOrld";
		}

	}


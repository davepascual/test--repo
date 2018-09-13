<?php 

	class _mysqli extends mysqli
	{
		public $username = 'root';

		public $password = '';

		public $server = 'localhost';

		public $db = 'db_escardas_trading';

		public $obj;

		function  __construct()
		{
			parent::__construct($this->server,$this->username, $this->password, $this->db);
		}

		

	}


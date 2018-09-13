<?php  
		
	require 'DB.php';
	class Products
	{
		public $p_id; 

		public $p_num;

		public $data;

		public function __construct($p_id = 0)
		{
			if($p_id instanceof Products )
				$p_id = Products::$p_id;

			if($p_id)
				$this->p_id = $p_id;

			$data = $this->get_data($p_id);	

		}

		public function get_data($p_id)
		{
			DB::query("SELECT * FROM tbl_products WHERE ID = $p_id")->fetch_array();

		}
	}

	 $a = new Products(1);
	var_dump($a);
 ?>
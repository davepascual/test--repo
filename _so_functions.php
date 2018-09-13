<?php
	require '_mysqli.php';

	$db = new _mysqli;

	function so_per_page($sr_id, $limit= 20, $offset =0)
	{	
		global $db;
		$res = $db->query("SELECT * FROM tbl_so WHERE salesrep_id = '$sr_id' LIMIT ".$limit." OFFSET ".$offset) OR die($db->error);
		$data = array();

		while($so = $res->fetch_array())
		{
			$data[] = $so;
		}

		return $data;
	}


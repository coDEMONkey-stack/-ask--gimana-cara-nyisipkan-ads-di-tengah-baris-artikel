	$kategoriberita=getid_kategori(8,9);	
	$data['berita']=$this->modul_controller->myquery("SELECT *
													  FROM (tbl_artikel)
													  WHERE
													  status = 1 AND
													  id_kategori NOT IN (".$kategoriberita.") AND
													  id_parent= '0' AND
													  tanggal   <= '".date("Y-m-d H:i:s")."'
													  order by  tanggal  desc",
													  array(
													  "offset"=>1,
													  "num"=>10)						  													
													  );

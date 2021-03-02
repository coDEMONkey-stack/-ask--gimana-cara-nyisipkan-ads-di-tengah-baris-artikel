<?php 
    									$i=1;
    								if(!empty($beritabaru)){	
    									foreach($beritabaru as $row){
    									$imgcat=$this->modul_controller->myquery("SELECT *
    																					  FROM (tbl_gambar)
    																					  WHERE
    																					  display = 1 AND
    																					  from_tabel = 'tbl_artikel' AND
    																					  id_konten = '".$row['id_artikel']."'
    																					  order by  id_gambar desc",
    																					  array(),false						  													
    																					  );
    									$namakategori=$this->modul_controller->myquery("SELECT *
    												FROM (tbl_kategori)
    												WHERE
    												display = 1 AND
    												id_kategori = '".$row['id_kategori']."'
    												",
    												array(),false						  													
    												);		
    									?>

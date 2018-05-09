<?php


$prodi = [
			[
				"id"=>0,
				"nama"=>"kimia",
				"kuota"=>12,
				"kaprodi"=>"andi"
			],
			[
				"id"=>1,
				"nama"=>"fisika",
				"kuota"=>13,
				"kaprodi"=>"nurbaiti"
			],
			[
				"id"=>2,
				"nama"=>"biologi",
				"kuota"=>14,
				"kaprodi"=>"rizalinda"
			],
			[
				"id"=>3,
				"nama"=>"sisfo",
				"kuota"=>15,
				"kaprodi"=>"ilham"
			],
			[
				"id"=>4,
				"nama"=>"kelautan",
				"kuota"=>16,
				"kaprodi"=>"nara"
			],
			[
				"id"=>5,
				"nama"=>"statistik",
				"kuota"=>17,
				"kaprodi"=>"naomi"
			],
			[
				"id"=>6,
				"nama"=>"matematika",
				"kuota"=>12,
				"kaprodi"=>"mariatul"
			]						
		  ];
	echo $prodi[0]["nama"];
	echo "<pre>";
	echo "$prodi:"; var_dump($prodi);
	echo "</pre";
  ?>
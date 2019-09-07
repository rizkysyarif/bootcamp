<?php
function biodata()
{
	$result = [
		'Name' => 'Rizky Syarif',
		'Age' => '19',
		'address' => 'Srengseng Sawah, Jagakarsa,Kota Jakarta Selatan,DKI Jakarta',
		'hobbies' => ['olahraga', 'main game', ],
		'is_married' => false,
		'list_school' => [
			[
				'name' => 'SDN Surialaya',
				'years_in' => '2006',
				'years out' => '2012',
				'major' => null,
			],
			[
				'name' => 'SMP Terpadu Ar-Risalah',
				'years_in' => '2012',
				'years out' => '2015',
				'major' => null,
			],
			[
				'name' => 'MAS Serba Bakti',
				'years_in' => '2015',
				'years out' => '2018',
				'major' => 'IPA',
			]
			
		],
		'skills' => [
			[
				'name' => 'HTML',
				'level' => 'beginner'
			],
			[
				'name' => 'PHP',
				'level' => 'beginner'
			],
			[
				'name' => 'MySQL',
				'level' => 'beginner'
			],
			
		],
		'interest_in_coding' => true,


	];

	return json_encode($result);
}


echo biodata();
?>
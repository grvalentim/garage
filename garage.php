<?php
	$garage = [
			'kharkiv' => [
				'metal' => [
					['grey', 1],
					['yellow', 2],
					['black', 3]
				],
				'brick' => [
					['grey', 1],
					['yellow', 2],
					['black', 3]
				]
			],
			'kiev' =>  [
				'metal' => [
					['grey', 1],
					['yellow', 2],
					['black', 3]
				],
				'brick' => [
					['grey', 1],
					['yellow', 2],
					['black', 3]
				]
			],
			'poltava' => [
				'metal' => [
					['grey', 1],
					['yellow', 2],
					['black', 3]
				],
				'brick' => [
					['grey', 3],
					['yellow', 2],
					['black', 1]
				]
			]
		];
	
	$rand_garage = randGarage($garage);
	function randGarage($array) {
			$arr = [];
			$city = array_rand($array); //city
			$arr[] =$city;
			$build = array_rand($array[$city]);
			$arr[] = $build;
			$rand_build = array_rand($array[$city][$build]);//color
			$arr[] = $array[$city][$build][$rand_build];
			return $arr;
	};

	function garageText($array) {
		$text = "Your garage in " . $array[0] . "\n" . "consist of " . $array[1] . "\n" . "his colour is " . $array[2][0] . "\n" . "number of seats " . $array[2][1];
		return $text;
	}
	$text_G = garageText($rand_garage);


$users = [];
$users['Names'] = ['Aleksandr', 'Ekateryna', 'Stas', 'Taras'];
$users['Surnames'] = ['Davydov', 'Volkova', 'Berezhnoy', 'Rudenko'];
$users['Gender'] = ['mr', 'mrs', 'mr', 'mr'];
$users['City'] = ['Kharkov', 'Kiev', 'Poltava', 'Kharkov'];

function owner($users){
$index = array_rand($users['Names']);
return 'Owner:  ' . $users['Gender'][$index] . ' ' . $users['Surnames'][$index] . ' ' . $users['Names'][$index] . ' from ' . $users['City'][$index];
}

function cars()
{
    $cars = array('Mersedes' =>
        array('SLS' => array('color' => 'red', 'year' => '1998'),
            'CLS' => array('color' => 'black', 'year' => '2001')),
        'BMW' =>
            array('M3' => array('color' => 'yellow', 'year' => '2014'),
                'M5' => array('color' => 'silver', 'year' => '2012')),
        'Opel' =>
            array('Omega' => array('color' => 'pink', 'year' => '2011'),
                'Astra' => array('color' => 'green', 'year' => '2002')));

    $mark = array_rand($cars);
    $model = array_rand($cars[$mark]);
    return $mark." ".$model;
}

$counter = $rand_garage[2][1];

$common = [];
$user = owner($users);
$common[] = $user;
$common[] = $text_G;
$cars = countCars($counter);
$common[] = $cars;
var_dump($common);



function countCars($counter){
	$array_cars = [];
	for($i = 0; $i < $counter; $i++) {
		$cars = cars();
		$array_cars[] = $cars;
	}
	return $array_cars;
}


function carsGarage($array, $garage) {
	$count = count($array);
	$rand_garage = randGarage($garage);
}



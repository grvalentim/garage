<?php


// users

$users = [];
$users['Names'] = ['0' => ['John', 'Jim', 'Aleks', 'Barak'],
                  '1' => ['Marry', 'Helen', 'Kate', 'Ann']];
$users['Surnames'] = ['Smith', 'Tramp', 'Adams', 'Black'];
$users['Gender'] = ['mr', 'mrs'];

// cars

$cars = array('Mersedes' =>
        array('SLS' => array('color' => 'red', 'year' => '1998'),
            'CLS' => array('color' => 'black', 'year' => '2001')),
        'BMW' =>
            array('M3' => array('color' => 'yellow', 'year' => '2014'),
                'M5' => array('color' => 'silver', 'year' => '2012')),
        'Opel' =>
            array('Omega' => array('color' => 'pink', 'year' => '2011'),
                'Astra' => array('color' => 'green', 'year' => '2002')));

//garage

	$garage = [
			'Kharkiv' => [
				'metal' => [['grey', 1], ['yellow', 2], ['black', 3]],
				'brick' => [['grey', 1], ['yellow', 2], ['black', 3]]
			],
			'Kiev' =>  [
				'metal' => [['grey', 1], ['yellow', 2], ['black', 3]],
				'brick' => [
					['grey', 1], ['yellow', 2], ['black', 3]]
			],
			'Poltava' => [
				'metal' => [
					['grey', 1], ['yellow', 2], ['black', 3]],
				'brick' => [
					['grey', 3], ['yellow', 2], ['black', 1]]
			]
		];
	
function owner($users){
$gender = array_rand(array_flip($users['Gender']));
if ($gender == 'mr') {
	$names = array_rand(array_flip($users['Names']['0']));
} else $names = array_rand(array_flip($users['Names']['1']));
$surnames = array_rand(array_flip($users['Surnames']));

return 'Dear  ' . $gender. ' '. $names . ' ' . $surnames . '!';
}


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
	$text = "Your garage in " . $array[0] . " consist of " . $array[1] . ", " . "his colour is " . $array[2][0] . ", " . "number of seats " . $array[2][1];
		return $text;
}

function cars($cars)
{    
    $mark = array_rand($cars);
    $model = array_rand($cars[$mark]);
    return $mark." ".$model;
}

function input($users, $cars, $garage) {

$count_garage = rand(1, 5);

	echo owner($users).' You have ' . $count_garage . ' garages: '. PHP_EOL;
	for ($i=1; $i <= $count_garage ; $i++) { 
		$rand_garage = randGarage($garage);
		echo PHP_EOL.garageText($rand_garage).PHP_EOL;
        $count_car = rand(1,$rand_garage[2][1]); 
        echo 'In this garage you have next cars: '.PHP_EOL;
		for ($j=1; $j <= $count_car; $j++){
	    echo '#'.$j.' car: '.cars($cars).PHP_EOL;
	}
	   }
}

input($users, $cars, $garage);
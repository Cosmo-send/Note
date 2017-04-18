<?php
	$config = array(
		'title' => 'Cosmo-send',
		'db' => array(
			// 'server' => 'localhost',
			// 'username' => 'cp194561',
			// 'password' => 'VuNk3eGX9L',
			// 'name' => 'cp194561_Cosmo-send'
			'server' => 'localhost',
			'username' => 'root',
			'password' => '',
			'name' => 'cp194561_Cosmo-send'
		)
	);

$connection = mysqli_connect(
	$config['db']['server'],
	$config['db']['username'],
	$config['db']['password'],
	$config['db']['name']
);

if ($connection == false){
	echo 'Не удалось подключиться к базе данных! <br>';
	echo mysqli_connect_error();
	exit();
}
$connection->set_charset("utf8");
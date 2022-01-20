<?php

	require __DIR__.'/vendor/autoload.php';

	use Kreait\Firebase\Factory;
	use Kreait\Firebase\ServiceAccount;
	$factory = (new Factory)
		->withServiceAccount(__DIR__.'/kewan-pitik-firebase-adminsdk-4g0vx-4b9817c038.json')
		->withDatabaseUri('https://kewan-pitik-default-rtdb.firebaseio.com');

	$database = $factory->createDatabase();
?>
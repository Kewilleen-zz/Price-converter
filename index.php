<?php
	require 'data/storagemanager.class.php';
	require 'data/convertor.class.php';
	$storage = new StorageManager();
	if (!$storage->has('searched')) {
		echo 'Conversion inserted to session';
		$storage->set('searched', new Convertor('BRL', 'USD'));
	}
	$convertor = $storage->get('searched');
	echo $convertor->getValue();
?>
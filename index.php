<?php
	require 'data/convertor.class.php';
	$convertor = new Convertor('BRL', 'USD');
	echo $convertor->getValue();
?>
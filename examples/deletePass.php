<?php
require_once('../src/PassSlot.php');

$appKey ='<YOUR APP KEY>';
$passTypeID = '<PASS TYPE ID>';
$passSerialNumber = '<PASS SN>';

try {
	$engine = PassSlot::start($appKey);
	$pass = $engine->deletePass($engine->getPass($passTypeID, $passSerialNumber));

	var_dump($pass);
} catch (PassSlotApiException $e) {
	echo "Something went wrong:\n";
	echo $e;
}


<?php
require_once('../src/PassSlot.php');

$appKey ='<YOUR APP KEY>';
$passTypeID = '<PASS TYPE ID>';
$passSerialNumber = '<PASS SN>';

try {
	$engine = PassSlot::start($appKey);
        Header("Content-Type: image/png");
	die($engine->getPassImage($engine->getPass($passTypeID, $passSerialNumber), 'thumbnail', 'normal'));
} catch (PassSlotApiException $e) {
	echo "Something went wrong:\n";
	echo $e;
}


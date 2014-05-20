<?php
require_once('../src/PassSlot.php');

$appKey ='<YOUR APP KEY>';
$passTypeID = '<PASS TYPE ID>';
$passSerialNumber = '<PASS SN>';

try {
	$engine = PassSlot::start($appKey);
	$pass = $engine->saveTemplateImage($templateId, 'logo', 'normal', 'Relay59.png');
        
        var_dump($pass);
} catch (PassSlotApiException $e) {
	echo "Something went wrong:\n";
	echo $e;
}


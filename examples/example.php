<?php
require_once('../src/PassSlot.php');

$appKey ='<YOUR APP KEY>';
$passTemplateId = 123456;
$outputPass = FALSE;

$values = array(
	'Name' => 'John',
	'Level' => 'Platinum',
	'Balance' => 20.50
);

$images = array(
	'thumbnail' => dirname(__FILE__) . '/thumbnail.png'
);

try {
	$engine = PassSlot::start($appKey);
	$pass = $engine->createPassFromTemplate($passTemplateId, $values, $images);

	if($outputPass) {
		$passData = $engine->downloadPass($pass);
		$engine->outputPass($passData);
	} else {
		$engine->redirectToPass($pass);
	}
} catch (PassSlotApiException $e) {
	echo "Something went wrong:\n";
	echo $e;
}


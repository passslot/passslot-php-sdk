<?php
require_once('../src/PassSlot.php');

$appKey ='<YOUR APP KEY>';

try {
	$engine = PassSlot::start($appKey);
	$passes = $engine->listPasses("pass.slot.coupon");

	var_dump($passes);
} catch (PassSlotApiException $e) {
	echo "Something went wrong:\n";
	echo $e;
}


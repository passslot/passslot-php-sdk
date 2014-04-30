<?php
require_once('../src/PassSlot.php');

$appKey ='<YOUR APP KEY>';
$templateId = '<TEMPLATE ID>';

try {
	$engine = PassSlot::start($appKey);
	$pass = $engine->saveTemplateRestrictions($templateId);
        
        var_dump($pass);
} catch (PassSlotApiException $e) {
	echo "Something went wrong:\n";
	echo $e;
}


<?php

header( 'content-type: text/xml' );
echo '<?xml version="1.0" encoding="UTF-8"?>';

$_your_pin = '1234';

if ( isset( $_REQUEST['Digits'] ) && $_your_pin == $_REQUEST['Digits'] )
	$response = '<Play loop="2">/9.wav</Play>';
else
	$response = '<Say voice="woman">Total fail</Say>';

?>

<Response>
	<?= $response; ?>
</Response>

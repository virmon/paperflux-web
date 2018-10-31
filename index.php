<?php

	include('phpqrcode/qrlib.php');

	QRcode::png(1);
	// QRcode::png("text", "output_name", "");
	// QRcode::png('test', md5('test.png'), 'L', 4, 2);

?>
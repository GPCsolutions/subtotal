<?php

		
	if (is_file('../main.inc.php')) {
	    $dir = '../';
	} elseif (is_file('../../../main.inc.php')) {
	    $dir = '../../../';
	} else {
	    $dir = '../../';
	}

	include($dir."main.inc.php");

<?php

require_once('formatDate.php');

use \Date;

print("\n<h1>Test</h1>\n\n");

$date = '1989-05-01 18:30:07';

var_dump(formatDate($date,'short_datetime'));
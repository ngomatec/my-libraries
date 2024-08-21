<?php

use slug\Slug;
require_once('Slug.php');

print("\n<h1>Test</h1>\n\n");

$phrase = "like so match Angola";

var_dump((new Slug($phrase))->exec());

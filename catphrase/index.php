<?php

use catphrase\CatPhrase;

require_once('CatPhrase.php');

print("\n<h1>Test</h1>\n\n");

$phrase = "
	<p>HI! I'm Ngoma Tec, i live in Angola (Afric country), with my wife.</p>
	<p>I'm christian and softwer dev.</p>
";

var_dump((new CatPhrase($phrase, 76))->exec());

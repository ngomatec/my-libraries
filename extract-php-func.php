<?php
/**
* Converter chaves de array em variavies
*/

$arr = ['name'=>'Rosa', 'email'=>'rosa@mtec.ao'];

extract($arr); // brecouse this

// can do echo $name end $email
echo "Hi! I\'m {$name} end my mail is {$email}.";
<?php
spl_autoload_register('autoload');
function autoload($classname){
    include dirname(__FILE__).'/'.str_replace('\\','/',$classname).'.php';   
}

$ok=new \controllers\Dbh;

print_r($ok);
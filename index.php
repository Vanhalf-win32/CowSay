<?php

require_once 'vendor/autoload.php';

$test = new \CowSay\Cat('Meow');
$test->setEyes('oO');
$test->setTongue('b');
$test->setPoop('@@@');
echo $test;

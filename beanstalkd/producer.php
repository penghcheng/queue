<?php

require  './vendor/autoload.php';
use Pheanstalk\Pheanstalk;
$pheanstalk=new Pheanstalk('127.0.0.1',11300);

$pheanstalk->useTube('newUsers')->put('ok');
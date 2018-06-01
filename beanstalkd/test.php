<?php
require  './vendor/autoload.php';
use Pheanstalk\Pheanstalk;
$pheanstalk=new Pheanstalk('127.0.0.1',11300);

$tube=$pheanstalk->useTube('newIm');

$tube->put('im_33',3);
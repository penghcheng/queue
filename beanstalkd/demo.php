<?php

require  './vendor/autoload.php';
use Pheanstalk\Pheanstalk;
$pheanstalk=new Pheanstalk('127.0.0.1',11300);
//print_r($pheanstalk->stats());

//$pheanstalk=require 'beanstalkd.php';
//$job=$pheanstalk->watch('newUsers')->reserve();
//$stats=$pheanstalk->statsJob($job);

//$pheanstalk->useTube('newUsers')->put('test');
//print_r($pheanstalk->statsTube('newUsers'));

//$job=$pheanstalk->watch('newUsers')->reserve();
//$stats=$pheanstalk->statsJob($job);
//print_r($stats);

//$job=$pheanstalk->peek(1);
//$stats=$pheanstalk->statsJob($job);
//print_r($stats);

//print_r( $pheanstalk->putInTube('newUsers',6666));
//$pheanstalk->useTube('newUsers')->put('6666');


//$tube=$pheanstalk->useTube('newIm');
//$tube->put('im_1024');
//$tube->put('im_4',4);
//$tube->put('im_3',3);
//$tube->put('im_1000',1000);

//$job=$pheanstalk->watch('newIm')->reserve();
//print_r($job);
//$pheanstalk->delete($job);

//$tube=$pheanstalk->useTube('newIm');
//$tube->put('im_0',0,20,30);
//$job=$pheanstalk->watch('newIm')->reserve();
//print_r($pheanstalk->statsJob($job));
//sleep(100);
//$pheanstalk->delete($job);


//$job=$pheanstalk->watch('newIm')->reserve();
////$tubes=$pheanstalk->listTubesWatched();
//var_dump($job);
//
//$pheanstalk->delete($job);





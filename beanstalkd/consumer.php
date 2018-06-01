<?php
require  './vendor/autoload.php';
use Pheanstalk\Pheanstalk;
$pheanstalk=new Pheanstalk('127.0.0.1',11300);

while (true){
    $job=$pheanstalk->watch('newUsers')->reserve();

    print_r( $job->getData());

    //处理具体业务

    //删除任务
    $pheanstalk->delete($job);
}
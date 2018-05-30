<?php

$redis=new Redis();
$redis->connect('192.168.56.102',6379);
$redis_name='miaoha';

for ($i=0;$i<100;$i++){
    //$uid=$_GET['uid'];
    $uid=rand(100000,9999999);
    $num=10;
    if($redis->lLen($redis_name)<10) {
        $redis->rPush($redis_name,$uid.'%'.time());
        echo $uid.'秒杀成功';
    }else{
        echo '秒杀结束';
    }
}

$redis->close();
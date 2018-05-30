<?php
include 'db.php';

$redis=new Redis();
$redis->connect('192.168.56.102',6379);
$redis_name='miaoha';

$db=DB::getIntance();

//死循环
while (true){
    $user=$redis->lPop($redis_name);

    if(!$user || $user=='nil'){
        sleep(2);
        continue;
    }
    $user_arr=explode('%',$user);
    $insert_data=[
        'uid'=>$user_arr[0],
        'time_stamp'=>$user_arr[1]
    ];
    $res=$db->insert('redis_queue',$insert_data);
    if(!$res){
        $redis->lPush($redis_name,$user);
    }
    sleep(2);
}
$redis->close();
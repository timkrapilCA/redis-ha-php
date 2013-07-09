<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tim.krapil
 * Date: 7/9/13
 * Time: 10:23 AM
 * To change this template use File | Settings | File Templates.
 */


$redis = new Redis();
$redis->connect('d2-redisproxy-01.channeladvisor.com', 6379);



function PingRedis($redisConn){

    return $redisConn->Ping();


}
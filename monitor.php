<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tim.krapil
 * Date: 7/9/13
 * Time: 10:23 AM
 * To change this template use File | Settings | File Templates.
 */




function RunChecks(){
    if ($redis = ConnectRedis()){

        if(PingRedis($redis)!='+PONG'){
            print "didn't get a pong";
            #TODO: kick out to the are we really down? function
        }
        print 'got a +PONG <br />';
    }

    Print 'no connection!';
}

function DoubleCheck(){

}

function ConnectRedis(){
    try{
    $redis = new Redis();
    $redis->connect('d2-redisproxy-01.channeladvisor.com', 6379);
    return $redis;
    }Catch (Exception $e){
        echo 'Caught Exception: ', $e->getMessage(), "\n";
    }

}

function TestSet($redisConn){
    #TODO: set a value and return an error if it fails
}

function TestGet($redisConn){
    #TODO: get a value and return an error if it fails
}

function PingRedis($redisConn){
    return $redisConn->Ping();
}



RunChecks();
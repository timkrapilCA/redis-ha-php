<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tim.krapil
 * Date: 7/9/13
 * Time: 10:23 AM
 * To change this template use File | Settings | File Templates.
 */




function RunChecks(){
    try{
    $redis = ConnectRedis();
        if(PingRedis($redis)!='+PONG'){
            print "didn't get a pong";
            #TODO: kick out to the are we really down? function
        }
        echo 'got a +PONG', "\n";



    }catch(Exception $e){
        echo 'Caught exception: ',  $e->getMessage(), "\n";
        DoFailOver();
    }




}

function DoFailOver(){
    print 'doing failover stuff';
}

function DoubleCheck(){

}

function ConnectRedis(){

    $redis = new Redis();
    $boolRedisConn = $redis->connect('d2-redisproxy-01.channeladvisor.com', 6379);
    if ($boolRedisConn){
        return $redis;
    }
    Else{
       throw new Exception('Could not connect to redis.');
    }



}

function TestSet($redisConn){
    #TODO: set a value and return an error if it fails
}

function TestGet($redisConn){
    #TODO: get a value and return an error if it fails
}

function PingRedis($redisConn){
    try{
        $ping = $redisConn->Ping();
    }catch(Exception $e){
        echo 'Caught Exception: ', $e->getMessage(), "\n";
    }
    return $ping;
}



RunChecks();
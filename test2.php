<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tim.krapil
 * Date: 7/8/13
 * Time: 4:05 PM
 * To change this template use File | Settings | File Templates.
 */

$redis = new Redis();

$redis->connect('127.0.0.1', 6379);
$info = array($redis->info());
foreach ($info as $value) {
    echo $value; '<br>';
}
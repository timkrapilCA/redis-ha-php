<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tim.krapil
 * Date: 7/8/13
 * Time: 4:05 PM
 * To change this template use File | Settings | File Templates.
 */

$redis = new Redis();

$redis->connect('d2-redisproxy-01.channeladvisor.com', 6379);
$info = $redis->info();

echo '<pre>';
print_r ($info);
echo '</pre>';


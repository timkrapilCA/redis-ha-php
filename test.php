<?php
/**
 * Created by JetBrains PhpStorm.
 * User: tim.krapil
 * Date: 7/8/13
 * Time: 2:00 PM
 * To change this template use File | Settings | File Templates.
 */

require 'Autoloader.php';

Predis\Autoloader::register();

$redis = new Predis\Client();
$redis->set('foo', 'bar');
$value = $redis->get('foo');

echo $value;


$redis2 = new Predis\Command\ServerConfig();

$info = $redis->executeCommand($redis2);

echo $info;

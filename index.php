<?php
/**
 * Created by PhpStorm.
 * User: Jess
 * Date: 3/26/19
 * Time: 3:33 PM
 */
require __DIR__ . '/vendor/autoload.php';
require_once 'src/Chat.php';

$app = new Ratchet\App('localhost', 8080);
$app->route('/chat', new Chat(), array('*'));
$app->route('/echo', new Ratchet\Server\EchoServer, array('*'));
$app->run();

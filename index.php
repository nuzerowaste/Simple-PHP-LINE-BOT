<?php
require_once __DIR__ . '/lineBot.php';
file_put_contents('log.txt', file_get_contents('php://input') . PHP_EOL, FILE_APPEND);

$bot = new Linebot();
$text = "hello";
$bot->reply($text);




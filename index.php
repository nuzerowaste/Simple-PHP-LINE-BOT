<?php
require_once __DIR__ . '/lineBot.php';

$bot = new Linebot();
$text = "hello";
$bot->reply($text);




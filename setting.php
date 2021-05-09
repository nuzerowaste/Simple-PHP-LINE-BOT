<?php

class Setting {
	public static function getChannelAccessToken(){
		$channelAccessToken = "WjJsHEahu/7iJXa8DlecFlJC1DF2v0fo/zSq021dKV7gGi7bFbJUpgNMlZrqr0micMTrey7ATNPRYWSxEFYFr8YRW/Z4slHq+xln9jMtzbAT2hb8TvvG8t9dxv5xGWEAqhVTNISmngMT9AiBLGYycwdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public static function getChannelSecret(){
		$channelSecret = "e21a86dd0651841b5b53818ddb6cc742";
		return $channelSecret;
	}
	public static function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public static function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}

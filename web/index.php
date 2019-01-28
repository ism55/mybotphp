<?php

$botToken="702425285:AAElSrsa99nOv_aG4ZLE7iJk-x7rh9KAvko";

$website="api.telegram.org/bot".$botToken;

$update=file_get_contents('php://input');

$update=json_decode($update,TRUE);

$chatId=$update['message']['chat']['id'];

$chatType=$update['message']['chat']['type'];

$message=$update['message']['text'];

switch ($message) {
	case '/ayuda':
		$response='Mensaje de ayuda';
		sendMessage($chatId,$response);
		break;
	
	default:
		# code...
		break;
}

function sendMessage($chatId,$message){
	$url=$GLOBALS[website].'/sendMessage?chat_id='.$chatId.'&parse_mode=HTML&text='.urlencode($response);
		file_get_contents($url);

}


?>

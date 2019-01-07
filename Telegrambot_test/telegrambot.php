<?php
  

//   https://api.telegram.org/bot737032051:AAGWRTw7wZ8R92duupiugpnSqPrOxcbgnvA/sendmessage?chat_id=251422599&text=mathimathi   ORIGINAL GET URL

  
$botToken="737032051:AAGWRTw7wZ8R92duupiugpnSqPrOxcbgnvA";
  $website="https://api.telegram.org/bot".$botToken;

$updates = file_get_contents($website."/getupdates");       //if using a webhook, then this statement will be $updates = file_get_contents("php://input");

//  print_r($updates);

 $updateArray = json_decode($updates,TRUE);

 $chatId = $updateArray["result"][0]["message"]["chat"]["id"];
 print_r($chatId);

 file_get_contents($website."/sendmessage?chat_id=".$chatId."&text=testyoo");


//MESSAGE PRINTING
// print_r("number of messages: ".sizeof($updateArray["result"]));
// echo "\n";

// for($i=0;$i<sizeof($updateArray["result"]);$i++)
// {

// $text = $updateArray["result"][$i]["message"]["text"];
  
// print_r("Message ".($i+1).": ".$text);
// echo "\n";
  
// }



?>
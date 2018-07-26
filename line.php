 <?php
  

function send_LINE($msg){
 $access_token = '3yPQxnFy4p11esHXRUKcPAkGeBt0uwSbgSk/nSK0JBhUQM5icUI19j4LGT4LHjUFNcikmjRm01sGhl+vqezbItcSJAWY1bJey2oHFt53OE+bEqxuoOjWWgZHDK4U0br5jKPlVCDx/zWXVQCojhVj6gdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Cceb18a4ea43bdece8d9a0ceeb9521d26',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>

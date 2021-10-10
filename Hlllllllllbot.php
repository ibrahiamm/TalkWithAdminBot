<?php
# : @wwwwibrahimcom
#  : @Ibrahaim
ob_start();
define('API_KEY','2053076091:AAFptjcpE5pQwYRrEDIYtiKoVmVNRBJn88A');
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}

$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;

if($text=="/start"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"hello",
]);
}ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABAQDusm9SO77GpdrRnVSf76OGBfs3DsuJH5CoNpxpcCI3JnWQ8FpA81gXFBvkMoCRK9u0z/p/3nzhGfrDi2TUG4KnJiJJ/ekp1oy3/uMfvN+JWPpHIgQzYAz48WJbnYEdIxFcn1K+h376cBXGCDydF07rqRhdg5LTs2b2h2M7r2IvU76PZ8NkP9MnywOGTQY5LZdJtwYCaVRJ52pL8e1RN24d51teO65TtBuNAa+zWvvwoBUXbDk+yyeaMSbheyuIyXZVYjBnM9emH+U960/7UOTbxqnM4PhXFx5+kdTo83AQ1a0zLLDOc3Cd0I2WBWYb4W4EiVknuxj5f5Kv5oWB/bCT bot_464836@bots.business

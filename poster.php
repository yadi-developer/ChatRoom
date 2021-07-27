<?php
session_start();
header('Access-Control-Allow-Origin: http://' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT']);
$data = json_decode(file_get_contents('php://input'), true);
$encJSON = json_encode($data, JSON_PRETTY_PRINT);
$jsonFile = "./assets/js/chat.json";
$files = fopen($jsonFile, "w");

if (isset($data)) {
  $file = file_get_contents('./chat.json');
  if ($file) {
    $res = json_decode($file);
    if($res != null) {
      $arr = [];
      array_push($res, $data);
      $enarr = json_encode($res, JSON_PRETTY_PRINT);
      if(file_put_contents('./chat.json', $enarr)) {
        echo 'Data sukses!';  
      }
    } else {
      echo 'Gagal decode dari file json';
    }
  } else {
    echo 'file tidak terbaca';
  }

} else {
  echo 'gagal eksekusi bos!';
}


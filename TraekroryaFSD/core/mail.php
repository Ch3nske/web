<?php
//Чтение json'a, чтобы понять что заказ наш клиент
$json = file_get_contents('../Ggoods.json');
$json = json_decode($json,true);

$sum =0;
$message ='';
$message .= '<h1>Заказ в магазине</h1>';
$message .= '<p>Телефон:'.$_POST['ephone'].'</p>';
$message .= '<p>Почта:'.$_POST['email'].'</p>';
$message .= '<p>Клиент:'.$_POST['ename'].'</p>';

$cart = $_POST['cart'];

foreach ($cart as $id=>$count){
    $message .= ' Товар:'.$json[$id]['name']. ':';
    $message .=  ' Количество:'. $count;
    $message .= ' Цена:'. $count * $json[$id]['cost']. ' ';
    $message .= '<br>';
    $sum = $sum + $count*$json[$id]['cost'];
}
$message .= 'Всего:'.$sum;
//print_r($message);
//Отправка сообщения на email
$to = 'frekst@mail.ru'.',';
$to .=$_POST['email'];
$spectext = '<!DOCTYPE HTML><html><head><title>Заказ</title></head>';
$headers .= 'MIME-Version: 1.0'. "\r\n";
$headers .= 'Content-type: text/html; charset= utf-8'."\r\n";
$m = mail($to, 'Заказ в магазине', $spectext.$message.'</body></html>', $headers);

if ($m){echo 1;}else{echo 0;}

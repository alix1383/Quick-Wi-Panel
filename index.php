<?php

require_once 'inti.php';
require_once '../stuff/methods/class_app.php';
require_once '../stuff/methods/functions.php';



$app = new AppServer(1);
var_dump($app);








// $query = $sql->prepare("SELECT AES_DECRYPT(`steamServerToken`,?) AS `dsteamServerToken` 
//                         FROM `serverlist` WHERE `id`=? LIMIT 1");
// $query->execute(array($aeskey, 3));
// var_dump($query->fetchAll(PDO::FETCH_ASSOC));






//! client
//! application

// switch (getCurrentUri()) {
//     case '/client':
//         echo 'client';
//         break;

//     case '/application':
//         echo 'application';
//         break;
//     default:
//         http_response_code(405);
//         die('405 Method Not Allowed');
//         break;
// }

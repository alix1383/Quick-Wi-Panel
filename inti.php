<?php
require_once '../stuff/keyphrasefile.php';
require_once '../stuff/config.php';
require_once './function.php';


define('EASYWIDIR', '../');

$dbConnect['type'] = "mysql";
$dbConnect['host'] = $host;
$dbConnect['user'] = $user;
$dbConnect['pwd'] = $pwd;
$dbConnect['db'] = $db;
$dbConnect['charset'] = "utf8";

$debug = 1;

if (isset($debug) and $debug == 1) {

    $dbConnect['debug'] = 1;
    ini_set('display_errors',1);
    error_reporting(E_ALL|E_STRICT);

} else {
    $dbConnect['debug'] = 0;
}
try {
    $dbConnect['connect']="{$dbConnect['type']}:host={$dbConnect['host']};dbname={$dbConnect['db']};charset={$dbConnect['charset']}";
    $sql = new \PDO($dbConnect['connect'], $dbConnect['user'], $dbConnect['pwd']);

    if ($dbConnect['debug'] == 1) {
        $sql->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // $insertlog = $sql->prepare("INSERT INTO apilog (`userid`,`reseller`,`subuser`,`username`,`usertype`,`useraction`,`ip`,`hostname`,`logdate`,`resellerid`) VALUES (:userid,:reseller,:subuser,:username,:usertype,:useraction,:ip,:hostname,NOW(),:reseller_id)");
    // $insertlog->bindParam(':userid', $loguserid);
    // $insertlog->bindParam(':reseller', $logreseller);
    // $insertlog->bindParam(':subuser', $logsubuser);
    // $insertlog->bindParam(':username', $logusername);
    // $insertlog->bindParam(':usertype', $logusertype);
    // $insertlog->bindParam(':useraction', $loguseraction);
    // $insertlog->bindParam(':ip', $loguserip);
    // $insertlog->bindParam(':hostname', $userHostname);
    // $insertlog->bindParam(':reseller_id', $reseller_id);

} catch(PDOException $error) {
    die($error->getMessage());
}



// require_once '../stuff/api/api_list.php';
// require_once '../third_party/phpseclib/autoloader.php';
// require_once '../third_party/password_compat/password.php';

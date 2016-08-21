<?php
require_once 'includes/chkLogin.php';
if ( ! isset( $_SERVER['HTTP_X_REQUESTED_WITH'] ) ) {
	exit;
}
if ( $_SERVER['REQUEST_METHOD'] != 'POST' ) {
	exit;
}
if ( $_POST['action'] != 'true' ) {
	exit;
}
require_once '../includes/config.php';
try {
	$link = new PDO( RAD_DB_DRIVER . ':host=' . RAD_DB_HOST . ';dbname=' . RAD_DB_NAME, RAD_DB_USER, RAD_DB_PASS );
} catch ( PDOException $Exception ) {
	die( $Exception->getMessage() );
}
require_once 'includes/functions.php';
$userTotalUploadTraffic = userTotalUploadTraffic($_SESSION['USERNAME']);
$userTotalDownloadTraffic = userTotalDownloadTraffic($_SESSION['USERNAME']);
$userTotalOnlineTime = userTotalOnlineTime($_SESSION['USERNAME']);



$info = array(
	'userTotalUploadTraffic'=>$userTotalUploadTraffic,
	'userTotalDownloadTraffic'=>$userTotalDownloadTraffic,
	'userTotalOnlineTime'=>$userTotalOnlineTime,
);
print json_encode($info);
exit;

<?php
if ( preg_match( "/functions.php/", $_SERVER['SCRIPT_NAME'] ) ) {
	header( "Location: ../../" );
	exit;
}
?>

<?php
//用户总上传流量
function userTotalUploadTraffic($username='') {
  global $link;
  $sql = "SELECT SUM(acctoutputoctets) AS user_total_upload_traffic FROM radacct WHERE username="."$username";
	$userTotalUploadTraffic = $link->prepare($sql);
	$userTotalUploadTraffic->execute();
	$traffic = $userTotalUploadTraffic->fetch( PDO::FETCH_OBJ );
	return $traffic->user_total_upload_traffic;
}
//用户总下载流量
function userTotalDownloadTraffic($username='') {
  global $link;
  $sql = "SELECT SUM(acctinputoctets) AS user_total_download_traffic FROM radacct WHERE username="."$username";
	$userTotalDownloadTraffic = $link->prepare($sql);
	$userTotalDownloadTraffic->execute();
	$traffic = $userTotalDownloadTraffic->fetch( PDO::FETCH_OBJ );
	return $traffic->user_total_download_traffic;
}
//用户总在线时间:单位：s
function userTotalOnlineTime($username='') {
  global $link;
  $sql = "SELECT SUM(acctsessiontime) AS user_total_online_time FROM radacct WHERE username="."$username";
	$userTotalOnlineTime = $link->prepare($sql);
	$userTotalOnlineTime->execute();
	$time = $userTotalOnlineTime->fetch( PDO::FETCH_OBJ );
	return $time->user_total_online_time;
}


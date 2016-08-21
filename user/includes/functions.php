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
	if ( $traffic->user_total_upload_traffic < 1024){
		return number_format($traffic->user_total_upload_traffic/1024, 2 , '.', '').'KB';
	}elseif( $traffic->user_total_upload_traffic >= 1024 && $traffic->user_total_upload_traffic < 1048576 ){
		return number_format($traffic->user_total_upload_traffic/1024/1024, 2 , '.', '').'MB';
	}else{
		return number_format($traffic->user_total_upload_traffic/1024/1024/1024, 2 , '.', '').'GB';
	}
}
//用户总下载流量
function userTotalDownloadTraffic($username='') {
  global $link;
  $sql = "SELECT SUM(acctinputoctets) AS user_total_download_traffic FROM radacct WHERE username="."$username";
	$userTotalDownloadTraffic = $link->prepare($sql);
	$userTotalDownloadTraffic->execute();
	$traffic = $userTotalDownloadTraffic->fetch( PDO::FETCH_OBJ );
	if ( $traffic->user_total_download_traffic < 1024){
		return number_format($traffic->user_total_download_traffic/1024, 2 , '.', '').'KB';
	}elseif( $traffic->user_total_download_traffic >= 1024 && $traffic->user_total_download_traffic < 1048576 ){
		return number_format($traffic->user_total_download_traffic/1024/1024, 2 , '.', '').'MB';
	}else{
		return number_format($traffic->user_total_download_traffic/1024/1024/1024, 2 , '.', '').'GB';
	}
}
//用户总在线时间:单位：s
function userTotalOnlineTime($username='') {
  global $link;
  $sql = "SELECT SUM(acctsessiontime) AS user_total_online_time FROM radacct WHERE username="."$username";
  $userTotalOnlineTime = $link->prepare($sql);
  $userTotalOnlineTime->execute();
  $time = $userTotalOnlineTime->fetch( PDO::FETCH_OBJ );
  $seconds = $time->user_total_online_time;
  if( $seconds>3600 ){
	if( $seconds>24*3600 ){
		$days		= (int)($seconds/86400);
		$days_num	= $days."天";
		$seconds	= $seconds%86400;//取余
	}
	$hours = intval($seconds/3600)."小时";
	$minutes = $seconds%3600;//取余下秒数
	$time = $days_num.$hours.gmstrftime('%M分钟%S秒', $minutes);
	}else{
	$time = gmstrftime('%H小时%M分钟%S秒', $seconds);
	}
	return $time;
}

function userAuthPass(){
	global $link;
	$sql = "SELECT value FROM radcheck WHERE username="."$username"." AND attribute='User-Password'";
	$userauthpass = $link->prepare($sql);
	$userauthpass->execute();
	$userauthpass = $userauthpass->fetch( PDO::FETCH_OBJ );
	$userauthpass = $userauthpass->value;
	return $userauthpass;
}

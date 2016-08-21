<?php
if ( preg_match( "/functions.php/", $_SERVER['SCRIPT_NAME'] ) ) {
	header( "Location: ../../" );
	exit;
}
?>

<?php
function userTotalUploadTraffic($username='') {
  global $link;
  $sql = "SELECT SUM(acctoutputoctets) AS user_total_upload_traffic FROM radacct WHERE username="."$username";
	$userTotalUploadTraffic = $link->prepare($sql);
	$userTotalUploadTraffic->execute();
	$traffic = $userTotalUploadTraffic->fetch( PDO::FETCH_OBJ );
	return $traffic->user_total_upload_traffic;
}

function userTotalDownloadTraffic($username='') {
  global $link;
  $sql = "SELECT SUM(acctinputoctets) AS user_total_download_traffic FROM radacct WHERE username="."$username";
	$userTotalDownloadTraffic = $link->prepare($sql);
	$userTotalDownloadTraffic->execute();
	$traffic = $userTotalDownloadTraffic->fetch( PDO::FETCH_OBJ );
	return $traffic->user_total_download_traffic;
}

<?php
if ( preg_match( "/chkLogin.php/", $_SERVER['SCRIPT_NAME'] ) ) {
	header( "Location: ../../" );
	exit;
}
?>

<?php
session_name('user');
require_once '../includes/class.SessionManagement.php';
$Session = new SessionManagement('user');
if (!$Session->checkSession() or $_SESSION['user'] != true) {
	header("Location: ../?login=false");
	exit;
}

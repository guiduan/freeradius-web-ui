<?php

session_name();
session_start();
if ( isset( $_SESSION['ADMIN'] ) ) {
	header( 'Location: ./core/' );
	exit;
} elseif ( isset($_SESSION['USER'] ) ) {
	header( 'Location: ./user/' );
	exit;
} else{
	session_destroy();
}
?>

<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<?php
	require_once 'includes/config.php';
	if ( ! defined( 'RAD_DB_DRIVER' ) || ! defined( 'RAD_DB_HOST' ) || ! defined( 'RAD_DB_NAME' ) || ! defined( 'RAD_DB_USER' ) || ! defined( 'RAD_DB_PASS' ) ) {
		header( 'Location: ./setup/' );
		exit;
	}
	require_once 'includes/functions.php';
	$GetURL   = getSetting( 'product_url' );
	$SiteName = getSetting( 'site_name' );
	session_start();
	$_SESSION['PRODUCT_URL'] = $GetURL;
	$_SESSION['SITE_NAME']   = $SiteName;
	require_once 'includes/css-js.php';
	require_once 'includes/chkApplication.php';
	?>
	<script type="text/javascript" src="<?php echo $_SESSION['PRODUCT_URL']; ?>js/chkLogin.js"></script>
	<title><?php echo $_SESSION['SITE_NAME'] ?></title>
</head>
<body>

<header class="bg-blue" style="margin-bottom: 8%;">
	<div class="navigation-bar blue">
		<div class="navigation-bar-content container">
			<a href="javascript:void(0);" class="element">
				<span class="icon-grid-view"></span>
				<?php echo $_SESSION['SITE_NAME']; ?>
			</a>
			<span class="element-divider"></span>
		</div>
	</div>
</header>

<div style="margin-left: auto; margin-right: auto; width: 45%;">
	<div class="example">
		<fieldset>
			<legend>登陆</legend>

			<legend style="font-size: medium; display: none;" id="loading"></legend>

			<label for="usr">用户名</label>

			<div data-role="input-control" class="input-control text">
				<input type="text" placeholder="输入用户名" id="usr">
				<button tabindex="-1" class="btn-clear" type="button"></button>
			</div>

			<label for="pwd">密码</label>

			<div data-role="input-control" class="input-control password">
				<input type="password" placeholder="输入密码" id="pwd">
				<button tabindex="-1" class="btn-reveal" type="button"></button>
			</div>
			<button class="button dark place-right" onclick="javascript:chkLogin();">
				<span class="bold">登陆</span>
				<span class="icon-enter"></span>
			</button>
		</fieldset>
	</div>
</div>
<?php
require './includes/footer.php';
?>
</body>
</html>




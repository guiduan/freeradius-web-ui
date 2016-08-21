<?php
require_once 'includes/chkLogin.php';
?>
<!doctype html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<?php
	require_once '../includes/css-js.php';
	require_once './includes/css-js.php';
	?>
	<title><?php echo $_SESSION['SITE_NAME'] ?>::用户面板</title>

	<script type="text/javascript" src="<?php echo $_SESSION['PRODUCT_URL'] ?>user/js/dashboard.js"></script>

	<script type="text/javascript">
		$('#usersCount').ready(function() {
			dashboard();
			setInterval(function() {
				dashboard();
			},60000);
		});
	</script>
</head>
<body>
<?php require_once './includes/menu.php'; ?>
<div class="container">
	<div class="row">
		<h1>
			<i class="icon-dashboard fg-blue smaller"></i>
			用户面板
		</h1>
	</div>

	<div class="grid">
		<div class="row">
			<!--User Info Start-->
			<div class="span6">
				<div class="panel">
					<div class="panel-header bg-blue text-clear">
						<span class="icon-user"></span>
						<span>使用信息</span>
					</div>
					<div class="panel-content">
						<table class="table">
							<tbody>
							<tr>
								<td><span class="text-bold">上传流量</span></td>
								<td><span id="userTotalUploadTraffic"></span></td>
							</tr>
							<tr>
								<td><span class="text-bold">下载流量</span></td>
								<td><span id="userTotalDownloadTraffic"></span></td>
							</tr>
							<tr>
								<td><span class="text-bold">使用时长</span></td>
								<td><span id="userTotalOnlineTime"></span></td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!--User Info End-->
		</div>
	</div>
</div>
<?php
require '../includes/footer.php';
?>
</body>
</html>

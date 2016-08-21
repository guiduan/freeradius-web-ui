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
	<title><?php echo $_SESSION['SITE_NAME'] ?>::控制面板</title>

	<script type="text/javascript" src="<?php echo $_SESSION['PRODUCT_URL'] ?>core/js/dashboard.js"></script>

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
<?php require_once 'includes/menu.php'; ?>
<div class="container">
	<div class="row">
		<h1>
			<i class="icon-dashboard fg-blue smaller"></i>
			控制面板
		</h1>
	</div>

	<div class="grid">
		<div class="row">
			<!--User Info Start-->
			<div class="span6">
				<div class="panel">
					<div class="panel-header bg-blue text-clear">
						<span class="icon-user"></span>
						<span>用户</span>
					</div>
					<div class="panel-content">
						<table class="table">
							<tbody>
							<tr>
								<td><span class="text-bold">总用户</span></td>
								<td><span id="totalUsers"></span></td>
							</tr>
							<tr>
								<td><span class="text-bold">活跃用户</span></td>
								<td><span id="activeUsers"></span></td>
							</tr>
							<tr>
								<td><span class="text-bold">禁止用户</span></td>
								<td><span id="bannedUsers"></span></td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!--User Info End-->

			<!--Server Info Start-->
			<div class="span6">
				<div class="panel">
					<div class="panel-header bg-blue text-clear">
						<span class="icon-monitor"></span>
						<span>服务器</span>
					</div>
					<div class="panel-content">
						<table class="table">
							<tbody>
							<tr>
								<td><span class="text-bold">日期</span></td>
								<td><span id="date"></span></td>
							</tr>
							<tr>
								<td><span class="text-bold">主机名</span></td>
								<td><span id="hostname"></span></td>
							</tr>
							<tr>
								<td><span class="text-bold">在线时长</span></td>
								<td><span id="uptime"></span></td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!--Server Info End-->
		</div>

		<div class="row">
			<!--Memory Info Start-->
			<div class="span6">
				<div class="panel">
					<div class="panel-header bg-blue text-clear">
						<span class="icon-meter-medium"></span>
						<span>内存</span>
					</div>
					<div class="panel-content">
						<table class="table">
							<tbody>
							<tr>
								<td><span class="text-bold">总内存</span></td>
								<td><span id="totalMem"></span></td>
							</tr>
							<tr>
								<td><span class="text-bold">可用内存</span></td>
								<td><span id="freeMem"></span></td>
							</tr>
							<tr>
								<td><span class="text-bold">已用内存</span></td>
								<td><span id="usedMem"></span></td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!--Memory Info End-->

			<!--Disk Info Start-->
			<div class="span6">
				<div class="panel">
					<div class="panel-header bg-blue text-clear">
						<span class="icon-floppy"></span>
						<span>存储</span>
					</div>
					<div class="panel-content">
						<table class="table">
							<tbody>
							<tr>
								<td><span class="text-bold">总存储</span></td>
								<td><span id="totalDsk"></span></td>
							</tr>
							<tr>
								<td><span class="text-bold">可用存储</span></td>
								<td><span id="freeDsk"></span></td>
							</tr>
							<tr>
								<td><span class="text-bold">已用存储</span></td>
								<td><span id="usedDsk"></span></td>
							</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!--Server Info End-->
		</div>
	</div>
</div>
<?php
require '../includes/footer.php';
?>
</body>
</html>

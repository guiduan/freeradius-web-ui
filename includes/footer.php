<?php
if ( preg_match( "/footer.php/", $_SERVER['SCRIPT_NAME'] ) ) {
	header( "Location: ../" );
	exit;
}
?>

<footer class="bg-blue" style="position: fixed; bottom: 0; width: 100%; height: 40px;">
	<div style="padding: 8px;">
		<p>
			<span class="place-right" style="padding-right: 50px; color: #ffffff;">
				Made with <i class="icon-heart"></i> by: <a href="#" style="color: #ffffff;">DoTunnel</a>
			</span>
		</p>
	</div>
</footer>

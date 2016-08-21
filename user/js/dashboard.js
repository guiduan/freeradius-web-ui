/**
 * Created by peeyush.budhia on 31-12-2014.
 */

function dashboard() {

	loadDisplay('userTotalUploadTraffic');
	loadDisplay('userTotalDownloadTraffic');
	loadDisplay('userTotalOnlineTime');


	$.ajax({
			   type: 'POST',
			   cache: false,
			   url: 'dashboard.php',
			   async: true,
			   data: 'action=true',
			   success: function(response) {
				   var info = jQuery.parseJSON(response);
				   $('#userTotalUploadTraffic').html(info.userTotalUploadTraffic);
				   $('#userTotalDownloadTraffic').html(info.userTotalDownloadTraffic);
				   $('#userTotalOnlineTime').html(info.userTotalOnlineTime);

			   }
		   });
}

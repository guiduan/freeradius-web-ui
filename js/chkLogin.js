/**
 * Created by peeyush.budhia on 25-12-2014.
 */


function chkLogin() {
	$('#loading').show().html('<img src="img/loading.gif" alt="Loading..."/>');

	var usr = Base64Encode($('#usr').val());
	var pwd = Base64Encode($('#pwd').val());


	if (usr.length == 0 || pwd.length == 0) {
		$('#loading').addClass('text-danger').html('用户名或密码不能为空');
	} else {
		var data = 'usr='+usr+'&pwd='+pwd;
		var info  ='';
		var addClass = '';
		$.ajax({
				   type: 'POST',
				   cache: false,
				   async: true,
				   url: 'chkLogin.php',
				   data: data,
				   success: function(response) {
					   if ($.trim(response) == 'Empty') {
						   info = '用户名和密码不能为空';
						   addClass = 'text-danger';
					   }

					   if ($.trim(response) == 'Invalid') {
						   info = '用户名或者密码不正确';
						   addClass = 'text-danger';
					   }

					   if ($.trim(response) == 'Admin Login') {
						   redirect('./core/');
					   }
					   
					   if ($.trim(response) == 'User Login') {
						   redirect('./user/');
					   }

					   if ($.trim(response) != 'Admin Login' || $.trim(response) != 'User Login') {
						   $('#loading').addClass(addClass).html(info);
					   }

				   }
			   });
	}
}

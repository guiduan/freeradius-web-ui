/**
 * Created by peeyush.budhia on 07-01-2015.
 */

function changePasswordDialog() {
	$.Dialog({
				 overlay: true,
				 shadow: true,
				 flat: true,
				 draggable: true,
				 padding: 20,
				 width: 500,
				 height: 400,
				 content: '<fieldset>' +
				 '<legend>修改密码</legend>' +
				 '<span style="font-size: medium; display: none;" id="loading"></span>' +
				 '<label>当前密码</label>' +
				 '<div class="input-control password">' +
				 '<input type="password" id="currentPass"> ' +
				 '<button class="btn-reveal"></button>' +
				 '</div> ' +

				 '<label>新密码</label>' +
				 '<div class="input-control password">' +
				 '<input type="password" id="newPass"> ' +
				 '<button class="btn-reveal"></button>' +
				 '</div> ' +

				 '<label>确认新密码</label>' +
				 '<div class="input-control password">' +
				 '<input type="password" id="confPass"> ' +
				 '<button class="btn-reveal"></button>' +
				 '</div> ' +

				 '<div class="place-right" style="margin-bottom: 30px;">' +
				 '<button class="button" type="button" onclick="$.Dialog.close()">取消</button> ' +
				 '<button class="button dark" onclick="javascript:changePassword();">修改</button> ' +
				 '</div>' +
				 '</fieldset>'

			 });
}

function addNewUserDialog() {
	$.Dialog({
				 overlay: true,
				 shadow: true,
				 flat: true,
				 width: 500,
				 height: 500,
				 draggable: true,
				 padding: 20,
				 content: '<fieldset>' +
				 '<legend>新增用户</legend>' +
				 '<span style="font-size: medium; display: none;" id="loading"></span>' +

				 '<label>用户全称</label>' +
				 '<div class="input-control text">' +
				 '<input type="text" id="fullname"> ' +
				 '<button tabindex="-1" class="btn-clear" type="button"></button>' +
				 '</div> ' +

				 '<label>电子邮箱</label>' +
				 '<div class="input-control email">' +
				 '<input type="email" id="email"> ' +
				 '<button tabindex="-1" class="btn-clear" type="button"></button>' +
				 '</div> ' +

				 '<label>用户名</label>' +
				 '<div class="input-control text">' +
				 '<input type="text" id="username"> ' +
				 '<button tabindex="-1" class="btn-clear" type="button"></button>' +
				 '</div> ' +
				 
				 '<label>用户密码</label>' +
				 '<div class="input-control text">' +
				 '<input type="password" id="userpass"> ' +
				 '<button tabindex="-1" class="btn-clear" type="button"></button>' +
				 '</div> ' +
				 
				 '<label>认证密码</label>' +
				 '<div class="input-control text">' +
				 '<input type="password" id="authpass"> ' +
				 '<button tabindex="-1" class="btn-clear" type="button"></button>' +
				 '</div> ' +

				 '<div class="place-right" style="margin-bottom: 30px;">' +
				 '<button class="button" type="button" onclick="$.Dialog.close()">取消</button> ' +
				 '<button class="button dark" onclick="javascript:addNewUser();">添加</button> ' +
				 '</div>' +
				 '</fieldset>'
			 });
}


function addNewNasDialog() {
	$.Dialog({
				 overlay: true,
				 shadow: true,
				 flat: true,
				 width: 500,
				 draggable: true,
				 padding: 20,
				 content: '<fieldset>' +
				 '<legend>新增NAS</legend>' +
				 '<span style="font-size: medium; display: none;" id="loading"></span>' +

				 '<label>* 主机名/IP</label>' +
				 '<div class="input-control text">' +
				 '<input type="text" id="nasHost"> ' +
				 '<button tabindex="-1" class="btn-clear" type="button"></button>' +
				 '</div> ' +

				 '<div class="grid">' +

				 '<div class="row">' +
				 '<div class="span3">' +
				 '<label>* 类型</label>' +
				 '<div class="input-control select">' +
				 '<select class="form-control input-sm" id="nasType">' +
				 '<option value="">-- 选择 NAS 类型 --</option>' +
				 '<option value="other">other</option>' +
				 '<option value="cisco">cisco</option>' +
				 '<option value="livingston">livingston</option>' +
				 '<option value="computon">computon</option>' +
				 '<option value="max40xx">max40xx</option>' +
				 '<option value="multitech">multitech</option>' +
				 '<option value="natserver">natserver</option>' +
				 '<option value="pathras">pathras</option>' +
				 '<option value="patton">patton</option>' +
				 '<option value="portslave">portslave</option>' +
				 '<option value="tc">tc</option>' +
				 '<option value="usrhiper">usrhiper</option>' +
				 '</select>' +
				 '</div> ' +
				 '</div>' +

				 '<div class="span2">' +
				 '<label>* 密钥</label>' +
				 '<div class="input-control text">' +
				 '<input type="text" id="nasSecret"> ' +
				 '<button tabindex="-1" class="btn-clear" type="button"></button>' +
				 '</div> ' +
				 '</div>' +
				 '</div>' +

				 '<div class="row">' +

				 '<div class="span3">' +
				 '<label>Short Name</label>' +
				 '<div class="input-control text">' +
				 '<input type="text" id="nasShortName"> ' +
				 '<button tabindex="-1" class="btn-clear" type="button"></button>' +
				 '</div> ' +
				 '</div>' +

				 '<div class="span2">' +
				 '<label>端口</label>' +
				 '<div class="input-control number">' +
				 '<input type="number" id="nasPort"> ' +
				 '<button tabindex="-1" class="btn-clear" type="button"></button>' +
				 '</div> ' +
				 '</div>' +
				 '</div>' +
				 '<div class="row">' +

				 '<div class="span3">' +
				 '<label>NAS服务器</label>' +
				 '<div class="input-control text">' +
				 '<input type="text" id="nasServer"> ' +
				 '<button tabindex="-1" class="btn-clear" type="button"></button>' +
				 '</div> ' +
				 '</div> ' +

				 '<div class="span2">' +
				 '<label>Community</label>' +
				 '<div class="input-control text">' +
				 '<input type="text" id="nasCommunity"> ' +
				 '<button tabindex="-1" class="btn-clear" type="button"></button>' +
				 '</div> ' +
				 '</div> ' +
				 '</div> ' +
				 '</div>' + /*grid*/

				 '<label>描述</label>' +
				 '<div class="input-control text">' +
				 '<input type="text" id="nasDescription"> ' +
				 '<button tabindex="-1" class="btn-clear" type="button"></button>' +
				 '</div> ' +

				 '<div class="place-right" style="margin-bottom: 30px;">' +
				 '<button class="button" type="button" onclick="$.Dialog.close()">取消</button> ' +
				 '<button class="button dark" onclick="javascript:addNewNAS();">添加</button> ' +
				 '</div>' +
				 '</fieldset>'
			 });
}

function updateNASDialog(nasId) {
	if (nasId != '') {
		$.ajax({
				   type: 'POST',
				   cache: false,
				   url: 'loadNASInfo.php',
				   async: true,
				   data: 'id=' + nasId,
				   success: function(response) {
					   if ($.trim(response) != 'ErrorNASCount') {
						   var info = jQuery.parseJSON(response);
						   var content = '<fieldset>' +
							   '<legend>更新信息</legend>' +
							   '<span style="font-size: medium; display: none;" id="loading"></span>' +
							   '<input type="hidden" id="nasId" readonly value="'+info.id+'"> ' +

							   '<div class="grid">' +

							   '<div class="row">' +
							   '<div class="span3">' +
							   '<label>* 类型</label>' +
							   '<div class="input-control text">' +
							   '<input list="nasList" id="nasType" value="'+info.type+'">' +
							   '<datalist id="nasList">' +
							   '<option value="">-- 选择 NAS 类型 --</option>' +
							   '<option value="other">other</option>' +
							   '<option value="cisco">cisco</option>' +
							   '<option value="livingston">livingston</option>' +
							   '<option value="computon">computon</option>' +
							   '<option value="max40xx">max40xx</option>' +
							   '<option value="multitech">multitech</option>' +
							   '<option value="natserver">natserver</option>' +
							   '<option value="pathras">pathras</option>' +
							   '<option value="patton">patton</option>' +
							   '<option value="portslave">portslave</option>' +
							   '<option value="tc">tc</option>' +
							   '<option value="usrhiper">usrhiper</option>' +
							   '</datalist>' +
							   '</div> ' +
							   '</div>' +

							   '<div class="span2">' +
							   '<label>*密钥</label>' +
							   '<div class="input-control text">' +
							   '<input type="text" id="nasSecret" value="'+info.secret+'"> ' +
							   '<button tabindex="-1" class="btn-clear" type="button"></button>' +
							   '</div> ' +
							   '</div>' +
							   '</div>' +

							   '<div class="row">' +

							   '<div class="span3">' +
							   '<label>Short Name</label>' +
							   '<div class="input-control text">' +
							   '<input type="text" id="nasShortName" value="'+info.shortname+'"> ' +
							   '<button tabindex="-1" class="btn-clear" type="button"></button>' +
							   '</div> ' +
							   '</div>' +

							   '<div class="span2">' +
							   '<label>端口</label>' +
							   '<div class="input-control number">' +
							   '<input type="number" id="nasPort" value="'+info.ports+'"> ' +
							   '<button tabindex="-1" class="btn-clear" type="button"></button>' +
							   '</div> ' +
							   '</div>' +
							   '</div>' +
							   '<div class="row">' +

							   '<div class="span3">' +
							   '<label>Server</label>' +
							   '<div class="input-control text">' +
							   '<input type="text" id="nasServer" value="'+info.server+'"> ' +
							   '<button tabindex="-1" class="btn-clear" type="button"></button>' +
							   '</div> ' +
							   '</div> ' +

							   '<div class="span2">' +
							   '<label>Community</label>' +
							   '<div class="input-control text">' +
							   '<input type="text" id="nasCommunity" value="'+info.community+'"> ' +
							   '<button tabindex="-1" class="btn-clear" type="button"></button>' +
							   '</div> ' +
							   '</div> ' +
							   '</div> ' +
							   '</div>' + /*grid*/

							   '<label>描述</label>' +
							   '<div class="input-control text">' +
							   '<input type="text" id="nasDescription" value="'+info.description+'"> ' +
							   '<button tabindex="-1" class="btn-clear" type="button"></button>' +
							   '</div> ' +

							   '<div class="place-right" style="margin-bottom: 30px;">' +
							   '<button class="button" id="closeBtn" type="button" onclick="$.Dialog.close()">Cancel</button> ' +
							   '<button class="button dark" onclick="javascript:updateNASAccount();">Update</button> ' +
							   '</div>' +
							   '</fieldset>';


						   $.Dialog({
										overlay: true,
										title: '<span class="text-bold">NAS IP/主机: '+info.nasname+'</span>' ,
										shadow: true,
										width: 500,
										flat: true,
										draggable: true,
										padding: 20,
										content: content
									});
					   }

				   }
			   });
	}
}

var detailLogin={id:"detailogin",msg:"",cmsg:"您好，欢迎访问{name}，",lmsg:"登陆后浏览更多求职招聘信息!",h1:"职讯网,专注于打造中国最专业的建筑职业平台,您可以在这里:",pos:"",top:"",AddLogin:function(c){var a=detailLogin;var b=$("#"+a.id).find("div.login_lf").children("span");a.msg=b.text();a.pos=screen.height/2-200;a.top=$("#"+detailLogin.id).offset().top+"px"},ChangeNote:function(b){var a=$("#name").text();var c=detailLogin;var d=$("#"+c.id).find("div.login_lf").children("span");if(PAGE!=112&&PAGE!=113&&PAGE!=200&&PAGE!=201){if(b){d.html(c.lmsg)}else{d.html(c.msg)}}},slideLogin:function(){var a=$.browser.version;var b=detailLogin;var c=b.pos;b.ChangeNote(1);$("div.cards_cover_login").fadeIn(300,function(){if(a=="7.0"||a=="6.0"){$("#"+b.id).find("div.des").show()}$("#"+b.id).find("div.des").slideDown(600);$("#"+b.id).animate({top:c+"px"},600)})},slideOut:function(){var a=$.browser.version;var b=detailLogin;var c="46px";if(a=="6.0"){c="246px"}$("#close").click(function(){$("div.cards_cover_login").fadeOut(300);$("#"+b.id).animate({top:c},600);if(a=="7.0"||a=="6.0"){$("#"+b.id).find("div.des").hide()}$("#"+b.id).find("div.des").slideUp(600);b.ChangeNote(0)})},KeyDownLogin:function(){$(document).keydown(function(b){var c=document.activeElement.id;if(b.keyCode==13&&(c=="user"||c=="psw")){var a=$("#log").parent();a.addClass("btn15_hov");detailLogin.login()}})},btnhref:function(){var b=HGS.Base,a=location.href;$("#detailogin div.login_rf div.hreg").bind("click",function(){b.SetCookie("reurl",a);location.href=WEBROOT+"/tregister/"});$("#remb").bind("click",function(){location.href=WEBROOT+"/forgot/"});$("#detailogin div.login_rf div.ereg").bind("click",function(){b.SetCookie("reurl",a);location.href=WEBROOT+"/aregister/"});$("#detailogin div.login_rf div.creg").bind("click",function(){b.SetCookie("reurl",a);location.href=WEBROOT+"/eregister/"});$("#rec,#rec1").bind("click",function(){if($("#rec").hasClass("sel")){$("#rec").addClass("auto");$("#rec").removeClass("sel");$("#rec").attr("rel","0")}else{$("#rec").addClass("sel");$("#rec").removeClass("auto");$("#rec").attr("rel","1")}});$("#log").unbind("click").bind("click",detailLogin.login)},inputCheck:function(){$("#user").focus(function(){if($(this).val()=="电子邮箱/手机"){$(this).val("")}}).blur(function(){if($(this).val()==""){$(this).val("电子邮箱/手机")}})},login:function(){var f=0;if($("#user").val()=="电子邮箱/手机"){f=1;alert("请填写帐号信息!")}else{if(!$("#psw").val()){f=1;alert("请输入密码!")}}if(!f){var e=$("#user").val();var d=$("#psw").val();var h=$("#rec").attr("rel");var g={url:WEBURL.Login,params:"uname="+e+"&pword="+d+"&rem="+h,sucrender:detailLogin.loginsuc,failrender:detailLogin.loginfail};HGS.Base.HAjax(g)}},loginsuc:function(){location.reload()},loginfail:function(a){if(a.data==3){var b="你的帐户在短时间内密码输入错误5次，为保障您的帐户安全，请在5分钟后重新输入!";baseController.InitialSureDialog("error",b,"select","找回密码",function(){$("#select").attr({href:WEBROOT+"/forgot/",target:"_blank"})})}else{alert(a.data)}},iniFun:function(a){detailLogin.AddLogin();detailLogin.KeyDownLogin();baseController.BtnBind(".btn15","btn15","btn15_hov","btn15_hov");baseController.BtnBind(".btn14","btn14","btn14_hov","btn14_hov");detailLogin.btnhref();detailLogin.inputCheck();detailLogin.slideOut();a=a||$("div.layout2_l").find("p.blue");HGS.Base.DelCookie("reurl")},toslideLogin:function(a){a.unbind("click").bind("click",function(){detailLogin.slideLogin()})}};$().ready(function(){detailLogin.iniFun();if(PAGE=="112"||PAGE=="113"){detailLogin.toslideLogin($("#add_focus,#report,,#ckcontact,#app_ftr"))}if(PAGE=="200"||PAGE=="201"){detailLogin.toslideLogin($("#add_focus,#se_agphone,#inv_apl"))}if(PAGE=="110"){$("#report_h,#add_focus").click(function(){detailLogin.slideLogin();return false})}if(PAGE=="111"){detailLogin.toslideLogin($("#add_focus,#report_c,,#report_h"))}if(PAGE=="109"){detailLogin.toslideLogin($("#add_focus,#report_a,#praise"));$("div.layout2_r a.torel,#downing").live("click",function(){detailLogin.slideLogin();return false})}});
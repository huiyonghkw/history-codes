var feedbackController={a:function(){$("#name").focus(function(){baseRender.a(this,LANGUAGE.L0089,"right")}).blur(function(){var d=$(this).val().replace(new RegExp(" ","g"),"");$(this).val(d);var c="";var a=true;if(d==""){baseRender.b(this)}else{baseRender.ai(this)}if(!a){baseRender.a(this,c,"error")}});$("#mobile").focus(function(){baseRender.a(this,LANGUAGE.L0039,"right")}).blur(function(){var e=$(this).val().replace(new RegExp(" ","g"),"");$(this).val(e);var d="";var c=true;if(e==""){baseRender.b(this)}else{var a=baseRender.d(e);if(a==false){d=LANGUAGE.L0040;c=false}else{c=true;baseRender.ai(this)}}if(!c){baseRender.a(this,d,"error")}});$("#email").focus(function(){baseRender.a(this,LANGUAGE.L0001,"right")}).blur(function(){var d=$(this).val().replace(new RegExp(" ","g"),"");$(this).val(d);var c="";var a=true;if(d==""){c=LANGUAGE.L0002;a=false}else{if(!/\w{1,}[@][\w\-]{1,}([.]([\w\-]{1,})){1,3}$/.test(d)){c=LANGUAGE.L0003;a=false}else{baseRender.ai(this)}}if(!a){baseRender.a(this,c,"error")}})},b:function(){var a=$("#advice_box");$("#advice_box").focus(function(){if($(this).hasClass("gray")){$(this).removeClass("gray").val("")}else{if($(this).hasClass("red")){$(this).removeClass("red").removeClass("red_border").val("")}}}).blur(function(){var e=$(this).val().replace(new RegExp(" ","g"),"");$(this).val(e);var d="";var c=true;if(e==""){d=LANGUAGE.L0230;c=false}if(c==false){$(this).addClass("red_border");a.val(d).addClass("red")}})},c:function(){baseController.BtnBind(".btn20","btn20","btn20_hov","btn20_hov");$("#sm_fdb").bind("click",function(){$("#email").trigger("blur");var g=$("#advice_box");if(g.hasClass("gray")||$(this).hasClass("red")){g.addClass("red_border").removeClass("gray").addClass("red");return false}else{if(!g.hasClass("red_border")&&$("div.tip.error").length=="0"){var e=$("#name").val();var c=$("#mobile").val();var d=$("#email").val();var f=$("input[name='st']:checked").val();var b=g.val();var a=new Message();var h=baseRender;a.PostFeedBack(e,c,d,f,b,h.post_suc,h.post_fail)}}})},IniPage:function(){this.a();this.b();this.c()}};$().ready(function(){if(typeof(PAGE)=="undefined"){PAGE=""}if(PAGE=="100"){feedbackController.IniPage()}});
var jobfullselfRender={a:function(b){var a=jobfullselfRender.d(b);JobfullselfController.b(a,"#pagination",JobfullselfController.d);$("#dr_resume").html(" "+a+" ")},b:function(a){JobfullselfController.b(0,"#pagination",JobfullselfController.d);$("#reslist").html("<li class='no-data'>暂无数据!</li>");$("#dr_resume").html(" 0 ")},c:function(){$("html,body").animate({scrollTop:$("div.res_list").offset().top-55},500)},d:function(d){var c=d.data;var b=d.count;var f=[];f[0]=jobfullselfRender.e("1");f[1]=jobfullselfRender.e("2");var a;$.each(c,function(h,l){var k="";var j=l.type;if(j=="1"){l.temp=0}else{l.temp=1}if(l.role=="1"){l.role="人才"}else{if(l.role=="3"){l.role="猎头"}else{l.role="企业"}}if(l.salary=="面议"){l.face="face"}else{l.face=""}if(typeof(l.cert)=="undefined"){l.cert=[]}var g=l.cert.length;$.each(l.cert,function(i,m){k+='<p><span class="gray">证书情况: </span><span>'+m+"</span></p>"});l.cert=k;l.u_name=l.name;l.u_photo=l.photo;l.rid=l.send_resume_id;l.focus_id=l.user_id;l.reid=l.send_resume_id;a=baseRender.zh(l.real_auth,l.phone_auth,l.email_auth);l.email_auth=a.mil;l.phone_auth=a.pho;l.real_auth=a.nam;l.ntitle=a.tnam;l.ptitle=a.tpho;l.mtitle=a.tmil});var e=[];e[0]=["reid","focus_id","h_id","rid","cert","date","exp","follow","u_name","h_name","u_photo","salary","face","role","email_auth","phone_auth","real_auth","ntitle","ptitle","mtitle","pos","location"];e[1]=["reid","focus_id","h_id","rid","cert","date","follow","place","u_name","h_name","u_photo","salary","face","role","email_auth","phone_auth","real_auth","ntitle","ptitle","mtitle"];HGS.Base.GenMTemp("reslist",e,c,f);return b},e:function(e){var c=TEMPLE;var h="";var f="";var b="";var g=SWEBURL;var d=g.ResumeDetail;var a=g.SResumeDetail;h=c.T00040;b=c.T00062.replace(d,a);if(e=="1"){f=c.T00042.replace(d,a)}else{f=c.T00041.replace(d,a)}return baseController.GenBListTemp(h,f,b)},f:function(c){var b=$("#closejob");b.parent().parent().css("visibility","hidden");b.unbind("click");var a=jobfullselfRender.h();$("#fullid").next().html("(招聘结束于 "+a+")");$("html,body").animate({scrollTop:$("body").offset().top},500)},g:function(a){alert(a.data)},h:function(){var c=new Date();var d=c.getMonth()+1;var a=c.getDate();d=(d<10?"0"+d:d);a=(a<10?"0"+a:a);var b=c.getFullYear()+"-"+d+"-"+a;return b},i:function(b){var a=b.data;$("#ckcontact").parent().remove();$("#phone").text(a.phone);$("#email").text(a.email);$("#cont_way").slideDown(200)},j:function(a){if(a.data=="YEBZ0001"){paytipController.NoScore()}else{alert(a.data)}}};

var JobfullselfController={a:function(){baseController.BtnBind("div.joblistdetail div.btn_par div.btn5","btn5","btn5_hov","btn5_click");$("#closejob").bind("click",function(){if(confirm("您确定要结束该职位的招聘吗?")){var c=jobfullselfRender;var b=$("#fullid").attr("jid");var d=new Jobs();if($("#rt").val()=="3"){d.AEndPubJobs(b,c.f,c.g)}else{d.EEndPubJobs(b,c.f,c.g)}}})},b:function(b,d,c){var a=LANGUAGE;$(d).pagination(b,{callback:c,prev_text:a.L0066,next_text:a.L0067,items_per_page:CONSTANT.C0003,num_display_entries:9,current_page:0,num_edge_entries:1,link_to:"javascript:;"})},c:function(a){var b=jobfullselfRender;JobfullselfController.e(a,b.a,b.b)},d:function(a){var b=jobfullselfRender;JobfullselfController.e(a,b.d,b.b);b.c()},e:function(g,f,e){var d=$("#fullid").attr("jid"),c=$("#resfilter span.filt_type a.red").attr("rl");if(typeof(g)=="undefined"){g=0}g+=1;var h=new Jobs();if($("#rt").val()=="3"){h.AGetResList(d,g,c,f,e)}else{h.EGetResList(d,g,c,f,e)}},f:function(){$("#resfilter a").click(function(){$(this).parent().find("a").removeClass("red");$(this).addClass("red");JobfullselfController.c(0)})},g:function(){$("#chmore a.m").toggle(function(){$(this).text("收起职位信息");$("#hd_item").slideDown()},function(){$(this).text("查看更多职位信息");$("#hd_item").slideUp()})},h:function(a){$(a).unbind("click").bind("click",function(){var f=$(this);var e=$("div.module_1 div.item"),c="";e.each(function(){c+=$(this).find("p").text().trim()+"\n"});var d=f.attr("tp"),b=f.attr("tit"),g=f.attr("ur");zxshare(d,[b,g,"",c])})},j:function(){$("#ckcontact").bind("click",function(){var a="&uid="+$(this).attr("uid");paytipController.checkCContactTip(JobfullselfController.ja,null,this,a)})},ja:function(){var b=$("#ckcontact").attr("uid");var d=jobfullselfRender;var c=new Contacts();c.CheckContWay(b,2,d.i,d.j)},IniPage:function(){this.a();this.c(0);this.f();this.g();this.j();this.h("#share a.share")}};$().ready(function(){if(typeof(PAGE)=="undefined"){PAGE=""}if(PAGE=="58"||PAGE=="49"){JobfullselfController.IniPage()}});
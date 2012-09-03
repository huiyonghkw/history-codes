<!DOCTYPE HTML PUBLIC  "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>{$HC_resume.human.name}的简历 - 简历详情页_{$title}</title>
        <link type="text/css" rel="stylesheet" href="{$voc_root}/css/base_1.0.css"/>
        <link type="text/css" rel="stylesheet" href="{$voc_root}/css/bdetail_1.0.css"/>
        <link type="text/css" rel="stylesheet" href="{$js_root}/{$jqlib}/card-hgs/card-hgs.css">
        <link type="text/css" rel="stylesheet" href="{$js_root}/{$jqlib}/select-hgs/select-hgs.css"/>
        <link rel="shortcut icon" href="{$voc_root}/imgs/system/favicon.ico"/>
        <script type="text/javascript" src="{$voc_root}/config/loader.js" id="loader">50</script>
        <meta name='keywords' content='{$HC_resume.human.name},求职简历,{$kwds}'>
        <!--[if IE 6]>
            <link type="text/css" rel="stylesheet" href="{$voc_root}/css/ie6_1.0.css"/>
        <![endif]-->
        <meta name='description' content='这是{$HC_resume.human.name}的求职简历。{$desc}'>
    </head>
    <body>
        <!--兼职简历详细页 -->
<!--         layout::Public:detailheader::0 -->
        <div class="layout4 comdetail resdetail pjd">
            <div class="layout_top">
                <p>
                    <a href="{$web_root}" class="logo" title="个人中心 - 职讯"></a>
                    <a href="javascript:window.opener=null;window.open('','_self');window.close();" class="blue rf">关闭此页</a>
                </p>
            </div>
            <if condition="!empty($agent) && $private eq 1 && $self eq 1">
                <div class="layout_mid dborder hidden">
            <else/>
                <div class="layout_mid dborder">
            </if>
                <div class="ly_m_l">
                    <!--                    没有猎头代理 || 有猎头代理&&非私有&&本人 || 有代理猎头&&私有&&本人-->
                    <if condition="empty($agent)||(!empty($agent) && $private neq 1 && $self eq 1)">
                        <div class="photo lf">
                            <p class="ptitle">简历发布人</p>
                            <a href="{$web_root}/{$HC_resume.human.user_id}" title="{$HC_resume.human.name}">
                                <img class="psmall" src="{$HC_resume.human.photo}" alt="{$HC_resume.human.name}"/>
                            </a>
                            <div class="pub_info rf">
                                <p class="iden_name lf">{$HC_resume.human.name}</p>
                                <div class="identify lf">
                                    <switch name="HC_resume.human.real_auth">
                                            <case value="0">
                                                <img class="lit_small" src="{$file_root}Files/system/auth/gnam.png" title="未实名认证" alt="未实名认证"/>
                                            </case>
                                            <case value="1">
                                                <img class="lit_small" src="{$file_root}Files/system/auth/nam.png" title="已实名认证" alt="已实名认证"/>
                                            </case>
                                        </switch> 
                                        <switch name="HC_resume.human.phone_auth">
                                            <case value="0">                                        
                                                <img class="lit_small" src="{$file_root}Files/system/auth/gpho.png" title="未手机认证" alt="未手机认证"/>
                                            </case>
                                            <case value="1">
                                                <img class="lit_small" src="{$file_root}Files/system/auth/pho.png" title="已手机认证" alt="已手机认证"/>
                                            </case>
                                        </switch> 
                                        <switch name="HC_resume.human.email_auth">
                                            <case value="0">
                                                <img class="lit_small" src="{$file_root}Files/system/auth/gmes.png" title="未邮箱验证" alt="未邮箱验证"/>
                                            </case>
                                            <case value="1">
                                                <img class="lit_small" src="{$file_root}Files/system/auth/mes.png" title="已邮箱验证" alt="已邮箱验证"/>                                        
                                            </case>
                                        </switch>
                                    <span class="gray">他是人才</span>
                                </div>
                                <div class="clr"></div>
                                <switch name="follow">
                                    <case value="0">
                                        <div class="myfollows lf">
                                            <div class="check_m btn_common btn17">
                                                <span class="lf"></span>
                                                <span class="rf"></span>
                                                <span class="jia"></span>
                                                <a href="javascript:;" title="加关注" id="add_focus"class="mdetail btn" uid="{$HC_resume.human.user_id}" uname="{$HC_resume.human.name}">加关注</a>                                        
                                            </div>                                                                                        
                                        </div>
                                    </case>
                                    <case value="1">
                                        <div class="myfollows lf">
                                            <div class="check_m btn_common btn18">
                                                <span class="lf"></span>
                                                <span class="rf"></span>
                                                <span class="imgfocs"></span>
                                                <div class="re_focus"><span class="gray"  href="javascript:;">已关注 </span><a id="re_focus" uid="{$HC_resume.human.user_id}" uname="{$HC_resume.human.name}" class="btn blue">取消</a></div>                                        
                                            </div>                                            
                                        </div>
                                    </case>
                                </switch>                                
                                <p class="clr"></p>
                                <p class="baseinfo">
<!--                                    <span class="gray">活跃度:</span>
                                    <span></span>-->
                                </p>
                            </div>
                            <p class="clr"></p>
                        </div>
                        <!--                   有猎头代理&&非私有&&非本人 || 有代理猎头&&私有&&非本人-->
                        <else/>
                        <div class="photo lf">
                            <p class="ptitle">简历发布人</p>
                            <a href="{$web_root}/{$agent.user_id}" title="{$agent.name}">
                                <img class="psmall" src="{$agent.photo}" alt="{$agent.name}"/>
                            </a>
                            <div class="pub_info rf">
                                <p class="iden_name lf">{$agent.name}</p>
                                <div class="identify lf">                                    
                                    <switch name="agent.real_auth">
                                            <case value="0">
                                                <img class="lit_small" src="{$file_root}Files/system/auth/gnam.png" title="未实名认证" alt="未实名认证"/>
                                            </case>
                                            <case value="1">
                                                <img class="lit_small" src="{$file_root}Files/system/auth/nam.png" title="已实名认证" alt="已实名认证"/>
                                            </case>
                                        </switch> 
                                        <switch name="agent.phone_auth">
                                            <case value="0">                                        
                                                <img class="lit_small" src="{$file_root}Files/system/auth/gpho.png" title="未手机认证" alt="未手机认证"/>
                                            </case>
                                            <case value="1">
                                                <img class="lit_small" src="{$file_root}Files/system/auth/pho.png" title="已手机认证" alt="已手机认证"/>
                                            </case>
                                        </switch> 
                                        <switch name="agent.email_auth">
                                            <case value="0">
                                                <img class="lit_small" src="{$file_root}Files/system/auth/gmes.png" title="未邮箱验证" alt="未邮箱验证"/>
                                            </case>
                                            <case value="1">
                                                <img class="lit_small" src="{$file_root}Files/system/auth/mes.png" title="已邮箱验证" alt="已邮箱验证"/>                                        
                                            </case>
                                        </switch>
                                    <span class="gray">他是猎头</span>
                                    <div class="clr"></div>
                                </div>                                
                                <p class="clr"></p>
                                <switch name="follow">
                                    <case value="0">
                                        <div class="myfollows lf">
                                            <div class="check_m btn_common btn17">
                                                <span class="lf"></span>
                                                <span class="rf"></span>   
                                                <span class="jia"></span>
                                                <a href="javascript:;" title="加关注" id="add_focus"class="mdetail btn" uid="{$agent.user_id}" uname="{$agent.name}">加关注</a>                                        
                                            </div>                                                                                       
                                        </div>
                                    </case>
                                    <case value="1">
                                        <div class="myfollows lf">                                          
                                                <div class="check_m btn_common btn18">
                                                    <span class="lf"></span>
                                                    <span class="rf"></span>     
                                                    <span class="imgfocs"></span>
                                                    <div class="re_focus"><span class="gray"  href="javascript:;">已关注 </span><a id="re_focus" uid="{$agent.user_id}" uname="{$agent.name}" class="btn blue">取消</a></div>                                        
                                                </div>                                                                                                                            
                                        </div>
                                    </case>
                                </switch>
                                <p class="clr"></p>
                                <p class="baseinfo">
<!--                                    <span class="gray">活跃度:</span>
                                    <span></span>-->
                                                        
                                </p>
                            </div>
                            <p class="clr"></p>
                        </div>
                    </if>
                    <if condition="($private neq 1 or $self neq 1) and ($show_contact_bt eq 1)">                        
                        <div class="check btn_common btn10 lf">
                            <span class="lf"></span>
                            <span class="rf"></span>
                            <a href="javascript:;" class="btn white" id="se_agphone">查看联系方式</a>                                                                                    
                        </div>
                        <div class="check lf hidden" id="loading">
                            <ul><li class="loading"><p></p><span>正在获取联系方式，请稍后…</span></li></ul>
                        </div>
                    </if>
                    <!--                    不是本人访问&&猎头代理-->
                    <if condition="empty($contacts) and ($show_contact_bt eq 0)">
                        <div class="nocontact gray rf">此用户暂未公开联系方式!</div>
                    </if>    
                    <if condition="empty($contacts)">                        
                        <div class="module_2 conts hidden lf" id="cont_way">
                         <else/>
                         <div class="module_2 conts lf" id="cont_way">
                                </if>
                                <p><span class="gray">手机:</span><span class="ph_num">{$contacts.phone}</span></p>
                                <p><span class="gray">邮箱:</span><span class="ph_ema">{$contacts.email}</span></p>
                                <p><span class="ph_qq">
                                        <if condition="$contacts.qq neq '暂无'">
                                            <a class="ph_qq" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin={$contacts.qq}&site=qq&menu=yes">
                                                <img border="0" src="http://wpa.qq.com/pa?p=2:{$contacts.qq}:41" alt="点击这里给我发消息" title="点击这里给我发消息">
                                            </a>                                            
                                        </if>
                                    </span>
                            </div>
                   <!--电话回拨start-->
                  
                   <!--电话回拨end-->
                            <p class="clr"></p>
                        </div>                        
                </div>          
                <div class="layout_mid dborder">
                    <div class="ly_m_l">
                        <p class="pres_icon"></p>
                        <div class="module_2 detinfo detinfo_t n_to">
                            <p class="title">个人信息</p>
                            <div class="item">
                                <p class="gray">姓名 :</p>
                                <p class="detail sdet">{$HC_resume.human.name}</p>
                                <p class="gray">生日 :</p>
                                <p class="detail s_lr">{$HC_resume.human.birth}</p>
                            </div>
                            <div class="item">
                                <p class="gray">居住地 :</p>
                                <p class="detail sdet">{$HC_resume.human.addr}</p>
                                <p class="gray">工作经验 :</p>
                                <p class="detail s_lr">{$HC_resume.human.exp[1]}</p>
                                <div class="clr"></div>
                            </div>
                        </div>
                        <div class="module_2 detinfo detinfo_t">
                            <p class="title">证书情况</p>
                            <foreach name="HC_resume.register_certificate_list" item="cert">
                                <div class="item">
                                    <p class="gray">资质证书 :</p>
                                    <p class="detail">{$cert.register_certificate_name}
                                    <php>
                                        if(!empty($cert->register_certificate_major)){
                                        echo '-'.$cert->register_certificate_major;
                                        }
                                    </php>
                                    -{$cert.register_case}-{$cert.register_place}</p>
                                </div>
                            </foreach>
                            <div class="item">
                                <p class="gray">职称证 :</p>
                                <p class="detail">{$HC_resume.grade_certificate.grade_certificate_class_name}-{$HC_resume.grade_certificate.grade_certificate_type}-{$HC_resume.grade_certificate.grade_certificate_major}</p>
                            </div>
                            <div class="item">
                                <p class="gray">期望待遇 :</p>                              
                                <p class="detail">
                                    <span class="red">{$HC_resume.job_salary[1]} </span>
                                <switch name="HC_resume.job_salary[1]" >                                        
                                    <case value="面议"></case>                                                               
                                    <default  /> 万/年   
                                </switch>                                
                                </p>
                            </div>
                            <div class="item">
                                <p class="gray">期望注册地 :</p>
                                <p class="detail">{$HC_resume.register_provinces}</p>
                            </div>
                            <div class="item">
                                <p class="gray">补充说明 :</p>
                                <div class="detail pos_req">
                                    <if condition="$HC_resume.certificate_remark neq ''">{$HC_resume.certificate_remark}
                                        <else/><span class="red">未填写</span>
                                    </if>
                                </div>
                                <div class="clr"></div>
                            </div>
                        </div>
                        <if condition="$self neq 1">
                            <div class="module_3 btn_par detinfo inv_apl ">
                                <div class="btn_green lf">
                                    <div class="btn_common sw btn5">
                                        <span class="b_lf"></span>
                                        <span class="b_rf"></span>
                                        <a href="javascript:;" class="btn white" id="inv_apl">邀请投递简历</a>
                                    </div>
                                    <input type="hidden" name="cate_id" value="{$HC_resume.job_category}" />
                                    <input type="hidden" name="rid" value="{$HC_resume.resume_id}" />
                                </div>
                            </div>
                        </if>
                        <input type="hidden" name="resume_number" value="{$HC_resume.resume_id}"/>
                        <input type="hidden" name="isagented" value="{$agent.id}" />
                        <input type="hidden" id="rmid" value="{$mid}" />
                    </div>
                    <div class="layout_bot"></div>
                </div>
                <!-- layout::Public:footersimple::60 -->
                </body>
                </html>

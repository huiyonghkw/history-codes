<!--企业左侧导航-->
<div class="acc_set com">
    <div class="acc_de">
        <div class="my_pic">
            <a href="{$web_root}/{$info.user_id}"><img class="lf small" src="{$info.photo}" target="_blank"  alt="{$info.name}"/></a>
            <div class="lf role_info">                
                <a class="name blue" target="_blank"  href="{$web_root}/{$info.user_id}" title="{$info.name}">{$info.name}</a>
                <span class="role gray">企业</span>
                <div class="auth_con">
                    <if condition="$info.real_auth eq 0">
                        <a href="{$web_root}/profiles/3" title="未通过实名认证"><img src="{$file_root}Files/system/auth/gnam.png"  class="l_small" alt="申请实名认证" /></a>
                        <else/>
                        <a href="{$web_root}/profiles/3" title="已通过实名认证"><img src="{$file_root}Files/system/auth/nam.png"  class="l_small" alt="修改实名认证" /></a>
                    </if>
                    <if condition="$info.phone_auth eq 0">
                         <a href="{$web_root}/profiles/3" title="未通过手机认证"><img src="{$file_root}Files/system/auth/gpho.png"  class="l_small" alt="申请手机认证" /></a>
                        <else/>
                         <a href="{$web_root}/profiles/3" title="已通过手机认证"><img src="{$file_root}Files/system/auth/pho.png"  class="l_small" alt="修改手机认证" /></a>
                    </if>
                    <if condition="$info.email_auth eq 0">
                         <a href="{$web_root}/profiles/3" title="未通过邮箱认证"><img src="{$file_root}Files/system/auth/gmes.png"  class="l_small" alt="申请邮箱认证"/></a>
                        <else/>
                         <a href="{$web_root}/profiles/3" title="已通过邮箱认证"><img src="{$file_root}Files/system/auth/mes.png"  class="l_small" alt="修改邮箱认证" /></a>
                    </if>
                </div>
            </div>
            <div class="clr"></div>
        </div>
        <p class="wszl">
            <span>资料完善度</span>
            <span class="compl_pro"><a class="blue" href="{$web_root}/profiles/">立即完善</a></span>
        </p>
        <div class="my_detail">
            <div class="pro">
                <span class="pro_per Nb">{$info.soph}%</span>
                <div class="pro_bar">
                    <div class="bar1">
                        <div class="bar2" style="width:{$info.soph}px;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clr"></div>
    </div>
    <!--企业招聘-->
    <div class="b_com my_quali">
        <div class="area_title">
            <h2 class="a_title">招聘管理</h2>
        </div>
        <div class="sub_p">
            <a href="{$web_root}/recruitment/" class="blue"><em></em>我公开的职位</a>
        </div>
        <div class="sub_p">
            <a href="{$web_root}/recruitment/3" class="blue"><em></em>收到应聘简历</a>
        </div>
        <div class="adb btn24 btn_common btn">
                <span class="b_lf"></span>
                <span class="b_rf"></span>
             <a href="{$web_root}/epubjob/" class="btn white">发布新职位</a>
        </div>
    </div>  
    <!--职讯推荐-->
     <div class="b_com">
        <div class="area_title">
            <h2 class="a_title">职讯推荐</h2>
        </div>
         <div class="sub_p">
            <a href="{$web_root}/ehome/" class="blue"><em></em>推荐简历</a>
        </div>
          <div class="sub_p las_v">
            <a href="{$web_root}/ehome/1" class="blue"><em></em>推荐猎头</a>
        </div>
    </div>   
     <!--职讯帮助指导-->
    <div class="b_com nbd">
        <div class="area_title">
            <h2 class="a_title">站内应用</h2>
        </div>
<!--        <div class="sub_p">
            <a href="{$web_root}/arefer/"class="blue" target="_blank"><em></em>受理发证信息查询</a>
        </div>-->
        <div class="sub_p">
            <a href="{$web_root}/prefer/"class="blue" target="_blank"><em></em>人员资格查询</a>
        </div>
         <div class="sub_p">
            <a href="{$web_root}/refer/"class="blue" target="_blank"><em></em>单位资质查询</a>
        </div>
        <div class="sub_p">
            <a href="{$web_root}/contactbook/"class="blue" target="_blank"><em></em>建设部门通讯录</a>
        </div>
        <div class="sub_p">
            <a href="{$web_root}/pdmail/"class="blue" target="_blank"><em></em>人事部门通讯录</a>
        </div>
         <div class="sub_p las_v">
            <a href="{$web_root}/contract/"class="blue" target="_blank"><em></em>合同模板下载</a>
        </div>
    </div>
</div>
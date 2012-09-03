<!DOCTYPE HTML PUBLIC  "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>我要推广 - {$title}</title>
        <link type="text/css" rel="stylesheet" href="{$voc_root}/css/base_1.0.css"/>
        <link type="text/css" rel="stylesheet" href="{$voc_root}/css/promote_1.0.css"/>
        <link rel="shortcut icon" href="{$voc_root}/imgs/system/favicon.ico"/>
        <!--[if IE 6]>
            <link type="text/css" rel="stylesheet" href="{$voc_root}/css/ie6_1.0.css"/>
        <![endif]-->
        <script type="text/javascript" src="{$voc_root}/config/loader.js" id="loader">71</script>
        <meta name='keywords' content='{$kwds}'>
        <meta name='description' content='{$desc}'>
    </head>
    <body>
       <!-- layout::{$bheader}::0 -->
       <div class="layout1 promote Ep">
           <div class="layout1_l">
                <div class="module_1">
                <!-- layout::{$z_left}::0 -->
                </div>
            </div>
           <div class="layout1_r">
                <div class="module_2">
                    <div class="sm_tab">
                        <ul>
                            <li class="cur_li"><a href="javascript:;">帐号推广</a></li>
                            <li><a href="javascript:;">信息推广</a></li>
                        </ul>
                         <div class="sub_title">
                            <a href="javascript:;" title="" class="blue">我要推广</a>
                        </div>
                    </div>
                    <div class="t_container">
                        <input type="hidden" name="iid" value="{$promote['ia'].id}" />
                        <input type="hidden" name="nid" value="{$promote['na'].id}" />
                        <div class="t_item hidden">
                            <!--推广方式-->
                            <div class="cp">
                                <h2 class="Ht">
                                    <span class="gray">
                                       推广方式
                                    </span>
                                    <span>- 推荐企业优先排序</span>
                                </h2>
                                <div class="Ct">
                                    <div class="lf cl Zn">
                                    </div>
                                    <div class="lf cr zcr">
                                        <if condition="$man eq -1">
                                        <p class="gray">
                                           说明: 您企业的信息将由系统精准推荐到人才、猎头的"推荐企业"列表中,并享优先排序权,对方可通过点击您的企业链接,查看您的企业详细信息及招聘信息。
                                        </p>
                                        <else />
                                        <p class="gray">
                                            说明: 系统将购买此服务的<span class="Nb"> {$promote['na'].m_count} </span>位企业优先显示在推荐列表中
                                        </p>
                                        </if>
                                        <p>
                                            <span class="gray">费用:</span>
                                            <span class="red">￥{$promote['na'].price}</span>
                                            <span class="gray">/周</span>
                                        </p>
                                        <if condition="$status['hn'] eq 1">
                                           <p class="red">
                                               您已购买此服务，到期时间为{$status['dn']}
                                            </p>
                                        <elseif condition="$status['hn'] eq 0 AND $man neq -1 AND $yan gt 0"/>
                                             <p class="Nb">
                                                已有 {$uan} 人购买此服务,现剩余<span class="red"> {$yan} </span>个名额
                                            </p>
                                        <elseif condition="$status['hn'] eq 0 AND $man neq -1 AND $yan eq 0"/>
                                           <p class="red">
                                                购买名额已满, 您暂时不能购买, 明天再来看看吧
                                            </p>
                                        </if>
                                        <if condition="($status['hn'] eq 0) AND ($man neq -1) AND ($yan eq 0)">
                                             <p>
                                                <span class="gray">请选择购买周数:</span>
                                                <select id="bd1" disabled="disabled">
                                                    <foreach name="san" item="sn">
                                                        <option value="{$sn}">{$sn}</option>
                                                    </foreach>
                                                </select>周
                                            </p>
                                             <div class="btn7 btn_common tc">
                                                <span class="b_lf"></span>
                                                <span class="b_rf"></span>
                                                <a  class="btn gs" href="javascript:;">立即推广</a>
                                            </div>
                                        <elseif condition="$status['hn'] eq 1"/>
                                             <p>
                                                <span class="gray">请选择购买周数:</span>
                                                <select id="bd1" disabled="disabled">
                                                    <foreach name="san" item="sn">
                                                        <option value="{$sn}">{$sn}</option>
                                                    </foreach>
                                                </select>周
                                            </p>
                                             <div class="btn7 btn_common tc">
                                                <span class="b_lf"></span>
                                                <span class="b_rf"></span>
                                                <a  class="btn gs" href="javascript:;">立即推广</a>
                                            </div>
                                        <else/>
                                            <p>
                                                <span class="gray">请选择购买周数:</span>
                                                <select id="bd1">
                                                    <foreach name="san" item="sn">
                                                        <option value="{$sn}">{$sn}</option>
                                                    </foreach>
                                                </select>周
                                            </p>
                                             <div class="btn5 btn_common tc">
                                                <span class="b_lf"></span>
                                                <span class="b_rf"></span>
                                                <a  class="btn white" id="etn_1" href="javascript:;">立即推广</a>
                                            </div>
                                    </if>
                                    </div>
                                </div>
                                <div class="clr"></div>
                            </div>
                        </div>
                        <!--信息推广-->
                        <div class="t_item hidden">
                            <div class="sys_note">系统提示:您若设置了推广信息的查看权限,则仅拥有看权限的角色可见。</div>
                            <div class="mt">
                                <div class="lf r_d">
                                    <div class="r_bg">
                                    </div>
                                    <p class="green">推广记录</p>
                                </div>
                                <div class="lf mp">
                                    <div class="l_s">
                                        <span class="p_t">推广职位</span>
                                        <span class="c_t">共计 <em class="red">{$record['aj']}</em> 条</span>
                                        <span class="u_s"><em class="red">{$record['uj']}</em> 条正在推广</span>
                                        <span>可在 <a href="{$web_root}/recruitment/" class="Nb">我公开的职位</a> 里查看</span>
                                     </div>
                                </div>
                            </div>
                            <div class="cp">
                                <h2 class="Ht info_t">
                                    <span class="gray">
                                       推广方式
                                        <em class="nm">1</em>
                                    </span>
                                    <span>- 角色个人中心特别推荐</span>
                                </h2>
                                <div class="Ct">
                                    <div class="lf cl nl">
                                    </div>
                                    <div class="lf nr">
                                        <p class="gray">说明: 您推广的职位信息将由系统精准推荐到人才、猎头的个人中心。</p>
                                        <p class="gray">操作指南:您可在"<a href="{$web_root}/recruitment/" class="Nb">我公开的职位</a>"列表中选择需要推广的职位,点击职位右侧的推广图标<em class="tg"></em>,选择相应的推荐方式及时间进行付费推广。</p>                                        
                                    </div>
                                </div>
                                <div class="clr"></div>                                                                
                            </div>
                            <div class="cp">
                                <h2 class="Ht info_t">
                                    <span class="gray">
                                       推广方式
                                        <em class="nm">2</em>
                                    </span>
                                    <span>- 职讯推荐列表排序优先</span>
                                </h2>
                                <div class="Ct">
                                    <div class="lf cl Zn">
                                    </div>
                                    <div class="lf nr">
                                       <p class="gray">说明: 您推广的职位信息将由系统精准推荐到人才、猎头的"推荐职位"列表中,并享优先排序权。</p>
                                        <p class="gray">操作指南:您可在"<a href="{$web_root}/recruitment/" class="Nb">我公开的职位</a>"列表中选择需要推广的职位,点击职位右侧的推广图标<em class="tg"></em>,选择相应的推荐方式及时间进行付费推广。</p>                                                                            
                                    </div>
                                </div>
                                <div class="clr"></div>                                                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
       <div class="clr"></div>
      <!-- layout::Public:footersimple::60 -->
    </body>
</html>

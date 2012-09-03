<!DOCTYPE HTML PUBLIC  "-//W3C//DTD HTML 4.01 Transitional//EN"  "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <title>职讯推荐 - {$title}</title>
        <link type="text/css" rel="stylesheet" href="{$voc_root}/css/base_1.0.css"/>
        <link type="text/css" rel="stylesheet" href="{$voc_root}/css/btalent_1.0.css"/>
        <link type="text/css" rel="stylesheet" href="{$js_root}/{$jqlib}/pagination/pagination.css">
        <link type="text/css" rel="stylesheet" href="{$js_root}/{$jqlib}/select-hgs/select-hgs.css"/>
        <link rel="shortcut icon" href="{$voc_root}/imgs/system/favicon.ico"/>
        <!--[if IE 6]>
            <link type="text/css" rel="stylesheet" href="{$voc_root}/css/ie6_1.0.css"/>
        <![endif]-->
        <script type="text/javascript" src="{$voc_root}/config/loader.js" id="loader">22</script>       
        <meta name='keywords' content='{$kwds}'>
        <meta name='description' content='{$desc}'>
    </head>
    <body>
        <!-- layout::{$bheader}::0 -->
        <div class="layout1 tindex">
            <div class="layout1_l">
                <div class="module_1">
                    <!-- layout::Public:tnav::0 -->
                </div>
            </div>
            <div class="layout1_r acc_opion">
                <div class="module_2">
                    <div class="sm_tab">
                        <ul>
                            <li><a href="javascript:;">推荐职位</a></li>
                            <li><a href="javascript:;">推荐企业</a></li>
                            <li><a href="javascript:;">推荐猎头</a></li>
                        </ul>
                        <div class="sub_title">
                            <a href="javascript:;" title="" class="blue">职讯推荐</a>
                        </div>
                    </div>
                    <div class="t_container">
                        <div class="t_item hidden">
                            <div class="t_item_top">
                                <div class="ops_filter" id="jobfilter">
                                    <span>筛选条件：</span>
                                    <span class="filt_type">
                                        <a href="javascript:;" class="red" tp="0">不限</a>
                                        <b>/</b>
                                        <a href="javascript:;" tp="2">兼职</a>
                                        <b>/</b>
                                        <a href="javascript:;" tp="1">全职</a>
                                    </span>
                                    <span class="ops filt_role">
                                        <a href="javascript:;" rol="0" class="red">不限</a>
                                        <b>/</b>
                                        <a href="javascript:;" rol="3">猎头发布</a>
                                        <b>/</b>
                                        <a href="javascript:;" rol="2">企业发布</a>
                                    </span>
                                </div>
                            </div>
                            <ul class="mlist hgstemp" id="joblist">
                                <li class="loading">
                                    <p></p>
                                </li>
                            </ul>
                            <div id="pagination1" class="pages"></div>
                        </div>
                        <div class="t_item hidden">
                            <div class="t_item_top">
                                <div class="ops_filter" id="jobfilter">
                                    <span class="pops lf">地区选择:</span>
                                    <input id="plafilter" class="mselect lf" readonly="true" type="text"/>
                                </div>
                            </div>
                            <div class="clr"></div>
                            <ul class="mlist hgstemp" id="reccom">
                                <li class="loading">
                                    <p></p>
                                </li>
                            </ul>
                            <div id="pagination2" class="pages"></div>
                        </div>
                        <div class="t_item hidden">
                            <div class="t_item_top">
                                <div class="ops_filter" id="rolefilter">
                                    <span>筛选条件：</span>
                                    <span class="filt_role">
                                        <a href="javascript:;" class="red" rel="0">不限</a>
                                        <b>/</b>
                                        <a href="javascript:;" rel="1">个人</a>
                                        <b>/</b>
                                        <a href="javascript:;" rel="2">公司成员</a>
                                    </span>
                                    <div class="s_r en_c_r">
                                        <span>
                                            地区选择:
                                        </span>
                                        <div class="chos_area">
                                            <input id="from_area" class="mselect" readonly type="text"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="mlist hgstemp" id="recagent">
                                <li class="loading">
                                    <p></p>
                                </li>
                            </ul>
                            <div id="pagination3" class="pages"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clr"></div>
        <!-- layout::Public:comtool::60 -->
        <!-- layout::Public:footersimple::60 -->
    </body>
</html>

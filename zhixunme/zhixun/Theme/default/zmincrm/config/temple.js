TEMPLE={C_T001:'<tr><td class="cbox"><input type="checkbox" class="chos" name="ops" value="{id}"/></td><td class="nd"><p><span class="red">[{type}]</span><a href="'+WEBROOT+'/rhuman/{id}" target="_blank" title="" class="blue">{name}</a></p><p class="province">{province}</p></td><td><div class="ct">{cer} </div><div class="ct">{certs}{title}<p class="red">¥ {money} 万/年</p> </div></td><td> <p><span class="gray">手机:</span> <span>{mobile}</span></p><p><span class="gray">QQ:</span> <span>{qq}</span> </p></td><td><p>{source}</p></td><td><p>{period}</p> </td> <td class="last">{notes}</td></tr>',C_T002:'<tr class="bhead"><th class="t_f"></th><th class="t_01">姓名    所在地</th><th class="t_02">证书/职称证/报价</th><th class="t_03">联系方式</th><th class="t_04">来源</th><th class="t_05">阶段</th><th class="t_06 last">交易记录</th></tr>',C_T003:'<tr><td class="cbox"><input type="checkbox" class="chos" name="cnames" value="{id}"/></td><td class="nd"><p><a href="'+WEBROOT+'/rcompany/{id}"  target="_blank" title="" class="blue">{name}</a></p><p class="province">{province}</p></td><td>{certs}</td><td> <p><span class="gray">手机:</span> <span>{mobile}</span></p> <p><span class="gray">座机:</span> <span>{phone}</span></p><p> <span class="gray">QQ:</span><span>{qq}</span> </p></td><td><p>{source}</p></td><td><p>{period}</p> </td> <td class="last">{notes}</td></tr>',C_T004:'<tr class="bh"><th class="t_f"></th><th class="t_01">企业名  所在地</th><th class="t_02">(需求证书/报价/用途)</th><th class="t_03">联系方式</th><th class="t_04">来源</th><th class="t_05">阶段</th><th class="t_06 last">交易记录</th></tr>',C_T005:'<div class="qualitem upsats"><span><input type="text" readonly value="{cert}" class="cqbox"/><a href="javascript:;" class="sqv cmon hidden">保存</a></span><a href="javascript:;" class="delcq rf" rel="{qid}" style="display: inline; ">删除</a><a href="javascript:;" class="updecq rf"  style="display:inline;"rel="{cid}">修改</a><a href="javascript:;" class="addcq rf" style="display: inline; ">添加</a></div>',C_T006:'<div class="quire_item updatedata"><table class="tb_cm require"><tr><td class="ltd"><span class="gray">资质证书：</span></td><td class="requalis" colspan="3"><div class="qualitem"><input type="hidden" name="rct" value="{ct}"><input type="hidden" name="regct" value="{gt}"><input type="hidden" name="nbm" value="{rd}"><input type="text" id="quali{len}" class="mselect qquali" value="{cert}" readonly style="cursor: default;"></div></td></tr><tr><td class="ltd"><span class="gray">人才聘用费：</span></td><td>¥ <input type="text" readonly  value="{fee}" class="fees com"> 万 /<input type="text" readonly  value="{year}" class="years com"> 年·人</td><td class="ltd"><span class="gray">服务费：</span></td><td>¥ <input type="text" readonly value="{sfee}" class="sfee"> 元/人</td></tr><tr><td class="ltd"><span class="gray">是否含税 : </span></td><td><span class="txtinfo" val="{is_tax}">{tax_tex}</span><input type="radio" class="hidden tax" value="0" checked="checked"><span class="txthid hidden ">否</span><input type="radio" class="hidden tax" value="1"><span class="txthid hidden ">是</span></td><td class="ltd"><span class="gray">证书用途：</span></td><td><div val="{usage}" class="csouce">{usage_text}</div><select class="hidden usage"><option value="1">升级</option><option value="2">年检</option><option value="3">投标</option></select></td></tr><tr><td class="ltd"><span class="gray">证书选项：</span></td><td><span class="txtinfo" val="{_isful}">{isful_text}</span><input type="radio" class="fl_tm hidden" value="1"><span class="txthid hidden">兼职</span><input type="radio" class="fl_tm hidden" value="2"><span class="txthid hidden">全职</span></td></tr><tr><td class="ltd ltop"><span class="gray lf">补充说明：</span></td><td colspan="3"><div class="adr_deail1 hidden">{sub}</div><textarea readonly="" class="cin lf">{sub1}</textarea></td></tr></table><div class="dbtn"><a href="javascript:;" title="修改" class="blue upquire" style="display:inline" rel="{demid1}">修改</a> <a href="javascript:;" title="修改" class="blue svquire" rel="{demid2}">保存</a><a href="javascript:;" title="添加" class="blue addquire">添加</a><a href="javascript:;" title="删除" class="blue delequire" style="display:inline" rel="{demid3}">删除</a></div></div>',C_T007:'<tr class="apd"><td class="ltd"><span class="gray">退款时间：</span></td><td><div class="tm"><input type="text" id="{ky}" readonly value=""  class="refund_date date" /></div></td><td class="ltd"> <span class="gray">退款金额：</span></td><td>¥ <input type="text"  class="refd_money sfee com" value=""/> 元  </td> </tr> <tr class="apd"><td class="ltd"><span class="gray">退款企业签字人：</span> </td><td><input type="text" value=""  class="signer" /></td><td class="ltd"><span class="gray">退款我方负责人：</span></td><td> <input type="text" class="agenter" value=""/> </td></tr><tr class="apd"><td class="ltd ltop"><span class="gray">退款原因：</span></td><td colspan="3"><div class="adr_deail1"><span class="fctr"></span></div><span></span><textarea class="cin reson"></textarea></td></tr>',T00084:'<div class="qualitem"><span>{cert}</span><a href="javascript:;" class="addqual rf" style="display: inline; ">添加</a><a href="javascript:;" class="delqual rf" cid="{cid}" style="display: inline; ">删除</a></div>'};
function Pool(){}Pool.prototype={getDataList:function(i,k,g,c,e,j,h,d,b,f,a){var l={url:WEBURL.GetAgentList,params:"label="+i+"&role_id="+k+"&auth_code="+g+"&province="+c+"&city="+e+"&key="+j+"&page="+h+"&order="+d,sucrender:f,failrender:a};$("div").attr("pageid",h);HGS.Base.HAjax(l)},TanGetAgentList:function(g,c,e,b,h,f,a){var d={url:WEBURL.GetTanAgentList,params:"page="+g+"&size="+c+"&type="+e+"&addr_province_code="+b+"&addr_city_code="+h,sucrender:f,failrender:a};HGS.Base.HAjax(d)},CompanyGetAgentList:function(f,i,g,c,e,b,d,a){var h={url:WEBURL.GetCompnayAgentList,params:"page="+f+"&size="+i+"&type="+g+"&addr_province_code="+c+"&addr_city_code="+e+"&service_category_id="+b,sucrender:d,failrender:a};HGS.Base.HAjax(h)},ComGetTalentList:function(p,o,n,m,l,j,i,k,h){var q={url:WEBURL.EGetTanlentList,params:"page="+p+"&size="+i+"&job_category="+o+"&register_case="+n+"&publisher_role="+m+"&register_province_ids="+l+"&register_certificate_id="+j,sucrender:k,failrender:h};HGS.Base.HAjax(q)},TGetCompanyList:function(f,e,k,j,i,g){var h={url:WEBURL.TGetCompanyList,params:"page="+f+"&size="+e+"&company_province_code="+k+"&company_city_code="+j,sucrender:i,failrender:g};HGS.Base.HAjax(h)},ApplyAgentResme:function(e,c,d,a){var b={url:WEBURL.DoapplyAgentResum,params:"agent_id="+e+"&job_category="+c,sucrender:d,failrender:a};HGS.Base.HAjax(b)},FGetTalents:function(d,c,g,e){var f={url:WEBURL.FGetTalents,params:"page="+d+"&size="+c,sucrender:g,failrender:e};HGS.Base.HAjax(f)},GetFocusPersonList:function(d,f,b,e,a){var c={url:WEBURL.GetFocsPerson,params:"page="+f+"&size="+b+"&type="+d,sucrender:e,failrender:a};HGS.Base.HAjax(c)},GetNetworkDynamicLis:function(f,b,d,e,a){var c={url:WEBURL.GetDymicLis,params:"page="+f+"&size="+b+"&type="+d,sucrender:e,failrender:a};HGS.Base.HAjax(c)},GetRecHumansLis:function(c,a){var b={url:WEBURL.GetChangeHuman,params:"",sucrender:c,failrender:a};HGS.Base.HAjax(b)},GetRecMidmanLis:function(c,a){var b={url:WEBURL.GetChangeMidman,params:"",sucrender:c,failrender:a};HGS.Base.HAjax(b)},ClosePopu:function(){var a={url:WEBURL.ClosePopu,params:"",sucrender:null,failrender:null};HGS.Base.HAjax(a)}};
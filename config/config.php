<?php
$cookie_data = array(); $display_filters = array(); $UA = $_SERVER['HTTP_USER_AGENT'];
if(stristr($UA, "Mobile")){ $DEVICE_TYPE = "MOBILE"; }
$settings = simplexml_load_file('c:/inetpub/wwwroot/slimui/slimui.config');

foreach($settings[0]->config as $key => $value)
{    
	foreach($value[0] as $k => $v)
    {
        define(strtoupper($k),$v);	    
    }
}
foreach($settings[0]->appsmenu_filters as $key => $value)
{
	foreach($value[0] as $k => $v)
    {        
		$display_filters[$k] = $v;
    }
}
foreach($settings[0]->cookie as $key => $value)
{
	foreach($value[0] as $k => $v)
    {        
		array_push($cookie_data, $v);
    }
}
?>
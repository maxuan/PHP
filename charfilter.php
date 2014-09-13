<?php
function input($val)
{
    $val = str_replace("<",'&lt;',$val);
    $val = str_replace(">",'&gt;',$val);
    $val = str_replace('"','&quot;',$val);
    $val = str_replace('"','&ldquo;',$val);
    $val = str_replace('"','&rdquo;',$val);
    $val = str_replace("'",'&lsquo;',$val);
    $val = str_replace("'",'&rsquo;',$val);
    return $val;
}
function output($val)
{
    $val = str_replace('&lt;',"<",$val);
    $val = str_replace('&gt;',">",$val);
    $val = str_replace('&quot;','"',$val);
    $val = str_replace('&ldquo;','"',$val);
    $val = str_replace('&rdquo;','"',$val);
    $val = str_replace('&lsquo;',"'",$val);
    $val = str_replace('&rsquo;',"'",$val);
    return $val;
}
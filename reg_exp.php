<?php

//反向引用
$str = '[url]1.gif[/url][url]2.gif[/url][url]3.gif[/url]';
$s = preg_replace("#\[url\](?<WORD>\d\.gif)\[\/url\]#","<img src=http://image.ai.com/upload/$1>",$str);
var_dump($s);
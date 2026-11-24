<?php
$dalTablemailcontents = array();
$dalTablemailcontents["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablemailcontents["mtitle"] = array("type"=>200,"varname"=>"mtitle", "name" => "mtitle", "autoInc" => "0");
$dalTablemailcontents["mailpaths"] = array("type"=>201,"varname"=>"mailpaths", "name" => "mailpaths", "autoInc" => "0");
$dalTablemailcontents["mailsource"] = array("type"=>200,"varname"=>"mailsource", "name" => "mailsource", "autoInc" => "0");
$dalTablemailcontents["uploadedby"] = array("type"=>200,"varname"=>"uploadedby", "name" => "uploadedby", "autoInc" => "0");
$dalTablemailcontents["maildate"] = array("type"=>7,"varname"=>"maildate", "name" => "maildate", "autoInc" => "0");
$dalTablemailcontents["id"]["key"]=true;

$dal_info["mailtracker_at_localhost__mailcontents"] = &$dalTablemailcontents;
?>
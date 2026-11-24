<?php
$dalTabletransitmail = array();
$dalTabletransitmail["mailid"] = array("type"=>3,"varname"=>"mailid", "name" => "mailid", "autoInc" => "1");
$dalTabletransitmail["mtitle"] = array("type"=>200,"varname"=>"mtitle", "name" => "mtitle", "autoInc" => "0");
$dalTabletransitmail["mailsource"] = array("type"=>200,"varname"=>"mailsource", "name" => "mailsource", "autoInc" => "0");
$dalTabletransitmail["maildestination"] = array("type"=>200,"varname"=>"maildestination", "name" => "maildestination", "autoInc" => "0");
$dalTabletransitmail["currentoffice"] = array("type"=>200,"varname"=>"currentoffice", "name" => "currentoffice", "autoInc" => "0");
$dalTabletransitmail["datereceived"] = array("type"=>7,"varname"=>"datereceived", "name" => "datereceived", "autoInc" => "0");
$dalTabletransitmail["receivedby"] = array("type"=>200,"varname"=>"receivedby", "name" => "receivedby", "autoInc" => "0");
$dalTabletransitmail["dateleft"] = array("type"=>7,"varname"=>"dateleft", "name" => "dateleft", "autoInc" => "0");
$dalTabletransitmail["nextoffice"] = array("type"=>200,"varname"=>"nextoffice", "name" => "nextoffice", "autoInc" => "0");
$dalTabletransitmail["sentby"] = array("type"=>200,"varname"=>"sentby", "name" => "sentby", "autoInc" => "0");
$dalTabletransitmail["mailid"]["key"]=true;

$dal_info["mailtracker_at_localhost__transitmail"] = &$dalTabletransitmail;
?>
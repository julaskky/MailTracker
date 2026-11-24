<?php
$dalTableloginugrights = array();
$dalTableloginugrights["TableName"] = array("type"=>200,"varname"=>"TableName", "name" => "TableName", "autoInc" => "0");
$dalTableloginugrights["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTableloginugrights["AccessMask"] = array("type"=>200,"varname"=>"AccessMask", "name" => "AccessMask", "autoInc" => "0");
$dalTableloginugrights["Page"] = array("type"=>201,"varname"=>"Page", "name" => "Page", "autoInc" => "0");
$dalTableloginugrights["TableName"]["key"]=true;
$dalTableloginugrights["GroupID"]["key"]=true;

$dal_info["mailtracker_at_localhost__loginugrights"] = &$dalTableloginugrights;
?>
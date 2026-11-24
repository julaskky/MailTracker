<?php
$dalTabletrackmails = array();
$dalTabletrackmails["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTabletrackmails["mailid"] = array("type"=>200,"varname"=>"mailid", "name" => "mailid", "autoInc" => "0");
$dalTabletrackmails["title"] = array("type"=>200,"varname"=>"title", "name" => "title", "autoInc" => "0");
$dalTabletrackmails["currentoffice"] = array("type"=>200,"varname"=>"currentoffice", "name" => "currentoffice", "autoInc" => "0");
$dalTabletrackmails["datereceived"] = array("type"=>7,"varname"=>"datereceived", "name" => "datereceived", "autoInc" => "0");
$dalTabletrackmails["id"]["key"]=true;

$dal_info["mailtracker_at_localhost__trackmails"] = &$dalTabletrackmails;
?>
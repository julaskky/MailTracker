<?php
$dalTablestaffs = array();
$dalTablestaffs["staffid"] = array("type"=>200,"varname"=>"staffid", "name" => "staffid", "autoInc" => "0");
$dalTablestaffs["staffname"] = array("type"=>200,"varname"=>"staffname", "name" => "staffname", "autoInc" => "0");
$dalTablestaffs["gender"] = array("type"=>200,"varname"=>"gender", "name" => "gender", "autoInc" => "0");
$dalTablestaffs["office"] = array("type"=>200,"varname"=>"office", "name" => "office", "autoInc" => "0");
$dalTablestaffs["rank"] = array("type"=>200,"varname"=>"rank", "name" => "rank", "autoInc" => "0");
$dalTablestaffs["staffid"]["key"]=true;

$dal_info["mailtracker_at_localhost__staffs"] = &$dalTablestaffs;
?>
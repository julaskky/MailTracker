<?php
$dalTableloginuggroups = array();
$dalTableloginuggroups["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "1");
$dalTableloginuggroups["Label"] = array("type"=>200,"varname"=>"Label", "name" => "Label", "autoInc" => "0");
$dalTableloginuggroups["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTableloginuggroups["Comment"] = array("type"=>201,"varname"=>"Comment", "name" => "Comment", "autoInc" => "0");
$dalTableloginuggroups["GroupID"]["key"]=true;

$dal_info["mailtracker_at_localhost__loginuggroups"] = &$dalTableloginuggroups;
?>
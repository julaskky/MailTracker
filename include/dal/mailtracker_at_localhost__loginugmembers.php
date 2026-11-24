<?php
$dalTableloginugmembers = array();
$dalTableloginugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName", "autoInc" => "0");
$dalTableloginugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTableloginugmembers["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTableloginugmembers["UserName"]["key"]=true;
$dalTableloginugmembers["GroupID"]["key"]=true;
$dalTableloginugmembers["Provider"]["key"]=true;

$dal_info["mailtracker_at_localhost__loginugmembers"] = &$dalTableloginugmembers;
?>
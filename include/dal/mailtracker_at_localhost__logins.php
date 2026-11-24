<?php
$dalTablelogins = array();
$dalTablelogins["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablelogins["userusername"] = array("type"=>200,"varname"=>"userusername", "name" => "userusername", "autoInc" => "0");
$dalTablelogins["userpassword"] = array("type"=>200,"varname"=>"userpassword", "name" => "userpassword", "autoInc" => "0");
$dalTablelogins["fullname"] = array("type"=>200,"varname"=>"fullname", "name" => "fullname", "autoInc" => "0");
$dalTablelogins["emailaddress"] = array("type"=>200,"varname"=>"emailaddress", "name" => "emailaddress", "autoInc" => "0");
$dalTablelogins["phonenumber"] = array("type"=>200,"varname"=>"phonenumber", "name" => "phonenumber", "autoInc" => "0");
$dalTablelogins["id"]["key"]=true;

$dal_info["mailtracker_at_localhost__logins"] = &$dalTablelogins;
?>
<?php
$dalTableoffices = array();
$dalTableoffices["officeid"] = array("type"=>3,"varname"=>"officeid", "name" => "officeid", "autoInc" => "1");
$dalTableoffices["officename"] = array("type"=>200,"varname"=>"officename", "name" => "officename", "autoInc" => "0");
$dalTableoffices["officeid"]["key"]=true;

$dal_info["mailtracker_at_localhost__offices"] = &$dalTableoffices;
?>
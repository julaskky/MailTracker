<?php
$dalTableranks = array();
$dalTableranks["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableranks["rank"] = array("type"=>200,"varname"=>"rank", "name" => "rank", "autoInc" => "0");
$dalTableranks["responsibilities"] = array("type"=>201,"varname"=>"responsibilities", "name" => "responsibilities", "autoInc" => "0");
$dalTableranks["id"]["key"]=true;

$dal_info["mailtracker_at_localhost__ranks"] = &$dalTableranks;
?>
<?php
$topsview_mails = array();
		$topsview_mails["selectList"] = array(
		"subtype" => "sql",
		"sql" => "SELECT * FROM tableName",
		"skipFilter" => "0",
		"skipOrder" => "0"

	);
		$tables_data["View Mails"][".operations"] = &$topsview_mails;
?>
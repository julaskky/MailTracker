<?php
$tdataview_mails = array();
$tdataview_mails[".searchableFields"] = array();
$tdataview_mails[".ShortName"] = "view_mails";
$tdataview_mails[".OwnerID"] = "";
$tdataview_mails[".OriginalTable"] = "View Mails";


$tdataview_mails[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"]}" );
$tdataview_mails[".originalPagesByType"] = $tdataview_mails[".pagesByType"];
$tdataview_mails[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"]}" ) );
$tdataview_mails[".originalPages"] = $tdataview_mails[".pages"];
$tdataview_mails[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\"}" );
$tdataview_mails[".originalDefaultPages"] = $tdataview_mails[".defaultPages"];

//	field labels
$fieldLabelsview_mails = array();
$fieldToolTipsview_mails = array();
$pageTitlesview_mails = array();
$placeHoldersview_mails = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsview_mails["English"] = array();
	$fieldToolTipsview_mails["English"] = array();
	$placeHoldersview_mails["English"] = array();
	$pageTitlesview_mails["English"] = array();
	if (count($fieldToolTipsview_mails["English"]))
		$tdataview_mails[".isUseToolTips"] = true;
}


	$tdataview_mails[".NCSearch"] = true;



$tdataview_mails[".shortTableName"] = "view_mails";
$tdataview_mails[".nSecOptions"] = 0;

$tdataview_mails[".mainTableOwnerID"] = "";
$tdataview_mails[".entityType"] = 6;
$tdataview_mails[".connId"] = "mailtracker_at_localhost";


$tdataview_mails[".strOriginalTableName"] = "View Mails";

	



$tdataview_mails[".showAddInPopup"] = false;

$tdataview_mails[".showEditInPopup"] = false;

$tdataview_mails[".showViewInPopup"] = false;

$tdataview_mails[".listAjax"] = false;
//	temporary
//$tdataview_mails[".listAjax"] = false;

	$tdataview_mails[".audit"] = false;

	$tdataview_mails[".locking"] = false;


$pages = $tdataview_mails[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataview_mails[".edit"] = true;
	$tdataview_mails[".afterEditAction"] = 1;
	$tdataview_mails[".closePopupAfterEdit"] = 1;
	$tdataview_mails[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataview_mails[".add"] = true;
$tdataview_mails[".afterAddAction"] = 1;
$tdataview_mails[".closePopupAfterAdd"] = 1;
$tdataview_mails[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataview_mails[".list"] = true;
}



$tdataview_mails[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataview_mails[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataview_mails[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataview_mails[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataview_mails[".printFriendly"] = true;
}



$tdataview_mails[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataview_mails[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataview_mails[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataview_mails[".isUseAjaxSuggest"] = false;





$tdataview_mails[".ajaxCodeSnippetAdded"] = false;

$tdataview_mails[".buttonsAdded"] = false;

$tdataview_mails[".addPageEvents"] = false;

// use timepicker for search panel
$tdataview_mails[".isUseTimeForSearch"] = false;


$tdataview_mails[".badgeColor"] = "7B68EE";


$tdataview_mails[".allSearchFields"] = array();
$tdataview_mails[".filterFields"] = array();
$tdataview_mails[".requiredSearchFields"] = array();





$tdataview_mails[".printerPageOrientation"] = 0;
$tdataview_mails[".nPrinterPageScale"] = 100;

$tdataview_mails[".nPrinterSplitRecords"] = 40;

$tdataview_mails[".geocodingEnabled"] = false;










$tdataview_mails[".pageSize"] = 20;

$tdataview_mails[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataview_mails[".strOrderBy"] = $tstrOrderBy;

$tdataview_mails[".orderindexes"] = array();
	foreach ( my_json_decode("[]") as $orderItem ) {
		$tdataview_mails[".orderindexes"][] = array(0, ($orderItem["dir"] == "a" ? "ASC" : "DESC"), $orderItem["field"]);
	}


$tdataview_mails[".sqlHead"] = "";
$tdataview_mails[".sqlFrom"] = "";
$tdataview_mails[".sqlWhereExpr"] = "";
$tdataview_mails[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataview_mails[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataview_mails[".arrGroupsPerPage"] = $arrGPP;

$tdataview_mails[".highlightSearchResults"] = true;

$tableKeysview_mails = array();
$tdataview_mails[".Keys"] = $tableKeysview_mails;


$tdataview_mails[".hideMobileList"] = array();






$tables_data["View Mails"]=&$tdataview_mails;
$field_labels["View_Mails"] = &$fieldLabelsview_mails;
$fieldToolTips["View_Mails"] = &$fieldToolTipsview_mails;
$placeHolders["View_Mails"] = &$placeHoldersview_mails;
$page_titles["View_Mails"] = &$pageTitlesview_mails;


changeTextControlsToDate( "View Mails" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["View Mails"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["View Mails"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//


require_once( getabspath( "include/view_mails_ops.php" ) );



	
		;



$tdataview_mails[".sqlquery"] = $queryData_view_mails;



$tdataview_mails[".hasEvents"] = false;

?>
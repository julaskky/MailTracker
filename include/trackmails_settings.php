<?php
$tdatatrackmails = array();
$tdatatrackmails[".searchableFields"] = array();
$tdatatrackmails[".ShortName"] = "trackmails";
$tdatatrackmails[".OwnerID"] = "";
$tdatatrackmails[".OriginalTable"] = "trackmails";


$tdatatrackmails[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatrackmails[".originalPagesByType"] = $tdatatrackmails[".pagesByType"];
$tdatatrackmails[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatrackmails[".originalPages"] = $tdatatrackmails[".pages"];
$tdatatrackmails[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatrackmails[".originalDefaultPages"] = $tdatatrackmails[".defaultPages"];

//	field labels
$fieldLabelstrackmails = array();
$fieldToolTipstrackmails = array();
$pageTitlestrackmails = array();
$placeHolderstrackmails = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstrackmails["English"] = array();
	$fieldToolTipstrackmails["English"] = array();
	$placeHolderstrackmails["English"] = array();
	$pageTitlestrackmails["English"] = array();
	$fieldLabelstrackmails["English"]["title"] = "Title";
	$fieldToolTipstrackmails["English"]["title"] = "";
	$placeHolderstrackmails["English"]["title"] = "";
	$fieldLabelstrackmails["English"]["currentoffice"] = "Current Office";
	$fieldToolTipstrackmails["English"]["currentoffice"] = "";
	$placeHolderstrackmails["English"]["currentoffice"] = "";
	$fieldLabelstrackmails["English"]["datereceived"] = "Date Received";
	$fieldToolTipstrackmails["English"]["datereceived"] = "";
	$placeHolderstrackmails["English"]["datereceived"] = "";
	if (count($fieldToolTipstrackmails["English"]))
		$tdatatrackmails[".isUseToolTips"] = true;
}


	$tdatatrackmails[".NCSearch"] = true;



$tdatatrackmails[".shortTableName"] = "trackmails";
$tdatatrackmails[".nSecOptions"] = 0;

$tdatatrackmails[".mainTableOwnerID"] = "";
$tdatatrackmails[".entityType"] = 0;
$tdatatrackmails[".connId"] = "mailtracker_at_localhost";


$tdatatrackmails[".strOriginalTableName"] = "trackmails";

	



$tdatatrackmails[".showAddInPopup"] = false;

$tdatatrackmails[".showEditInPopup"] = false;

$tdatatrackmails[".showViewInPopup"] = false;

$tdatatrackmails[".listAjax"] = false;
//	temporary
//$tdatatrackmails[".listAjax"] = false;

	$tdatatrackmails[".audit"] = false;

	$tdatatrackmails[".locking"] = false;


$pages = $tdatatrackmails[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatrackmails[".edit"] = true;
	$tdatatrackmails[".afterEditAction"] = 1;
	$tdatatrackmails[".closePopupAfterEdit"] = 1;
	$tdatatrackmails[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatrackmails[".add"] = true;
$tdatatrackmails[".afterAddAction"] = 1;
$tdatatrackmails[".closePopupAfterAdd"] = 1;
$tdatatrackmails[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatrackmails[".list"] = true;
}



$tdatatrackmails[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatrackmails[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatrackmails[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatrackmails[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatrackmails[".printFriendly"] = true;
}



$tdatatrackmails[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatrackmails[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatrackmails[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatrackmails[".isUseAjaxSuggest"] = true;





$tdatatrackmails[".ajaxCodeSnippetAdded"] = false;

$tdatatrackmails[".buttonsAdded"] = false;

$tdatatrackmails[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatrackmails[".isUseTimeForSearch"] = false;


$tdatatrackmails[".badgeColor"] = "BC8F8F";


$tdatatrackmails[".allSearchFields"] = array();
$tdatatrackmails[".filterFields"] = array();
$tdatatrackmails[".requiredSearchFields"] = array();

$tdatatrackmails[".googleLikeFields"] = array();
$tdatatrackmails[".googleLikeFields"][] = "title";
$tdatatrackmails[".googleLikeFields"][] = "currentoffice";
$tdatatrackmails[".googleLikeFields"][] = "datereceived";



$tdatatrackmails[".tableType"] = "list";

$tdatatrackmails[".printerPageOrientation"] = 0;
$tdatatrackmails[".nPrinterPageScale"] = 100;

$tdatatrackmails[".nPrinterSplitRecords"] = 40;

$tdatatrackmails[".geocodingEnabled"] = false;










$tdatatrackmails[".pageSize"] = 20;

$tdatatrackmails[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatrackmails[".strOrderBy"] = $tstrOrderBy;

$tdatatrackmails[".orderindexes"] = array();


$tdatatrackmails[".sqlHead"] = "SELECT title,  currentoffice,  datereceived";
$tdatatrackmails[".sqlFrom"] = "FROM trackmails";
$tdatatrackmails[".sqlWhereExpr"] = "";
$tdatatrackmails[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatrackmails[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatrackmails[".arrGroupsPerPage"] = $arrGPP;

$tdatatrackmails[".highlightSearchResults"] = true;

$tableKeystrackmails = array();
$tdatatrackmails[".Keys"] = $tableKeystrackmails;


$tdatatrackmails[".hideMobileList"] = array();




//	title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "title";
	$fdata["GoodName"] = "title";
	$fdata["ownerTable"] = "trackmails";
	$fdata["Label"] = GetFieldLabel("trackmails","title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "title";

		$fdata["sourceSingle"] = "title";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "title";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=100";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatrackmails["title"] = $fdata;
		$tdatatrackmails[".searchableFields"][] = "title";
//	currentoffice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "currentoffice";
	$fdata["GoodName"] = "currentoffice";
	$fdata["ownerTable"] = "trackmails";
	$fdata["Label"] = GetFieldLabel("trackmails","currentoffice");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "currentoffice";

		$fdata["sourceSingle"] = "currentoffice";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "currentoffice";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatrackmails["currentoffice"] = $fdata;
		$tdatatrackmails[".searchableFields"][] = "currentoffice";
//	datereceived
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "datereceived";
	$fdata["GoodName"] = "datereceived";
	$fdata["ownerTable"] = "trackmails";
	$fdata["Label"] = GetFieldLabel("trackmails","datereceived");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "datereceived";

		$fdata["sourceSingle"] = "datereceived";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "datereceived";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatrackmails["datereceived"] = $fdata;
		$tdatatrackmails[".searchableFields"][] = "datereceived";


$tables_data["trackmails"]=&$tdatatrackmails;
$field_labels["trackmails"] = &$fieldLabelstrackmails;
$fieldToolTips["trackmails"] = &$fieldToolTipstrackmails;
$placeHolders["trackmails"] = &$placeHolderstrackmails;
$page_titles["trackmails"] = &$pageTitlestrackmails;


changeTextControlsToDate( "trackmails" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["trackmails"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["trackmails"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_trackmails()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "title,  currentoffice,  datereceived";
$proto0["m_strFrom"] = "FROM trackmails";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "title",
	"m_strTable" => "trackmails",
	"m_srcTableName" => "trackmails"
));

$proto6["m_sql"] = "title";
$proto6["m_srcTableName"] = "trackmails";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "currentoffice",
	"m_strTable" => "trackmails",
	"m_srcTableName" => "trackmails"
));

$proto8["m_sql"] = "currentoffice";
$proto8["m_srcTableName"] = "trackmails";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "datereceived",
	"m_strTable" => "trackmails",
	"m_srcTableName" => "trackmails"
));

$proto10["m_sql"] = "datereceived";
$proto10["m_srcTableName"] = "trackmails";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "trackmails";
$proto13["m_srcTableName"] = "trackmails";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "mailid";
$proto13["m_columns"][] = "title";
$proto13["m_columns"][] = "currentoffice";
$proto13["m_columns"][] = "datereceived";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "trackmails";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "trackmails";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="trackmails";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_trackmails = createSqlQuery_trackmails();


	
		;

			

$tdatatrackmails[".sqlquery"] = $queryData_trackmails;



$tdatatrackmails[".hasEvents"] = false;

?>
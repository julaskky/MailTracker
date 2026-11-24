<?php
$tdataoffices = array();
$tdataoffices[".searchableFields"] = array();
$tdataoffices[".ShortName"] = "offices";
$tdataoffices[".OwnerID"] = "";
$tdataoffices[".OriginalTable"] = "offices";


$tdataoffices[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataoffices[".originalPagesByType"] = $tdataoffices[".pagesByType"];
$tdataoffices[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataoffices[".originalPages"] = $tdataoffices[".pages"];
$tdataoffices[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdataoffices[".originalDefaultPages"] = $tdataoffices[".defaultPages"];

//	field labels
$fieldLabelsoffices = array();
$fieldToolTipsoffices = array();
$pageTitlesoffices = array();
$placeHoldersoffices = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsoffices["English"] = array();
	$fieldToolTipsoffices["English"] = array();
	$placeHoldersoffices["English"] = array();
	$pageTitlesoffices["English"] = array();
	$fieldLabelsoffices["English"]["officeid"] = "Officeid";
	$fieldToolTipsoffices["English"]["officeid"] = "";
	$placeHoldersoffices["English"]["officeid"] = "";
	$fieldLabelsoffices["English"]["officename"] = "Office Name";
	$fieldToolTipsoffices["English"]["officename"] = "";
	$placeHoldersoffices["English"]["officename"] = "";
	$pageTitlesoffices["English"]["add"] = "Add new";
	$pageTitlesoffices["English"]["edit"] = "Edit";
	$pageTitlesoffices["English"]["search"] = "Advanced search";
	if (count($fieldToolTipsoffices["English"]))
		$tdataoffices[".isUseToolTips"] = true;
}


	$tdataoffices[".NCSearch"] = true;



$tdataoffices[".shortTableName"] = "offices";
$tdataoffices[".nSecOptions"] = 0;

$tdataoffices[".mainTableOwnerID"] = "";
$tdataoffices[".entityType"] = 0;
$tdataoffices[".connId"] = "mailtracker_at_localhost";


$tdataoffices[".strOriginalTableName"] = "offices";

	



$tdataoffices[".showAddInPopup"] = false;

$tdataoffices[".showEditInPopup"] = false;

$tdataoffices[".showViewInPopup"] = false;

$tdataoffices[".listAjax"] = false;
//	temporary
//$tdataoffices[".listAjax"] = false;

	$tdataoffices[".audit"] = false;

	$tdataoffices[".locking"] = false;


$pages = $tdataoffices[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataoffices[".edit"] = true;
	$tdataoffices[".afterEditAction"] = 1;
	$tdataoffices[".closePopupAfterEdit"] = 1;
	$tdataoffices[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataoffices[".add"] = true;
$tdataoffices[".afterAddAction"] = 1;
$tdataoffices[".closePopupAfterAdd"] = 1;
$tdataoffices[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataoffices[".list"] = true;
}



$tdataoffices[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataoffices[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataoffices[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataoffices[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataoffices[".printFriendly"] = true;
}



$tdataoffices[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataoffices[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataoffices[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataoffices[".isUseAjaxSuggest"] = true;





$tdataoffices[".ajaxCodeSnippetAdded"] = false;

$tdataoffices[".buttonsAdded"] = false;

$tdataoffices[".addPageEvents"] = false;

// use timepicker for search panel
$tdataoffices[".isUseTimeForSearch"] = false;


$tdataoffices[".badgeColor"] = "00C2C5";


$tdataoffices[".allSearchFields"] = array();
$tdataoffices[".filterFields"] = array();
$tdataoffices[".requiredSearchFields"] = array();

$tdataoffices[".googleLikeFields"] = array();
$tdataoffices[".googleLikeFields"][] = "officeid";
$tdataoffices[".googleLikeFields"][] = "officename";



$tdataoffices[".tableType"] = "list";

$tdataoffices[".printerPageOrientation"] = 0;
$tdataoffices[".nPrinterPageScale"] = 100;

$tdataoffices[".nPrinterSplitRecords"] = 40;

$tdataoffices[".geocodingEnabled"] = false;










$tdataoffices[".pageSize"] = 20;

$tdataoffices[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataoffices[".strOrderBy"] = $tstrOrderBy;

$tdataoffices[".orderindexes"] = array();


$tdataoffices[".sqlHead"] = "SELECT officeid,  	officename";
$tdataoffices[".sqlFrom"] = "FROM offices";
$tdataoffices[".sqlWhereExpr"] = "";
$tdataoffices[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataoffices[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataoffices[".arrGroupsPerPage"] = $arrGPP;

$tdataoffices[".highlightSearchResults"] = true;

$tableKeysoffices = array();
$tableKeysoffices[] = "officeid";
$tdataoffices[".Keys"] = $tableKeysoffices;


$tdataoffices[".hideMobileList"] = array();




//	officeid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "officeid";
	$fdata["GoodName"] = "officeid";
	$fdata["ownerTable"] = "offices";
	$fdata["Label"] = GetFieldLabel("offices","officeid");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "officeid";

		$fdata["sourceSingle"] = "officeid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "officeid";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataoffices["officeid"] = $fdata;
		$tdataoffices[".searchableFields"][] = "officeid";
//	officename
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "officename";
	$fdata["GoodName"] = "officename";
	$fdata["ownerTable"] = "offices";
	$fdata["Label"] = GetFieldLabel("offices","officename");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "officename";

		$fdata["sourceSingle"] = "officename";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "officename";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdataoffices["officename"] = $fdata;
		$tdataoffices[".searchableFields"][] = "officename";


$tables_data["offices"]=&$tdataoffices;
$field_labels["offices"] = &$fieldLabelsoffices;
$fieldToolTips["offices"] = &$fieldToolTipsoffices;
$placeHolders["offices"] = &$placeHoldersoffices;
$page_titles["offices"] = &$pageTitlesoffices;


changeTextControlsToDate( "offices" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["offices"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["offices"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_offices()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "officeid,  	officename";
$proto0["m_strFrom"] = "FROM offices";
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
	"m_strName" => "officeid",
	"m_strTable" => "offices",
	"m_srcTableName" => "offices"
));

$proto6["m_sql"] = "officeid";
$proto6["m_srcTableName"] = "offices";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "officename",
	"m_strTable" => "offices",
	"m_srcTableName" => "offices"
));

$proto8["m_sql"] = "officename";
$proto8["m_srcTableName"] = "offices";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "offices";
$proto11["m_srcTableName"] = "offices";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "officeid";
$proto11["m_columns"][] = "officename";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "offices";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "offices";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="offices";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_offices = createSqlQuery_offices();


	
		;

		

$tdataoffices[".sqlquery"] = $queryData_offices;



$tdataoffices[".hasEvents"] = false;

?>
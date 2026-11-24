<?php
$tdataranks = array();
$tdataranks[".searchableFields"] = array();
$tdataranks[".ShortName"] = "ranks";
$tdataranks[".OwnerID"] = "";
$tdataranks[".OriginalTable"] = "ranks";


$tdataranks[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdataranks[".originalPagesByType"] = $tdataranks[".pagesByType"];
$tdataranks[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"import\":[\"import\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdataranks[".originalPages"] = $tdataranks[".pages"];
$tdataranks[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"import\":\"import\",\"list\":\"list\",\"search\":\"search\"}" );
$tdataranks[".originalDefaultPages"] = $tdataranks[".defaultPages"];

//	field labels
$fieldLabelsranks = array();
$fieldToolTipsranks = array();
$pageTitlesranks = array();
$placeHoldersranks = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsranks["English"] = array();
	$fieldToolTipsranks["English"] = array();
	$placeHoldersranks["English"] = array();
	$pageTitlesranks["English"] = array();
	$fieldLabelsranks["English"]["id"] = "Id";
	$fieldToolTipsranks["English"]["id"] = "";
	$placeHoldersranks["English"]["id"] = "";
	$fieldLabelsranks["English"]["rank"] = "Rank";
	$fieldToolTipsranks["English"]["rank"] = "";
	$placeHoldersranks["English"]["rank"] = "";
	$fieldLabelsranks["English"]["responsibilities"] = "Responsibilities";
	$fieldToolTipsranks["English"]["responsibilities"] = "";
	$placeHoldersranks["English"]["responsibilities"] = "";
	$pageTitlesranks["English"]["add"] = "Add new";
	$pageTitlesranks["English"]["edit"] = "Edit";
	$pageTitlesranks["English"]["search"] = "Advanced search";
	$pageTitlesranks["English"]["import"] = "Import";
	if (count($fieldToolTipsranks["English"]))
		$tdataranks[".isUseToolTips"] = true;
}


	$tdataranks[".NCSearch"] = true;



$tdataranks[".shortTableName"] = "ranks";
$tdataranks[".nSecOptions"] = 0;

$tdataranks[".mainTableOwnerID"] = "";
$tdataranks[".entityType"] = 0;
$tdataranks[".connId"] = "mailtracker_at_localhost";


$tdataranks[".strOriginalTableName"] = "ranks";

	



$tdataranks[".showAddInPopup"] = false;

$tdataranks[".showEditInPopup"] = false;

$tdataranks[".showViewInPopup"] = false;

$tdataranks[".listAjax"] = false;
//	temporary
//$tdataranks[".listAjax"] = false;

	$tdataranks[".audit"] = false;

	$tdataranks[".locking"] = false;


$pages = $tdataranks[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataranks[".edit"] = true;
	$tdataranks[".afterEditAction"] = 1;
	$tdataranks[".closePopupAfterEdit"] = 1;
	$tdataranks[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataranks[".add"] = true;
$tdataranks[".afterAddAction"] = 1;
$tdataranks[".closePopupAfterAdd"] = 1;
$tdataranks[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataranks[".list"] = true;
}



$tdataranks[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataranks[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataranks[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataranks[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataranks[".printFriendly"] = true;
}



$tdataranks[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataranks[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataranks[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataranks[".isUseAjaxSuggest"] = true;





$tdataranks[".ajaxCodeSnippetAdded"] = false;

$tdataranks[".buttonsAdded"] = false;

$tdataranks[".addPageEvents"] = false;

// use timepicker for search panel
$tdataranks[".isUseTimeForSearch"] = false;


$tdataranks[".badgeColor"] = "E8926F";


$tdataranks[".allSearchFields"] = array();
$tdataranks[".filterFields"] = array();
$tdataranks[".requiredSearchFields"] = array();

$tdataranks[".googleLikeFields"] = array();
$tdataranks[".googleLikeFields"][] = "id";
$tdataranks[".googleLikeFields"][] = "rank";
$tdataranks[".googleLikeFields"][] = "responsibilities";



$tdataranks[".tableType"] = "list";

$tdataranks[".printerPageOrientation"] = 0;
$tdataranks[".nPrinterPageScale"] = 100;

$tdataranks[".nPrinterSplitRecords"] = 40;

$tdataranks[".geocodingEnabled"] = false;










$tdataranks[".pageSize"] = 20;

$tdataranks[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataranks[".strOrderBy"] = $tstrOrderBy;

$tdataranks[".orderindexes"] = array();


$tdataranks[".sqlHead"] = "SELECT id,  	rank,  	responsibilities";
$tdataranks[".sqlFrom"] = "FROM ranks";
$tdataranks[".sqlWhereExpr"] = "";
$tdataranks[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataranks[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataranks[".arrGroupsPerPage"] = $arrGPP;

$tdataranks[".highlightSearchResults"] = true;

$tableKeysranks = array();
$tableKeysranks[] = "id";
$tdataranks[".Keys"] = $tableKeysranks;


$tdataranks[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "ranks";
	$fdata["Label"] = GetFieldLabel("ranks","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
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


	$tdataranks["id"] = $fdata;
		$tdataranks[".searchableFields"][] = "id";
//	rank
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "rank";
	$fdata["GoodName"] = "rank";
	$fdata["ownerTable"] = "ranks";
	$fdata["Label"] = GetFieldLabel("ranks","rank");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "rank";

		$fdata["sourceSingle"] = "rank";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rank";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdataranks["rank"] = $fdata;
		$tdataranks[".searchableFields"][] = "rank";
//	responsibilities
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "responsibilities";
	$fdata["GoodName"] = "responsibilities";
	$fdata["ownerTable"] = "ranks";
	$fdata["Label"] = GetFieldLabel("ranks","responsibilities");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "responsibilities";

		$fdata["sourceSingle"] = "responsibilities";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "responsibilities";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdataranks["responsibilities"] = $fdata;
		$tdataranks[".searchableFields"][] = "responsibilities";


$tables_data["ranks"]=&$tdataranks;
$field_labels["ranks"] = &$fieldLabelsranks;
$fieldToolTips["ranks"] = &$fieldToolTipsranks;
$placeHolders["ranks"] = &$placeHoldersranks;
$page_titles["ranks"] = &$pageTitlesranks;


changeTextControlsToDate( "ranks" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["ranks"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["ranks"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ranks()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	rank,  	responsibilities";
$proto0["m_strFrom"] = "FROM ranks";
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
	"m_strName" => "id",
	"m_strTable" => "ranks",
	"m_srcTableName" => "ranks"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "ranks";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "rank",
	"m_strTable" => "ranks",
	"m_srcTableName" => "ranks"
));

$proto8["m_sql"] = "rank";
$proto8["m_srcTableName"] = "ranks";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "responsibilities",
	"m_strTable" => "ranks",
	"m_srcTableName" => "ranks"
));

$proto10["m_sql"] = "responsibilities";
$proto10["m_srcTableName"] = "ranks";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "ranks";
$proto13["m_srcTableName"] = "ranks";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "rank";
$proto13["m_columns"][] = "responsibilities";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "ranks";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "ranks";
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
$proto0["m_srcTableName"]="ranks";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ranks = createSqlQuery_ranks();


	
		;

			

$tdataranks[".sqlquery"] = $queryData_ranks;



$tdataranks[".hasEvents"] = false;

?>
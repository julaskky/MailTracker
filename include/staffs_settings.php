<?php
$tdatastaffs = array();
$tdatastaffs[".searchableFields"] = array();
$tdatastaffs[".ShortName"] = "staffs";
$tdatastaffs[".OwnerID"] = "";
$tdatastaffs[".OriginalTable"] = "staffs";


$tdatastaffs[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatastaffs[".originalPagesByType"] = $tdatastaffs[".pagesByType"];
$tdatastaffs[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatastaffs[".originalPages"] = $tdatastaffs[".pages"];
$tdatastaffs[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatastaffs[".originalDefaultPages"] = $tdatastaffs[".defaultPages"];

//	field labels
$fieldLabelsstaffs = array();
$fieldToolTipsstaffs = array();
$pageTitlesstaffs = array();
$placeHoldersstaffs = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsstaffs["English"] = array();
	$fieldToolTipsstaffs["English"] = array();
	$placeHoldersstaffs["English"] = array();
	$pageTitlesstaffs["English"] = array();
	$fieldLabelsstaffs["English"]["staffid"] = "Staff ID";
	$fieldToolTipsstaffs["English"]["staffid"] = "";
	$placeHoldersstaffs["English"]["staffid"] = "";
	$fieldLabelsstaffs["English"]["staffname"] = "Staff Name";
	$fieldToolTipsstaffs["English"]["staffname"] = "";
	$placeHoldersstaffs["English"]["staffname"] = "";
	$fieldLabelsstaffs["English"]["gender"] = "Gender";
	$fieldToolTipsstaffs["English"]["gender"] = "";
	$placeHoldersstaffs["English"]["gender"] = "";
	$fieldLabelsstaffs["English"]["office"] = "Office";
	$fieldToolTipsstaffs["English"]["office"] = "";
	$placeHoldersstaffs["English"]["office"] = "";
	$fieldLabelsstaffs["English"]["rank"] = "Rank";
	$fieldToolTipsstaffs["English"]["rank"] = "";
	$placeHoldersstaffs["English"]["rank"] = "";
	$pageTitlesstaffs["English"]["add"] = "Add new";
	$pageTitlesstaffs["English"]["edit"] = "Edit";
	$pageTitlesstaffs["English"]["search"] = "Advanced search";
	if (count($fieldToolTipsstaffs["English"]))
		$tdatastaffs[".isUseToolTips"] = true;
}


	$tdatastaffs[".NCSearch"] = true;



$tdatastaffs[".shortTableName"] = "staffs";
$tdatastaffs[".nSecOptions"] = 0;

$tdatastaffs[".mainTableOwnerID"] = "";
$tdatastaffs[".entityType"] = 0;
$tdatastaffs[".connId"] = "mailtracker_at_localhost";


$tdatastaffs[".strOriginalTableName"] = "staffs";

	



$tdatastaffs[".showAddInPopup"] = false;

$tdatastaffs[".showEditInPopup"] = false;

$tdatastaffs[".showViewInPopup"] = false;

$tdatastaffs[".listAjax"] = false;
//	temporary
//$tdatastaffs[".listAjax"] = false;

	$tdatastaffs[".audit"] = false;

	$tdatastaffs[".locking"] = false;


$pages = $tdatastaffs[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatastaffs[".edit"] = true;
	$tdatastaffs[".afterEditAction"] = 1;
	$tdatastaffs[".closePopupAfterEdit"] = 1;
	$tdatastaffs[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatastaffs[".add"] = true;
$tdatastaffs[".afterAddAction"] = 1;
$tdatastaffs[".closePopupAfterAdd"] = 1;
$tdatastaffs[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatastaffs[".list"] = true;
}



$tdatastaffs[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatastaffs[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatastaffs[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatastaffs[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatastaffs[".printFriendly"] = true;
}



$tdatastaffs[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatastaffs[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatastaffs[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatastaffs[".isUseAjaxSuggest"] = true;





$tdatastaffs[".ajaxCodeSnippetAdded"] = false;

$tdatastaffs[".buttonsAdded"] = false;

$tdatastaffs[".addPageEvents"] = false;

// use timepicker for search panel
$tdatastaffs[".isUseTimeForSearch"] = false;


$tdatastaffs[".badgeColor"] = "DAA520";


$tdatastaffs[".allSearchFields"] = array();
$tdatastaffs[".filterFields"] = array();
$tdatastaffs[".requiredSearchFields"] = array();

$tdatastaffs[".googleLikeFields"] = array();
$tdatastaffs[".googleLikeFields"][] = "staffid";
$tdatastaffs[".googleLikeFields"][] = "staffname";
$tdatastaffs[".googleLikeFields"][] = "gender";
$tdatastaffs[".googleLikeFields"][] = "office";
$tdatastaffs[".googleLikeFields"][] = "rank";



$tdatastaffs[".tableType"] = "list";

$tdatastaffs[".printerPageOrientation"] = 0;
$tdatastaffs[".nPrinterPageScale"] = 100;

$tdatastaffs[".nPrinterSplitRecords"] = 40;

$tdatastaffs[".geocodingEnabled"] = false;










$tdatastaffs[".pageSize"] = 20;

$tdatastaffs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatastaffs[".strOrderBy"] = $tstrOrderBy;

$tdatastaffs[".orderindexes"] = array();


$tdatastaffs[".sqlHead"] = "SELECT staffid,  	staffname,  	gender,  	office,  	rank";
$tdatastaffs[".sqlFrom"] = "FROM staffs";
$tdatastaffs[".sqlWhereExpr"] = "";
$tdatastaffs[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatastaffs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatastaffs[".arrGroupsPerPage"] = $arrGPP;

$tdatastaffs[".highlightSearchResults"] = true;

$tableKeysstaffs = array();
$tableKeysstaffs[] = "staffid";
$tdatastaffs[".Keys"] = $tableKeysstaffs;


$tdatastaffs[".hideMobileList"] = array();




//	staffid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "staffid";
	$fdata["GoodName"] = "staffid";
	$fdata["ownerTable"] = "staffs";
	$fdata["Label"] = GetFieldLabel("staffs","staffid");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "staffid";

		$fdata["sourceSingle"] = "staffid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "staffid";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatastaffs["staffid"] = $fdata;
		$tdatastaffs[".searchableFields"][] = "staffid";
//	staffname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "staffname";
	$fdata["GoodName"] = "staffname";
	$fdata["ownerTable"] = "staffs";
	$fdata["Label"] = GetFieldLabel("staffs","staffname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "staffname";

		$fdata["sourceSingle"] = "staffname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "staffname";

	
	
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


	$tdatastaffs["staffname"] = $fdata;
		$tdatastaffs[".searchableFields"][] = "staffname";
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "staffs";
	$fdata["Label"] = GetFieldLabel("staffs","gender");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "gender";

		$fdata["sourceSingle"] = "gender";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gender";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
		$edata["LookupType"] = 0;
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "F";
	$edata["LookupValues"][] = "M";

	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatastaffs["gender"] = $fdata;
		$tdatastaffs[".searchableFields"][] = "gender";
//	office
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "office";
	$fdata["GoodName"] = "office";
	$fdata["ownerTable"] = "staffs";
	$fdata["Label"] = GetFieldLabel("staffs","office");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "office";

		$fdata["sourceSingle"] = "office";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "office";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "offices";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "officename";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "officename";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatastaffs["office"] = $fdata;
		$tdatastaffs[".searchableFields"][] = "office";
//	rank
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "rank";
	$fdata["GoodName"] = "rank";
	$fdata["ownerTable"] = "staffs";
	$fdata["Label"] = GetFieldLabel("staffs","rank");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "ranks";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "rank";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "rank";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatastaffs["rank"] = $fdata;
		$tdatastaffs[".searchableFields"][] = "rank";


$tables_data["staffs"]=&$tdatastaffs;
$field_labels["staffs"] = &$fieldLabelsstaffs;
$fieldToolTips["staffs"] = &$fieldToolTipsstaffs;
$placeHolders["staffs"] = &$placeHoldersstaffs;
$page_titles["staffs"] = &$pageTitlesstaffs;


changeTextControlsToDate( "staffs" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["staffs"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["staffs"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_staffs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "staffid,  	staffname,  	gender,  	office,  	rank";
$proto0["m_strFrom"] = "FROM staffs";
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
	"m_strName" => "staffid",
	"m_strTable" => "staffs",
	"m_srcTableName" => "staffs"
));

$proto6["m_sql"] = "staffid";
$proto6["m_srcTableName"] = "staffs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "staffname",
	"m_strTable" => "staffs",
	"m_srcTableName" => "staffs"
));

$proto8["m_sql"] = "staffname";
$proto8["m_srcTableName"] = "staffs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "staffs",
	"m_srcTableName" => "staffs"
));

$proto10["m_sql"] = "gender";
$proto10["m_srcTableName"] = "staffs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "office",
	"m_strTable" => "staffs",
	"m_srcTableName" => "staffs"
));

$proto12["m_sql"] = "office";
$proto12["m_srcTableName"] = "staffs";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "rank",
	"m_strTable" => "staffs",
	"m_srcTableName" => "staffs"
));

$proto14["m_sql"] = "rank";
$proto14["m_srcTableName"] = "staffs";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "staffs";
$proto17["m_srcTableName"] = "staffs";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "staffid";
$proto17["m_columns"][] = "staffname";
$proto17["m_columns"][] = "gender";
$proto17["m_columns"][] = "office";
$proto17["m_columns"][] = "rank";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "staffs";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "staffs";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="staffs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_staffs = createSqlQuery_staffs();


	
		;

					

$tdatastaffs[".sqlquery"] = $queryData_staffs;



$tdatastaffs[".hasEvents"] = false;

?>
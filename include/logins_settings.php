<?php
$tdatalogins = array();
$tdatalogins[".searchableFields"] = array();
$tdatalogins[".ShortName"] = "logins";
$tdatalogins[".OwnerID"] = "id";
$tdatalogins[".OriginalTable"] = "logins";


$tdatalogins[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatalogins[".originalPagesByType"] = $tdatalogins[".pagesByType"];
$tdatalogins[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatalogins[".originalPages"] = $tdatalogins[".pages"];
$tdatalogins[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatalogins[".originalDefaultPages"] = $tdatalogins[".defaultPages"];

//	field labels
$fieldLabelslogins = array();
$fieldToolTipslogins = array();
$pageTitleslogins = array();
$placeHolderslogins = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslogins["English"] = array();
	$fieldToolTipslogins["English"] = array();
	$placeHolderslogins["English"] = array();
	$pageTitleslogins["English"] = array();
	$fieldLabelslogins["English"]["id"] = "Id";
	$fieldToolTipslogins["English"]["id"] = "";
	$placeHolderslogins["English"]["id"] = "";
	$fieldLabelslogins["English"]["userusername"] = "Username";
	$fieldToolTipslogins["English"]["userusername"] = "";
	$placeHolderslogins["English"]["userusername"] = "";
	$fieldLabelslogins["English"]["userpassword"] = "Password";
	$fieldToolTipslogins["English"]["userpassword"] = "";
	$placeHolderslogins["English"]["userpassword"] = "";
	$fieldLabelslogins["English"]["fullname"] = "Fullname";
	$fieldToolTipslogins["English"]["fullname"] = "";
	$placeHolderslogins["English"]["fullname"] = "";
	$fieldLabelslogins["English"]["emailaddress"] = "Email Address";
	$fieldToolTipslogins["English"]["emailaddress"] = "";
	$placeHolderslogins["English"]["emailaddress"] = "";
	$fieldLabelslogins["English"]["phonenumber"] = "Phone Number";
	$fieldToolTipslogins["English"]["phonenumber"] = "";
	$placeHolderslogins["English"]["phonenumber"] = "";
	$pageTitleslogins["English"]["add"] = "Add new";
	$pageTitleslogins["English"]["edit"] = "Edit";
	$pageTitleslogins["English"]["search"] = "Advanced search";
	if (count($fieldToolTipslogins["English"]))
		$tdatalogins[".isUseToolTips"] = true;
}


	$tdatalogins[".NCSearch"] = true;



$tdatalogins[".shortTableName"] = "logins";
$tdatalogins[".nSecOptions"] = 0;

$tdatalogins[".mainTableOwnerID"] = "id";
$tdatalogins[".entityType"] = 0;
$tdatalogins[".connId"] = "mailtracker_at_localhost";


$tdatalogins[".strOriginalTableName"] = "logins";

	



$tdatalogins[".showAddInPopup"] = false;

$tdatalogins[".showEditInPopup"] = false;

$tdatalogins[".showViewInPopup"] = false;

$tdatalogins[".listAjax"] = false;
//	temporary
//$tdatalogins[".listAjax"] = false;

	$tdatalogins[".audit"] = false;

	$tdatalogins[".locking"] = false;


$pages = $tdatalogins[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalogins[".edit"] = true;
	$tdatalogins[".afterEditAction"] = 1;
	$tdatalogins[".closePopupAfterEdit"] = 1;
	$tdatalogins[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalogins[".add"] = true;
$tdatalogins[".afterAddAction"] = 1;
$tdatalogins[".closePopupAfterAdd"] = 1;
$tdatalogins[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalogins[".list"] = true;
}



$tdatalogins[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalogins[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalogins[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalogins[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalogins[".printFriendly"] = true;
}



$tdatalogins[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalogins[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalogins[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalogins[".isUseAjaxSuggest"] = true;





$tdatalogins[".ajaxCodeSnippetAdded"] = false;

$tdatalogins[".buttonsAdded"] = false;

$tdatalogins[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalogins[".isUseTimeForSearch"] = false;


$tdatalogins[".badgeColor"] = "D2AF80";


$tdatalogins[".allSearchFields"] = array();
$tdatalogins[".filterFields"] = array();
$tdatalogins[".requiredSearchFields"] = array();

$tdatalogins[".googleLikeFields"] = array();
$tdatalogins[".googleLikeFields"][] = "id";
$tdatalogins[".googleLikeFields"][] = "userusername";
$tdatalogins[".googleLikeFields"][] = "userpassword";
$tdatalogins[".googleLikeFields"][] = "fullname";
$tdatalogins[".googleLikeFields"][] = "emailaddress";
$tdatalogins[".googleLikeFields"][] = "phonenumber";



$tdatalogins[".tableType"] = "list";

$tdatalogins[".printerPageOrientation"] = 0;
$tdatalogins[".nPrinterPageScale"] = 100;

$tdatalogins[".nPrinterSplitRecords"] = 40;

$tdatalogins[".geocodingEnabled"] = false;










$tdatalogins[".pageSize"] = 20;

$tdatalogins[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalogins[".strOrderBy"] = $tstrOrderBy;

$tdatalogins[".orderindexes"] = array();


$tdatalogins[".sqlHead"] = "SELECT id,  	userusername,  	userpassword,  	fullname,  	emailaddress,  	phonenumber";
$tdatalogins[".sqlFrom"] = "FROM logins";
$tdatalogins[".sqlWhereExpr"] = "";
$tdatalogins[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalogins[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalogins[".arrGroupsPerPage"] = $arrGPP;

$tdatalogins[".highlightSearchResults"] = true;

$tableKeyslogins = array();
$tableKeyslogins[] = "id";
$tdatalogins[".Keys"] = $tableKeyslogins;


$tdatalogins[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("logins","id");
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


	$tdatalogins["id"] = $fdata;
		$tdatalogins[".searchableFields"][] = "id";
//	userusername
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "userusername";
	$fdata["GoodName"] = "userusername";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("logins","userusername");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "userusername";

		$fdata["sourceSingle"] = "userusername";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userusername";

	
	
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


	$tdatalogins["userusername"] = $fdata;
		$tdatalogins[".searchableFields"][] = "userusername";
//	userpassword
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "userpassword";
	$fdata["GoodName"] = "userpassword";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("logins","userpassword");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "userpassword";

		$fdata["sourceSingle"] = "userpassword";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "userpassword";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatalogins["userpassword"] = $fdata;
		$tdatalogins[".searchableFields"][] = "userpassword";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("logins","fullname");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "fullname";

		$fdata["sourceSingle"] = "fullname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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


	$tdatalogins["fullname"] = $fdata;
		$tdatalogins[".searchableFields"][] = "fullname";
//	emailaddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "emailaddress";
	$fdata["GoodName"] = "emailaddress";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("logins","emailaddress");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "emailaddress";

		$fdata["sourceSingle"] = "emailaddress";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "emailaddress";

	
	
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
			$edata["EditParams"].= " maxlength=65";

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


	$tdatalogins["emailaddress"] = $fdata;
		$tdatalogins[".searchableFields"][] = "emailaddress";
//	phonenumber
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "phonenumber";
	$fdata["GoodName"] = "phonenumber";
	$fdata["ownerTable"] = "logins";
	$fdata["Label"] = GetFieldLabel("logins","phonenumber");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "phonenumber";

		$fdata["sourceSingle"] = "phonenumber";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phonenumber";

	
	
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
			$edata["EditParams"].= " maxlength=30";

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


	$tdatalogins["phonenumber"] = $fdata;
		$tdatalogins[".searchableFields"][] = "phonenumber";


$tables_data["logins"]=&$tdatalogins;
$field_labels["logins"] = &$fieldLabelslogins;
$fieldToolTips["logins"] = &$fieldToolTipslogins;
$placeHolders["logins"] = &$placeHolderslogins;
$page_titles["logins"] = &$pageTitleslogins;


changeTextControlsToDate( "logins" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["logins"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["logins"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_logins()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	userusername,  	userpassword,  	fullname,  	emailaddress,  	phonenumber";
$proto0["m_strFrom"] = "FROM logins";
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
	"m_strTable" => "logins",
	"m_srcTableName" => "logins"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "logins";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "userusername",
	"m_strTable" => "logins",
	"m_srcTableName" => "logins"
));

$proto8["m_sql"] = "userusername";
$proto8["m_srcTableName"] = "logins";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "userpassword",
	"m_strTable" => "logins",
	"m_srcTableName" => "logins"
));

$proto10["m_sql"] = "userpassword";
$proto10["m_srcTableName"] = "logins";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "logins",
	"m_srcTableName" => "logins"
));

$proto12["m_sql"] = "fullname";
$proto12["m_srcTableName"] = "logins";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "emailaddress",
	"m_strTable" => "logins",
	"m_srcTableName" => "logins"
));

$proto14["m_sql"] = "emailaddress";
$proto14["m_srcTableName"] = "logins";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "phonenumber",
	"m_strTable" => "logins",
	"m_srcTableName" => "logins"
));

$proto16["m_sql"] = "phonenumber";
$proto16["m_srcTableName"] = "logins";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "logins";
$proto19["m_srcTableName"] = "logins";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "userusername";
$proto19["m_columns"][] = "userpassword";
$proto19["m_columns"][] = "fullname";
$proto19["m_columns"][] = "emailaddress";
$proto19["m_columns"][] = "phonenumber";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "logins";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "logins";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="logins";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_logins = createSqlQuery_logins();


	
		;

						

$tdatalogins[".sqlquery"] = $queryData_logins;



$tdatalogins[".hasEvents"] = false;

?>
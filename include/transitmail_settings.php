<?php
$tdatatransitmail = array();
$tdatatransitmail[".searchableFields"] = array();
$tdatatransitmail[".ShortName"] = "transitmail";
$tdatatransitmail[".OwnerID"] = "";
$tdatatransitmail[".OriginalTable"] = "transitmail";


$tdatatransitmail[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatransitmail[".originalPagesByType"] = $tdatatransitmail[".pagesByType"];
$tdatatransitmail[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatransitmail[".originalPages"] = $tdatatransitmail[".pages"];
$tdatatransitmail[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatatransitmail[".originalDefaultPages"] = $tdatatransitmail[".defaultPages"];

//	field labels
$fieldLabelstransitmail = array();
$fieldToolTipstransitmail = array();
$pageTitlestransitmail = array();
$placeHolderstransitmail = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstransitmail["English"] = array();
	$fieldToolTipstransitmail["English"] = array();
	$placeHolderstransitmail["English"] = array();
	$pageTitlestransitmail["English"] = array();
	$fieldLabelstransitmail["English"]["mailid"] = "Mail ID";
	$fieldToolTipstransitmail["English"]["mailid"] = "";
	$placeHolderstransitmail["English"]["mailid"] = "";
	$fieldLabelstransitmail["English"]["mtitle"] = "Mail Title";
	$fieldToolTipstransitmail["English"]["mtitle"] = "";
	$placeHolderstransitmail["English"]["mtitle"] = "";
	$fieldLabelstransitmail["English"]["mailsource"] = "Mail Source";
	$fieldToolTipstransitmail["English"]["mailsource"] = "";
	$placeHolderstransitmail["English"]["mailsource"] = "";
	$fieldLabelstransitmail["English"]["maildestination"] = "Mail Destination";
	$fieldToolTipstransitmail["English"]["maildestination"] = "";
	$placeHolderstransitmail["English"]["maildestination"] = "";
	$fieldLabelstransitmail["English"]["currentoffice"] = "Current Office";
	$fieldToolTipstransitmail["English"]["currentoffice"] = "";
	$placeHolderstransitmail["English"]["currentoffice"] = "";
	$fieldLabelstransitmail["English"]["datereceived"] = "Date Created/Recieved";
	$fieldToolTipstransitmail["English"]["datereceived"] = "";
	$placeHolderstransitmail["English"]["datereceived"] = "";
	$fieldLabelstransitmail["English"]["receivedby"] = "Received By";
	$fieldToolTipstransitmail["English"]["receivedby"] = "";
	$placeHolderstransitmail["English"]["receivedby"] = "";
	$fieldLabelstransitmail["English"]["dateleft"] = "Date Left";
	$fieldToolTipstransitmail["English"]["dateleft"] = "";
	$placeHolderstransitmail["English"]["dateleft"] = "";
	$fieldLabelstransitmail["English"]["nextoffice"] = "Next Office";
	$fieldToolTipstransitmail["English"]["nextoffice"] = "";
	$placeHolderstransitmail["English"]["nextoffice"] = "";
	$fieldLabelstransitmail["English"]["sentby"] = "Sent By";
	$fieldToolTipstransitmail["English"]["sentby"] = "";
	$placeHolderstransitmail["English"]["sentby"] = "";
	$pageTitlestransitmail["English"]["add"] = "Add new";
	$pageTitlestransitmail["English"]["edit"] = "Edit";
	$pageTitlestransitmail["English"]["search"] = "Search mail";
	if (count($fieldToolTipstransitmail["English"]))
		$tdatatransitmail[".isUseToolTips"] = true;
}


	$tdatatransitmail[".NCSearch"] = true;



$tdatatransitmail[".shortTableName"] = "transitmail";
$tdatatransitmail[".nSecOptions"] = 0;

$tdatatransitmail[".mainTableOwnerID"] = "";
$tdatatransitmail[".entityType"] = 0;
$tdatatransitmail[".connId"] = "mailtracker_at_localhost";


$tdatatransitmail[".strOriginalTableName"] = "transitmail";

	



$tdatatransitmail[".showAddInPopup"] = false;

$tdatatransitmail[".showEditInPopup"] = false;

$tdatatransitmail[".showViewInPopup"] = false;

$tdatatransitmail[".listAjax"] = false;
//	temporary
//$tdatatransitmail[".listAjax"] = false;

	$tdatatransitmail[".audit"] = false;

	$tdatatransitmail[".locking"] = false;


$pages = $tdatatransitmail[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatransitmail[".edit"] = true;
	$tdatatransitmail[".afterEditAction"] = 1;
	$tdatatransitmail[".closePopupAfterEdit"] = 1;
	$tdatatransitmail[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatransitmail[".add"] = true;
$tdatatransitmail[".afterAddAction"] = 1;
$tdatatransitmail[".closePopupAfterAdd"] = 1;
$tdatatransitmail[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatransitmail[".list"] = true;
}



$tdatatransitmail[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatransitmail[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatransitmail[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatransitmail[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatransitmail[".printFriendly"] = true;
}



$tdatatransitmail[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatransitmail[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatransitmail[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatransitmail[".isUseAjaxSuggest"] = true;





$tdatatransitmail[".ajaxCodeSnippetAdded"] = false;

$tdatatransitmail[".buttonsAdded"] = false;

$tdatatransitmail[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatransitmail[".isUseTimeForSearch"] = false;


$tdatatransitmail[".badgeColor"] = "D2691E";


$tdatatransitmail[".allSearchFields"] = array();
$tdatatransitmail[".filterFields"] = array();
$tdatatransitmail[".requiredSearchFields"] = array();

$tdatatransitmail[".googleLikeFields"] = array();
$tdatatransitmail[".googleLikeFields"][] = "mailid";
$tdatatransitmail[".googleLikeFields"][] = "mtitle";
$tdatatransitmail[".googleLikeFields"][] = "mailsource";
$tdatatransitmail[".googleLikeFields"][] = "maildestination";
$tdatatransitmail[".googleLikeFields"][] = "currentoffice";
$tdatatransitmail[".googleLikeFields"][] = "datereceived";
$tdatatransitmail[".googleLikeFields"][] = "receivedby";
$tdatatransitmail[".googleLikeFields"][] = "dateleft";
$tdatatransitmail[".googleLikeFields"][] = "nextoffice";
$tdatatransitmail[".googleLikeFields"][] = "sentby";



$tdatatransitmail[".tableType"] = "list";

$tdatatransitmail[".printerPageOrientation"] = 0;
$tdatatransitmail[".nPrinterPageScale"] = 100;

$tdatatransitmail[".nPrinterSplitRecords"] = 40;

$tdatatransitmail[".geocodingEnabled"] = false;










$tdatatransitmail[".pageSize"] = 20;

$tdatatransitmail[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatransitmail[".strOrderBy"] = $tstrOrderBy;

$tdatatransitmail[".orderindexes"] = array();


$tdatatransitmail[".sqlHead"] = "SELECT mailid,  	mtitle,  	mailsource,  	maildestination,  	currentoffice,  	datereceived,  	receivedby,  	dateleft,  	nextoffice,  	sentby";
$tdatatransitmail[".sqlFrom"] = "FROM transitmail";
$tdatatransitmail[".sqlWhereExpr"] = "";
$tdatatransitmail[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatransitmail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatransitmail[".arrGroupsPerPage"] = $arrGPP;

$tdatatransitmail[".highlightSearchResults"] = true;

$tableKeystransitmail = array();
$tableKeystransitmail[] = "mailid";
$tdatatransitmail[".Keys"] = $tableKeystransitmail;


$tdatatransitmail[".hideMobileList"] = array();




//	mailid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "mailid";
	$fdata["GoodName"] = "mailid";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail","mailid");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "mailid";

		$fdata["sourceSingle"] = "mailid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mailid";

	
	
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


	$tdatatransitmail["mailid"] = $fdata;
		$tdatatransitmail[".searchableFields"][] = "mailid";
//	mtitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mtitle";
	$fdata["GoodName"] = "mtitle";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail","mtitle");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mtitle";

		$fdata["sourceSingle"] = "mtitle";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mtitle";

	
	
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
	$edata["LookupTable"] = "mailcontents";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["autoCompleteFields"][] = array('masterF'=>"mailsource", 'lookupF'=>"mailsource");
	$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "mtitle";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "mtitle";

	

	
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


	$tdatatransitmail["mtitle"] = $fdata;
		$tdatatransitmail[".searchableFields"][] = "mtitle";
//	mailsource
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mailsource";
	$fdata["GoodName"] = "mailsource";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail","mailsource");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "mailsource";

		$fdata["sourceSingle"] = "mailsource";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mailsource";

	
	
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


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatatransitmail["mailsource"] = $fdata;
		$tdatatransitmail[".searchableFields"][] = "mailsource";
//	maildestination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "maildestination";
	$fdata["GoodName"] = "maildestination";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail","maildestination");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "maildestination";

		$fdata["sourceSingle"] = "maildestination";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "maildestination";

	
	
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


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatatransitmail["maildestination"] = $fdata;
		$tdatatransitmail[".searchableFields"][] = "maildestination";
//	currentoffice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "currentoffice";
	$fdata["GoodName"] = "currentoffice";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail","currentoffice");
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


	$tdatatransitmail["currentoffice"] = $fdata;
		$tdatatransitmail[".searchableFields"][] = "currentoffice";
//	datereceived
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "datereceived";
	$fdata["GoodName"] = "datereceived";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail","datereceived");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatatransitmail["datereceived"] = $fdata;
		$tdatatransitmail[".searchableFields"][] = "datereceived";
//	receivedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "receivedby";
	$fdata["GoodName"] = "receivedby";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail","receivedby");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "receivedby";

		$fdata["sourceSingle"] = "receivedby";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "receivedby";

	
	
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
	$edata["LookupTable"] = "staffs";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "staffname";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "staffname";

	

	
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


	$tdatatransitmail["receivedby"] = $fdata;
		$tdatatransitmail[".searchableFields"][] = "receivedby";
//	dateleft
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dateleft";
	$fdata["GoodName"] = "dateleft";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail","dateleft");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "dateleft";

		$fdata["sourceSingle"] = "dateleft";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dateleft";

	
	
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatatransitmail["dateleft"] = $fdata;
		$tdatatransitmail[".searchableFields"][] = "dateleft";
//	nextoffice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "nextoffice";
	$fdata["GoodName"] = "nextoffice";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail","nextoffice");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "nextoffice";

		$fdata["sourceSingle"] = "nextoffice";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nextoffice";

	
	
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


	$tdatatransitmail["nextoffice"] = $fdata;
		$tdatatransitmail[".searchableFields"][] = "nextoffice";
//	sentby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sentby";
	$fdata["GoodName"] = "sentby";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail","sentby");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "sentby";

		$fdata["sourceSingle"] = "sentby";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sentby";

	
	
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
	$edata["LookupTable"] = "staffs";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "staffname";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "staffname";

	

	
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


	$tdatatransitmail["sentby"] = $fdata;
		$tdatatransitmail[".searchableFields"][] = "sentby";


$tables_data["transitmail"]=&$tdatatransitmail;
$field_labels["transitmail"] = &$fieldLabelstransitmail;
$fieldToolTips["transitmail"] = &$fieldToolTipstransitmail;
$placeHolders["transitmail"] = &$placeHolderstransitmail;
$page_titles["transitmail"] = &$pageTitlestransitmail;


changeTextControlsToDate( "transitmail" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["transitmail"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["transitmail"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_transitmail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "mailid,  	mtitle,  	mailsource,  	maildestination,  	currentoffice,  	datereceived,  	receivedby,  	dateleft,  	nextoffice,  	sentby";
$proto0["m_strFrom"] = "FROM transitmail";
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
	"m_strName" => "mailid",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail"
));

$proto6["m_sql"] = "mailid";
$proto6["m_srcTableName"] = "transitmail";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mtitle",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail"
));

$proto8["m_sql"] = "mtitle";
$proto8["m_srcTableName"] = "transitmail";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mailsource",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail"
));

$proto10["m_sql"] = "mailsource";
$proto10["m_srcTableName"] = "transitmail";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "maildestination",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail"
));

$proto12["m_sql"] = "maildestination";
$proto12["m_srcTableName"] = "transitmail";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "currentoffice",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail"
));

$proto14["m_sql"] = "currentoffice";
$proto14["m_srcTableName"] = "transitmail";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "datereceived",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail"
));

$proto16["m_sql"] = "datereceived";
$proto16["m_srcTableName"] = "transitmail";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "receivedby",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail"
));

$proto18["m_sql"] = "receivedby";
$proto18["m_srcTableName"] = "transitmail";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dateleft",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail"
));

$proto20["m_sql"] = "dateleft";
$proto20["m_srcTableName"] = "transitmail";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "nextoffice",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail"
));

$proto22["m_sql"] = "nextoffice";
$proto22["m_srcTableName"] = "transitmail";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sentby",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail"
));

$proto24["m_sql"] = "sentby";
$proto24["m_srcTableName"] = "transitmail";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "transitmail";
$proto27["m_srcTableName"] = "transitmail";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "mailid";
$proto27["m_columns"][] = "mtitle";
$proto27["m_columns"][] = "mailsource";
$proto27["m_columns"][] = "maildestination";
$proto27["m_columns"][] = "currentoffice";
$proto27["m_columns"][] = "datereceived";
$proto27["m_columns"][] = "receivedby";
$proto27["m_columns"][] = "dateleft";
$proto27["m_columns"][] = "nextoffice";
$proto27["m_columns"][] = "sentby";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "transitmail";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "transitmail";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="transitmail";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_transitmail = createSqlQuery_transitmail();


	
		;

										

$tdatatransitmail[".sqlquery"] = $queryData_transitmail;



include_once(getabspath("include/transitmail_events.php"));
$tdatatransitmail[".hasEvents"] = true;

?>
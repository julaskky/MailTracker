<?php
$tdatatransitmail1 = array();
$tdatatransitmail1[".searchableFields"] = array();
$tdatatransitmail1[".ShortName"] = "transitmail1";
$tdatatransitmail1[".OwnerID"] = "";
$tdatatransitmail1[".OriginalTable"] = "transitmail";


$tdatatransitmail1[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatransitmail1[".originalPagesByType"] = $tdatatransitmail1[".pagesByType"];
$tdatatransitmail1[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatransitmail1[".originalPages"] = $tdatatransitmail1[".pages"];
$tdatatransitmail1[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatransitmail1[".originalDefaultPages"] = $tdatatransitmail1[".defaultPages"];

//	field labels
$fieldLabelstransitmail1 = array();
$fieldToolTipstransitmail1 = array();
$pageTitlestransitmail1 = array();
$placeHolderstransitmail1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstransitmail1["English"] = array();
	$fieldToolTipstransitmail1["English"] = array();
	$placeHolderstransitmail1["English"] = array();
	$pageTitlestransitmail1["English"] = array();
	$fieldLabelstransitmail1["English"]["mailid"] = "Mail ID";
	$fieldToolTipstransitmail1["English"]["mailid"] = "";
	$placeHolderstransitmail1["English"]["mailid"] = "";
	$fieldLabelstransitmail1["English"]["mtitle"] = "Mail Title";
	$fieldToolTipstransitmail1["English"]["mtitle"] = "";
	$placeHolderstransitmail1["English"]["mtitle"] = "";
	$fieldLabelstransitmail1["English"]["mailsource"] = "Mail Source";
	$fieldToolTipstransitmail1["English"]["mailsource"] = "";
	$placeHolderstransitmail1["English"]["mailsource"] = "";
	$fieldLabelstransitmail1["English"]["maildestination"] = "Mail Destination";
	$fieldToolTipstransitmail1["English"]["maildestination"] = "";
	$placeHolderstransitmail1["English"]["maildestination"] = "";
	$fieldLabelstransitmail1["English"]["currentoffice"] = "Current Office";
	$fieldToolTipstransitmail1["English"]["currentoffice"] = "";
	$placeHolderstransitmail1["English"]["currentoffice"] = "";
	$fieldLabelstransitmail1["English"]["datereceived"] = "Date Recieved";
	$fieldToolTipstransitmail1["English"]["datereceived"] = "";
	$placeHolderstransitmail1["English"]["datereceived"] = "";
	$fieldLabelstransitmail1["English"]["receivedby"] = "Received By";
	$fieldToolTipstransitmail1["English"]["receivedby"] = "";
	$placeHolderstransitmail1["English"]["receivedby"] = "";
	$fieldLabelstransitmail1["English"]["dateleft"] = "Date Left";
	$fieldToolTipstransitmail1["English"]["dateleft"] = "";
	$placeHolderstransitmail1["English"]["dateleft"] = "";
	$fieldLabelstransitmail1["English"]["nextoffice"] = "Next Office";
	$fieldToolTipstransitmail1["English"]["nextoffice"] = "";
	$placeHolderstransitmail1["English"]["nextoffice"] = "";
	$fieldLabelstransitmail1["English"]["sentby"] = "Sent By";
	$fieldToolTipstransitmail1["English"]["sentby"] = "";
	$placeHolderstransitmail1["English"]["sentby"] = "";
	if (count($fieldToolTipstransitmail1["English"]))
		$tdatatransitmail1[".isUseToolTips"] = true;
}


	$tdatatransitmail1[".NCSearch"] = true;



$tdatatransitmail1[".shortTableName"] = "transitmail1";
$tdatatransitmail1[".nSecOptions"] = 0;

$tdatatransitmail1[".mainTableOwnerID"] = "";
$tdatatransitmail1[".entityType"] = 1;
$tdatatransitmail1[".connId"] = "mailtracker_at_localhost";


$tdatatransitmail1[".strOriginalTableName"] = "transitmail";

	



$tdatatransitmail1[".showAddInPopup"] = false;

$tdatatransitmail1[".showEditInPopup"] = false;

$tdatatransitmail1[".showViewInPopup"] = false;

$tdatatransitmail1[".listAjax"] = false;
//	temporary
//$tdatatransitmail1[".listAjax"] = false;

	$tdatatransitmail1[".audit"] = false;

	$tdatatransitmail1[".locking"] = false;


$pages = $tdatatransitmail1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatransitmail1[".edit"] = true;
	$tdatatransitmail1[".afterEditAction"] = 1;
	$tdatatransitmail1[".closePopupAfterEdit"] = 1;
	$tdatatransitmail1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatransitmail1[".add"] = true;
$tdatatransitmail1[".afterAddAction"] = 1;
$tdatatransitmail1[".closePopupAfterAdd"] = 1;
$tdatatransitmail1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatransitmail1[".list"] = true;
}



$tdatatransitmail1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatransitmail1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatransitmail1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatransitmail1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatransitmail1[".printFriendly"] = true;
}



$tdatatransitmail1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatransitmail1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatransitmail1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatransitmail1[".isUseAjaxSuggest"] = true;





$tdatatransitmail1[".ajaxCodeSnippetAdded"] = false;

$tdatatransitmail1[".buttonsAdded"] = false;

$tdatatransitmail1[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatransitmail1[".isUseTimeForSearch"] = false;


$tdatatransitmail1[".badgeColor"] = "D2691E";


$tdatatransitmail1[".allSearchFields"] = array();
$tdatatransitmail1[".filterFields"] = array();
$tdatatransitmail1[".requiredSearchFields"] = array();

$tdatatransitmail1[".googleLikeFields"] = array();
$tdatatransitmail1[".googleLikeFields"][] = "mailid";
$tdatatransitmail1[".googleLikeFields"][] = "mtitle";
$tdatatransitmail1[".googleLikeFields"][] = "mailsource";
$tdatatransitmail1[".googleLikeFields"][] = "maildestination";
$tdatatransitmail1[".googleLikeFields"][] = "currentoffice";
$tdatatransitmail1[".googleLikeFields"][] = "datereceived";
$tdatatransitmail1[".googleLikeFields"][] = "receivedby";
$tdatatransitmail1[".googleLikeFields"][] = "dateleft";
$tdatatransitmail1[".googleLikeFields"][] = "nextoffice";
$tdatatransitmail1[".googleLikeFields"][] = "sentby";



$tdatatransitmail1[".tableType"] = "list";

$tdatatransitmail1[".printerPageOrientation"] = 0;
$tdatatransitmail1[".nPrinterPageScale"] = 100;

$tdatatransitmail1[".nPrinterSplitRecords"] = 40;

$tdatatransitmail1[".geocodingEnabled"] = false;










$tdatatransitmail1[".pageSize"] = 20;

$tdatatransitmail1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatransitmail1[".strOrderBy"] = $tstrOrderBy;

$tdatatransitmail1[".orderindexes"] = array();


$tdatatransitmail1[".sqlHead"] = "SELECT mailid,  	mtitle,  	mailsource,  	maildestination,  	currentoffice,  	datereceived,  	receivedby,  	dateleft,  	nextoffice,  	sentby";
$tdatatransitmail1[".sqlFrom"] = "FROM transitmail";
$tdatatransitmail1[".sqlWhereExpr"] = "";
$tdatatransitmail1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatransitmail1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatransitmail1[".arrGroupsPerPage"] = $arrGPP;

$tdatatransitmail1[".highlightSearchResults"] = true;

$tableKeystransitmail1 = array();
$tableKeystransitmail1[] = "mailid";
$tdatatransitmail1[".Keys"] = $tableKeystransitmail1;


$tdatatransitmail1[".hideMobileList"] = array();




//	mailid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "mailid";
	$fdata["GoodName"] = "mailid";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail1","mailid");
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


	$tdatatransitmail1["mailid"] = $fdata;
		$tdatatransitmail1[".searchableFields"][] = "mailid";
//	mtitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mtitle";
	$fdata["GoodName"] = "mtitle";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail1","mtitle");
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


	$tdatatransitmail1["mtitle"] = $fdata;
		$tdatatransitmail1[".searchableFields"][] = "mtitle";
//	mailsource
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mailsource";
	$fdata["GoodName"] = "mailsource";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail1","mailsource");
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


	$tdatatransitmail1["mailsource"] = $fdata;
		$tdatatransitmail1[".searchableFields"][] = "mailsource";
//	maildestination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "maildestination";
	$fdata["GoodName"] = "maildestination";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail1","maildestination");
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


	$tdatatransitmail1["maildestination"] = $fdata;
		$tdatatransitmail1[".searchableFields"][] = "maildestination";
//	currentoffice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "currentoffice";
	$fdata["GoodName"] = "currentoffice";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail1","currentoffice");
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


	$tdatatransitmail1["currentoffice"] = $fdata;
		$tdatatransitmail1[".searchableFields"][] = "currentoffice";
//	datereceived
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "datereceived";
	$fdata["GoodName"] = "datereceived";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail1","datereceived");
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


	$tdatatransitmail1["datereceived"] = $fdata;
		$tdatatransitmail1[".searchableFields"][] = "datereceived";
//	receivedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "receivedby";
	$fdata["GoodName"] = "receivedby";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail1","receivedby");
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


	$tdatatransitmail1["receivedby"] = $fdata;
		$tdatatransitmail1[".searchableFields"][] = "receivedby";
//	dateleft
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dateleft";
	$fdata["GoodName"] = "dateleft";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail1","dateleft");
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


	$tdatatransitmail1["dateleft"] = $fdata;
		$tdatatransitmail1[".searchableFields"][] = "dateleft";
//	nextoffice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "nextoffice";
	$fdata["GoodName"] = "nextoffice";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail1","nextoffice");
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


	$tdatatransitmail1["nextoffice"] = $fdata;
		$tdatatransitmail1[".searchableFields"][] = "nextoffice";
//	sentby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sentby";
	$fdata["GoodName"] = "sentby";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("transitmail1","sentby");
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


	$tdatatransitmail1["sentby"] = $fdata;
		$tdatatransitmail1[".searchableFields"][] = "sentby";


$tables_data["transitmail1"]=&$tdatatransitmail1;
$field_labels["transitmail1"] = &$fieldLabelstransitmail1;
$fieldToolTips["transitmail1"] = &$fieldToolTipstransitmail1;
$placeHolders["transitmail1"] = &$placeHolderstransitmail1;
$page_titles["transitmail1"] = &$pageTitlestransitmail1;


changeTextControlsToDate( "transitmail1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["transitmail1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["transitmail1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_transitmail1()
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
	"m_srcTableName" => "transitmail1"
));

$proto6["m_sql"] = "mailid";
$proto6["m_srcTableName"] = "transitmail1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mtitle",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail1"
));

$proto8["m_sql"] = "mtitle";
$proto8["m_srcTableName"] = "transitmail1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mailsource",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail1"
));

$proto10["m_sql"] = "mailsource";
$proto10["m_srcTableName"] = "transitmail1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "maildestination",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail1"
));

$proto12["m_sql"] = "maildestination";
$proto12["m_srcTableName"] = "transitmail1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "currentoffice",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail1"
));

$proto14["m_sql"] = "currentoffice";
$proto14["m_srcTableName"] = "transitmail1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "datereceived",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail1"
));

$proto16["m_sql"] = "datereceived";
$proto16["m_srcTableName"] = "transitmail1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "receivedby",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail1"
));

$proto18["m_sql"] = "receivedby";
$proto18["m_srcTableName"] = "transitmail1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dateleft",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail1"
));

$proto20["m_sql"] = "dateleft";
$proto20["m_srcTableName"] = "transitmail1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "nextoffice",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail1"
));

$proto22["m_sql"] = "nextoffice";
$proto22["m_srcTableName"] = "transitmail1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sentby",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "transitmail1"
));

$proto24["m_sql"] = "sentby";
$proto24["m_srcTableName"] = "transitmail1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "transitmail";
$proto27["m_srcTableName"] = "transitmail1";
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
$proto26["m_srcTableName"] = "transitmail1";
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
$proto0["m_srcTableName"]="transitmail1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_transitmail1 = createSqlQuery_transitmail1();


	
		;

										

$tdatatransitmail1[".sqlquery"] = $queryData_transitmail1;



$tdatatransitmail1[".hasEvents"] = false;

?>
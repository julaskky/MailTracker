<?php
$tdatatrack_mails = array();
$tdatatrack_mails[".searchableFields"] = array();
$tdatatrack_mails[".ShortName"] = "track_mails";
$tdatatrack_mails[".OwnerID"] = "";
$tdatatrack_mails[".OriginalTable"] = "transitmail";


$tdatatrack_mails[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatatrack_mails[".originalPagesByType"] = $tdatatrack_mails[".pagesByType"];
$tdatatrack_mails[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatatrack_mails[".originalPages"] = $tdatatrack_mails[".pages"];
$tdatatrack_mails[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatatrack_mails[".originalDefaultPages"] = $tdatatrack_mails[".defaultPages"];

//	field labels
$fieldLabelstrack_mails = array();
$fieldToolTipstrack_mails = array();
$pageTitlestrack_mails = array();
$placeHolderstrack_mails = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelstrack_mails["English"] = array();
	$fieldToolTipstrack_mails["English"] = array();
	$placeHolderstrack_mails["English"] = array();
	$pageTitlestrack_mails["English"] = array();
	$fieldLabelstrack_mails["English"]["mailid"] = "Mail ID";
	$fieldToolTipstrack_mails["English"]["mailid"] = "";
	$placeHolderstrack_mails["English"]["mailid"] = "";
	$fieldLabelstrack_mails["English"]["mtitle"] = "Mail Title";
	$fieldToolTipstrack_mails["English"]["mtitle"] = "";
	$placeHolderstrack_mails["English"]["mtitle"] = "";
	$fieldLabelstrack_mails["English"]["mailsource"] = "Mail Source";
	$fieldToolTipstrack_mails["English"]["mailsource"] = "";
	$placeHolderstrack_mails["English"]["mailsource"] = "";
	$fieldLabelstrack_mails["English"]["maildestination"] = "Mail Destination";
	$fieldToolTipstrack_mails["English"]["maildestination"] = "";
	$placeHolderstrack_mails["English"]["maildestination"] = "";
	$fieldLabelstrack_mails["English"]["currentoffice"] = "Current Office";
	$fieldToolTipstrack_mails["English"]["currentoffice"] = "";
	$placeHolderstrack_mails["English"]["currentoffice"] = "";
	$fieldLabelstrack_mails["English"]["datereceived"] = "Date Recieved";
	$fieldToolTipstrack_mails["English"]["datereceived"] = "";
	$placeHolderstrack_mails["English"]["datereceived"] = "";
	$fieldLabelstrack_mails["English"]["receivedby"] = "Received By";
	$fieldToolTipstrack_mails["English"]["receivedby"] = "";
	$placeHolderstrack_mails["English"]["receivedby"] = "";
	$fieldLabelstrack_mails["English"]["dateleft"] = "Date Left";
	$fieldToolTipstrack_mails["English"]["dateleft"] = "";
	$placeHolderstrack_mails["English"]["dateleft"] = "";
	$fieldLabelstrack_mails["English"]["nextoffice"] = "Next Office";
	$fieldToolTipstrack_mails["English"]["nextoffice"] = "";
	$placeHolderstrack_mails["English"]["nextoffice"] = "";
	$fieldLabelstrack_mails["English"]["sentby"] = "Sent By";
	$fieldToolTipstrack_mails["English"]["sentby"] = "";
	$placeHolderstrack_mails["English"]["sentby"] = "";
	if (count($fieldToolTipstrack_mails["English"]))
		$tdatatrack_mails[".isUseToolTips"] = true;
}


	$tdatatrack_mails[".NCSearch"] = true;



$tdatatrack_mails[".shortTableName"] = "track_mails";
$tdatatrack_mails[".nSecOptions"] = 0;

$tdatatrack_mails[".mainTableOwnerID"] = "";
$tdatatrack_mails[".entityType"] = 1;
$tdatatrack_mails[".connId"] = "mailtracker_at_localhost";


$tdatatrack_mails[".strOriginalTableName"] = "transitmail";

	



$tdatatrack_mails[".showAddInPopup"] = false;

$tdatatrack_mails[".showEditInPopup"] = false;

$tdatatrack_mails[".showViewInPopup"] = false;

$tdatatrack_mails[".listAjax"] = false;
//	temporary
//$tdatatrack_mails[".listAjax"] = false;

	$tdatatrack_mails[".audit"] = false;

	$tdatatrack_mails[".locking"] = false;


$pages = $tdatatrack_mails[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatrack_mails[".edit"] = true;
	$tdatatrack_mails[".afterEditAction"] = 1;
	$tdatatrack_mails[".closePopupAfterEdit"] = 1;
	$tdatatrack_mails[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatrack_mails[".add"] = true;
$tdatatrack_mails[".afterAddAction"] = 1;
$tdatatrack_mails[".closePopupAfterAdd"] = 1;
$tdatatrack_mails[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatrack_mails[".list"] = true;
}



$tdatatrack_mails[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatrack_mails[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatrack_mails[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatrack_mails[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatrack_mails[".printFriendly"] = true;
}



$tdatatrack_mails[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatrack_mails[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatrack_mails[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatrack_mails[".isUseAjaxSuggest"] = true;





$tdatatrack_mails[".ajaxCodeSnippetAdded"] = false;

$tdatatrack_mails[".buttonsAdded"] = false;

$tdatatrack_mails[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatrack_mails[".isUseTimeForSearch"] = false;


$tdatatrack_mails[".badgeColor"] = "D2691E";


$tdatatrack_mails[".allSearchFields"] = array();
$tdatatrack_mails[".filterFields"] = array();
$tdatatrack_mails[".requiredSearchFields"] = array();

$tdatatrack_mails[".googleLikeFields"] = array();
$tdatatrack_mails[".googleLikeFields"][] = "mailid";
$tdatatrack_mails[".googleLikeFields"][] = "mtitle";
$tdatatrack_mails[".googleLikeFields"][] = "mailsource";
$tdatatrack_mails[".googleLikeFields"][] = "maildestination";
$tdatatrack_mails[".googleLikeFields"][] = "currentoffice";
$tdatatrack_mails[".googleLikeFields"][] = "datereceived";
$tdatatrack_mails[".googleLikeFields"][] = "receivedby";
$tdatatrack_mails[".googleLikeFields"][] = "dateleft";
$tdatatrack_mails[".googleLikeFields"][] = "nextoffice";
$tdatatrack_mails[".googleLikeFields"][] = "sentby";



$tdatatrack_mails[".tableType"] = "list";

$tdatatrack_mails[".printerPageOrientation"] = 0;
$tdatatrack_mails[".nPrinterPageScale"] = 100;

$tdatatrack_mails[".nPrinterSplitRecords"] = 40;

$tdatatrack_mails[".geocodingEnabled"] = false;










$tdatatrack_mails[".pageSize"] = 20;

$tdatatrack_mails[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatatrack_mails[".strOrderBy"] = $tstrOrderBy;

$tdatatrack_mails[".orderindexes"] = array();


$tdatatrack_mails[".sqlHead"] = "SELECT mailid,  	mtitle,  	mailsource,  	maildestination,  	currentoffice,  	datereceived,  	receivedby,  	dateleft,  	nextoffice,  	sentby";
$tdatatrack_mails[".sqlFrom"] = "FROM transitmail";
$tdatatrack_mails[".sqlWhereExpr"] = "";
$tdatatrack_mails[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatrack_mails[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatrack_mails[".arrGroupsPerPage"] = $arrGPP;

$tdatatrack_mails[".highlightSearchResults"] = true;

$tableKeystrack_mails = array();
$tableKeystrack_mails[] = "mailid";
$tdatatrack_mails[".Keys"] = $tableKeystrack_mails;


$tdatatrack_mails[".hideMobileList"] = array();




//	mailid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "mailid";
	$fdata["GoodName"] = "mailid";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("Track_Mails","mailid");
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


	$tdatatrack_mails["mailid"] = $fdata;
		$tdatatrack_mails[".searchableFields"][] = "mailid";
//	mtitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mtitle";
	$fdata["GoodName"] = "mtitle";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("Track_Mails","mtitle");
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


	$tdatatrack_mails["mtitle"] = $fdata;
		$tdatatrack_mails[".searchableFields"][] = "mtitle";
//	mailsource
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mailsource";
	$fdata["GoodName"] = "mailsource";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("Track_Mails","mailsource");
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


	$tdatatrack_mails["mailsource"] = $fdata;
		$tdatatrack_mails[".searchableFields"][] = "mailsource";
//	maildestination
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "maildestination";
	$fdata["GoodName"] = "maildestination";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("Track_Mails","maildestination");
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


	$tdatatrack_mails["maildestination"] = $fdata;
		$tdatatrack_mails[".searchableFields"][] = "maildestination";
//	currentoffice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "currentoffice";
	$fdata["GoodName"] = "currentoffice";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("Track_Mails","currentoffice");
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


	$tdatatrack_mails["currentoffice"] = $fdata;
		$tdatatrack_mails[".searchableFields"][] = "currentoffice";
//	datereceived
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "datereceived";
	$fdata["GoodName"] = "datereceived";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("Track_Mails","datereceived");
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


	$tdatatrack_mails["datereceived"] = $fdata;
		$tdatatrack_mails[".searchableFields"][] = "datereceived";
//	receivedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "receivedby";
	$fdata["GoodName"] = "receivedby";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("Track_Mails","receivedby");
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


	$tdatatrack_mails["receivedby"] = $fdata;
		$tdatatrack_mails[".searchableFields"][] = "receivedby";
//	dateleft
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "dateleft";
	$fdata["GoodName"] = "dateleft";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("Track_Mails","dateleft");
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


	$tdatatrack_mails["dateleft"] = $fdata;
		$tdatatrack_mails[".searchableFields"][] = "dateleft";
//	nextoffice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "nextoffice";
	$fdata["GoodName"] = "nextoffice";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("Track_Mails","nextoffice");
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


	$tdatatrack_mails["nextoffice"] = $fdata;
		$tdatatrack_mails[".searchableFields"][] = "nextoffice";
//	sentby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "sentby";
	$fdata["GoodName"] = "sentby";
	$fdata["ownerTable"] = "transitmail";
	$fdata["Label"] = GetFieldLabel("Track_Mails","sentby");
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


	$tdatatrack_mails["sentby"] = $fdata;
		$tdatatrack_mails[".searchableFields"][] = "sentby";


$tables_data["Track Mails"]=&$tdatatrack_mails;
$field_labels["Track_Mails"] = &$fieldLabelstrack_mails;
$fieldToolTips["Track_Mails"] = &$fieldToolTipstrack_mails;
$placeHolders["Track_Mails"] = &$placeHolderstrack_mails;
$page_titles["Track_Mails"] = &$pageTitlestrack_mails;


changeTextControlsToDate( "Track Mails" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["Track Mails"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["Track Mails"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_track_mails()
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
	"m_srcTableName" => "Track Mails"
));

$proto6["m_sql"] = "mailid";
$proto6["m_srcTableName"] = "Track Mails";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mtitle",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "Track Mails"
));

$proto8["m_sql"] = "mtitle";
$proto8["m_srcTableName"] = "Track Mails";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mailsource",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "Track Mails"
));

$proto10["m_sql"] = "mailsource";
$proto10["m_srcTableName"] = "Track Mails";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "maildestination",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "Track Mails"
));

$proto12["m_sql"] = "maildestination";
$proto12["m_srcTableName"] = "Track Mails";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "currentoffice",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "Track Mails"
));

$proto14["m_sql"] = "currentoffice";
$proto14["m_srcTableName"] = "Track Mails";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "datereceived",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "Track Mails"
));

$proto16["m_sql"] = "datereceived";
$proto16["m_srcTableName"] = "Track Mails";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "receivedby",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "Track Mails"
));

$proto18["m_sql"] = "receivedby";
$proto18["m_srcTableName"] = "Track Mails";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "dateleft",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "Track Mails"
));

$proto20["m_sql"] = "dateleft";
$proto20["m_srcTableName"] = "Track Mails";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "nextoffice",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "Track Mails"
));

$proto22["m_sql"] = "nextoffice";
$proto22["m_srcTableName"] = "Track Mails";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sentby",
	"m_strTable" => "transitmail",
	"m_srcTableName" => "Track Mails"
));

$proto24["m_sql"] = "sentby";
$proto24["m_srcTableName"] = "Track Mails";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "transitmail";
$proto27["m_srcTableName"] = "Track Mails";
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
$proto26["m_srcTableName"] = "Track Mails";
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
$proto0["m_srcTableName"]="Track Mails";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_track_mails = createSqlQuery_track_mails();


	
		;

										

$tdatatrack_mails[".sqlquery"] = $queryData_track_mails;



$tdatatrack_mails[".hasEvents"] = false;

?>
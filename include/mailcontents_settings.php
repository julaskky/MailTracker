<?php
$tdatamailcontents = array();
$tdatamailcontents[".searchableFields"] = array();
$tdatamailcontents[".ShortName"] = "mailcontents";
$tdatamailcontents[".OwnerID"] = "";
$tdatamailcontents[".OriginalTable"] = "mailcontents";


$tdatamailcontents[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatamailcontents[".originalPagesByType"] = $tdatamailcontents[".pagesByType"];
$tdatamailcontents[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatamailcontents[".originalPages"] = $tdatamailcontents[".pages"];
$tdatamailcontents[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\"}" );
$tdatamailcontents[".originalDefaultPages"] = $tdatamailcontents[".defaultPages"];

//	field labels
$fieldLabelsmailcontents = array();
$fieldToolTipsmailcontents = array();
$pageTitlesmailcontents = array();
$placeHoldersmailcontents = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsmailcontents["English"] = array();
	$fieldToolTipsmailcontents["English"] = array();
	$placeHoldersmailcontents["English"] = array();
	$pageTitlesmailcontents["English"] = array();
	$fieldLabelsmailcontents["English"]["id"] = "Id";
	$fieldToolTipsmailcontents["English"]["id"] = "";
	$placeHoldersmailcontents["English"]["id"] = "";
	$fieldLabelsmailcontents["English"]["mtitle"] = "Title";
	$fieldToolTipsmailcontents["English"]["mtitle"] = "";
	$placeHoldersmailcontents["English"]["mtitle"] = "";
	$fieldLabelsmailcontents["English"]["mailpaths"] = "File Path";
	$fieldToolTipsmailcontents["English"]["mailpaths"] = "";
	$placeHoldersmailcontents["English"]["mailpaths"] = "";
	$fieldLabelsmailcontents["English"]["mailsource"] = "Mail Source";
	$fieldToolTipsmailcontents["English"]["mailsource"] = "";
	$placeHoldersmailcontents["English"]["mailsource"] = "";
	$fieldLabelsmailcontents["English"]["uploadedby"] = "Uploaded By";
	$fieldToolTipsmailcontents["English"]["uploadedby"] = "";
	$placeHoldersmailcontents["English"]["uploadedby"] = "";
	$fieldLabelsmailcontents["English"]["maildate"] = "Date Uploaded";
	$fieldToolTipsmailcontents["English"]["maildate"] = "";
	$placeHoldersmailcontents["English"]["maildate"] = "";
	$pageTitlesmailcontents["English"]["add"] = "Add new";
	$pageTitlesmailcontents["English"]["edit"] = "Edit";
	$pageTitlesmailcontents["English"]["search"] = "Advanced search";
	if (count($fieldToolTipsmailcontents["English"]))
		$tdatamailcontents[".isUseToolTips"] = true;
}


	$tdatamailcontents[".NCSearch"] = true;



$tdatamailcontents[".shortTableName"] = "mailcontents";
$tdatamailcontents[".nSecOptions"] = 0;

$tdatamailcontents[".mainTableOwnerID"] = "";
$tdatamailcontents[".entityType"] = 0;
$tdatamailcontents[".connId"] = "mailtracker_at_localhost";


$tdatamailcontents[".strOriginalTableName"] = "mailcontents";

	



$tdatamailcontents[".showAddInPopup"] = false;

$tdatamailcontents[".showEditInPopup"] = false;

$tdatamailcontents[".showViewInPopup"] = false;

$tdatamailcontents[".listAjax"] = false;
//	temporary
//$tdatamailcontents[".listAjax"] = false;

	$tdatamailcontents[".audit"] = false;

	$tdatamailcontents[".locking"] = false;


$pages = $tdatamailcontents[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatamailcontents[".edit"] = true;
	$tdatamailcontents[".afterEditAction"] = 1;
	$tdatamailcontents[".closePopupAfterEdit"] = 1;
	$tdatamailcontents[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatamailcontents[".add"] = true;
$tdatamailcontents[".afterAddAction"] = 1;
$tdatamailcontents[".closePopupAfterAdd"] = 1;
$tdatamailcontents[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatamailcontents[".list"] = true;
}



$tdatamailcontents[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatamailcontents[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatamailcontents[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatamailcontents[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatamailcontents[".printFriendly"] = true;
}



$tdatamailcontents[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatamailcontents[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatamailcontents[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatamailcontents[".isUseAjaxSuggest"] = true;





$tdatamailcontents[".ajaxCodeSnippetAdded"] = false;

$tdatamailcontents[".buttonsAdded"] = false;

$tdatamailcontents[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamailcontents[".isUseTimeForSearch"] = false;


$tdatamailcontents[".badgeColor"] = "008B8B";


$tdatamailcontents[".allSearchFields"] = array();
$tdatamailcontents[".filterFields"] = array();
$tdatamailcontents[".requiredSearchFields"] = array();

$tdatamailcontents[".googleLikeFields"] = array();
$tdatamailcontents[".googleLikeFields"][] = "id";
$tdatamailcontents[".googleLikeFields"][] = "mtitle";
$tdatamailcontents[".googleLikeFields"][] = "mailpaths";
$tdatamailcontents[".googleLikeFields"][] = "mailsource";
$tdatamailcontents[".googleLikeFields"][] = "uploadedby";
$tdatamailcontents[".googleLikeFields"][] = "maildate";



$tdatamailcontents[".tableType"] = "list";

$tdatamailcontents[".printerPageOrientation"] = 0;
$tdatamailcontents[".nPrinterPageScale"] = 100;

$tdatamailcontents[".nPrinterSplitRecords"] = 40;

$tdatamailcontents[".geocodingEnabled"] = false;










$tdatamailcontents[".pageSize"] = 20;

$tdatamailcontents[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatamailcontents[".strOrderBy"] = $tstrOrderBy;

$tdatamailcontents[".orderindexes"] = array();


$tdatamailcontents[".sqlHead"] = "SELECT id,  	mtitle,  	mailpaths,  	mailsource,  	uploadedby,  	maildate";
$tdatamailcontents[".sqlFrom"] = "FROM mailcontents";
$tdatamailcontents[".sqlWhereExpr"] = "";
$tdatamailcontents[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamailcontents[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamailcontents[".arrGroupsPerPage"] = $arrGPP;

$tdatamailcontents[".highlightSearchResults"] = true;

$tableKeysmailcontents = array();
$tableKeysmailcontents[] = "id";
$tdatamailcontents[".Keys"] = $tableKeysmailcontents;


$tdatamailcontents[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "mailcontents";
	$fdata["Label"] = GetFieldLabel("mailcontents","id");
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


	$tdatamailcontents["id"] = $fdata;
		$tdatamailcontents[".searchableFields"][] = "id";
//	mtitle
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mtitle";
	$fdata["GoodName"] = "mtitle";
	$fdata["ownerTable"] = "mailcontents";
	$fdata["Label"] = GetFieldLabel("mailcontents","mtitle");
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


	$tdatamailcontents["mtitle"] = $fdata;
		$tdatamailcontents[".searchableFields"][] = "mtitle";
//	mailpaths
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mailpaths";
	$fdata["GoodName"] = "mailpaths";
	$fdata["ownerTable"] = "mailcontents";
	$fdata["Label"] = GetFieldLabel("mailcontents","mailpaths");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "mailpaths";

		$fdata["sourceSingle"] = "mailpaths";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mailpaths";

	
		$fdata["CompatibilityMode"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Document Download");

	
	
	
				$vdata["ShowThumbnail"] = true;
					$vdata["ShowIcon"] = true;
				
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatamailcontents["mailpaths"] = $fdata;
		$tdatamailcontents[".searchableFields"][] = "mailpaths";
//	mailsource
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "mailsource";
	$fdata["GoodName"] = "mailsource";
	$fdata["ownerTable"] = "mailcontents";
	$fdata["Label"] = GetFieldLabel("mailcontents","mailsource");
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


	$tdatamailcontents["mailsource"] = $fdata;
		$tdatamailcontents[".searchableFields"][] = "mailsource";
//	uploadedby
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "uploadedby";
	$fdata["GoodName"] = "uploadedby";
	$fdata["ownerTable"] = "mailcontents";
	$fdata["Label"] = GetFieldLabel("mailcontents","uploadedby");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "uploadedby";

		$fdata["sourceSingle"] = "uploadedby";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "uploadedby";

	
	
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


	$tdatamailcontents["uploadedby"] = $fdata;
		$tdatamailcontents[".searchableFields"][] = "uploadedby";
//	maildate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "maildate";
	$fdata["GoodName"] = "maildate";
	$fdata["ownerTable"] = "mailcontents";
	$fdata["Label"] = GetFieldLabel("mailcontents","maildate");
	$fdata["FieldType"] = 7;


	
	
			

		$fdata["strField"] = "maildate";

		$fdata["sourceSingle"] = "maildate";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "maildate";

	
	
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


	$tdatamailcontents["maildate"] = $fdata;
		$tdatamailcontents[".searchableFields"][] = "maildate";


$tables_data["mailcontents"]=&$tdatamailcontents;
$field_labels["mailcontents"] = &$fieldLabelsmailcontents;
$fieldToolTips["mailcontents"] = &$fieldToolTipsmailcontents;
$placeHolders["mailcontents"] = &$placeHoldersmailcontents;
$page_titles["mailcontents"] = &$pageTitlesmailcontents;


changeTextControlsToDate( "mailcontents" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["mailcontents"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["mailcontents"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_mailcontents()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	mtitle,  	mailpaths,  	mailsource,  	uploadedby,  	maildate";
$proto0["m_strFrom"] = "FROM mailcontents";
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
	"m_strTable" => "mailcontents",
	"m_srcTableName" => "mailcontents"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "mailcontents";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "mtitle",
	"m_strTable" => "mailcontents",
	"m_srcTableName" => "mailcontents"
));

$proto8["m_sql"] = "mtitle";
$proto8["m_srcTableName"] = "mailcontents";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "mailpaths",
	"m_strTable" => "mailcontents",
	"m_srcTableName" => "mailcontents"
));

$proto10["m_sql"] = "mailpaths";
$proto10["m_srcTableName"] = "mailcontents";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "mailsource",
	"m_strTable" => "mailcontents",
	"m_srcTableName" => "mailcontents"
));

$proto12["m_sql"] = "mailsource";
$proto12["m_srcTableName"] = "mailcontents";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "uploadedby",
	"m_strTable" => "mailcontents",
	"m_srcTableName" => "mailcontents"
));

$proto14["m_sql"] = "uploadedby";
$proto14["m_srcTableName"] = "mailcontents";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "maildate",
	"m_strTable" => "mailcontents",
	"m_srcTableName" => "mailcontents"
));

$proto16["m_sql"] = "maildate";
$proto16["m_srcTableName"] = "mailcontents";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "mailcontents";
$proto19["m_srcTableName"] = "mailcontents";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "mtitle";
$proto19["m_columns"][] = "mailpaths";
$proto19["m_columns"][] = "mailsource";
$proto19["m_columns"][] = "uploadedby";
$proto19["m_columns"][] = "maildate";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "mailcontents";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "mailcontents";
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
$proto0["m_srcTableName"]="mailcontents";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_mailcontents = createSqlQuery_mailcontents();


	
		;

						

$tdatamailcontents[".sqlquery"] = $queryData_mailcontents;



$tdatamailcontents[".hasEvents"] = false;

?>
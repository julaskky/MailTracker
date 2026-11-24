<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["offices"] ) ) {
			$lookupTableLinks["offices"] = array();
		}
		if( !isset( $lookupTableLinks["offices"]["staffs.office"] )) {
			$lookupTableLinks["offices"]["staffs.office"] = array();
		}
		$lookupTableLinks["offices"]["staffs.office"]["edit"] = array("table" => "staffs", "field" => "office", "page" => "edit");
		if( !isset( $lookupTableLinks["ranks"] ) ) {
			$lookupTableLinks["ranks"] = array();
		}
		if( !isset( $lookupTableLinks["ranks"]["staffs.rank"] )) {
			$lookupTableLinks["ranks"]["staffs.rank"] = array();
		}
		$lookupTableLinks["ranks"]["staffs.rank"]["edit"] = array("table" => "staffs", "field" => "rank", "page" => "edit");
		if( !isset( $lookupTableLinks["mailcontents"] ) ) {
			$lookupTableLinks["mailcontents"] = array();
		}
		if( !isset( $lookupTableLinks["mailcontents"]["transitmail.mtitle"] )) {
			$lookupTableLinks["mailcontents"]["transitmail.mtitle"] = array();
		}
		$lookupTableLinks["mailcontents"]["transitmail.mtitle"]["edit"] = array("table" => "transitmail", "field" => "mtitle", "page" => "edit");
		if( !isset( $lookupTableLinks["offices"] ) ) {
			$lookupTableLinks["offices"] = array();
		}
		if( !isset( $lookupTableLinks["offices"]["transitmail.mailsource"] )) {
			$lookupTableLinks["offices"]["transitmail.mailsource"] = array();
		}
		$lookupTableLinks["offices"]["transitmail.mailsource"]["edit"] = array("table" => "transitmail", "field" => "mailsource", "page" => "edit");
		if( !isset( $lookupTableLinks["offices"] ) ) {
			$lookupTableLinks["offices"] = array();
		}
		if( !isset( $lookupTableLinks["offices"]["transitmail.maildestination"] )) {
			$lookupTableLinks["offices"]["transitmail.maildestination"] = array();
		}
		$lookupTableLinks["offices"]["transitmail.maildestination"]["edit"] = array("table" => "transitmail", "field" => "maildestination", "page" => "edit");
		if( !isset( $lookupTableLinks["offices"] ) ) {
			$lookupTableLinks["offices"] = array();
		}
		if( !isset( $lookupTableLinks["offices"]["transitmail.currentoffice"] )) {
			$lookupTableLinks["offices"]["transitmail.currentoffice"] = array();
		}
		$lookupTableLinks["offices"]["transitmail.currentoffice"]["edit"] = array("table" => "transitmail", "field" => "currentoffice", "page" => "edit");
		if( !isset( $lookupTableLinks["staffs"] ) ) {
			$lookupTableLinks["staffs"] = array();
		}
		if( !isset( $lookupTableLinks["staffs"]["transitmail.receivedby"] )) {
			$lookupTableLinks["staffs"]["transitmail.receivedby"] = array();
		}
		$lookupTableLinks["staffs"]["transitmail.receivedby"]["edit"] = array("table" => "transitmail", "field" => "receivedby", "page" => "edit");
		if( !isset( $lookupTableLinks["offices"] ) ) {
			$lookupTableLinks["offices"] = array();
		}
		if( !isset( $lookupTableLinks["offices"]["transitmail.nextoffice"] )) {
			$lookupTableLinks["offices"]["transitmail.nextoffice"] = array();
		}
		$lookupTableLinks["offices"]["transitmail.nextoffice"]["edit"] = array("table" => "transitmail", "field" => "nextoffice", "page" => "edit");
		if( !isset( $lookupTableLinks["staffs"] ) ) {
			$lookupTableLinks["staffs"] = array();
		}
		if( !isset( $lookupTableLinks["staffs"]["transitmail.sentby"] )) {
			$lookupTableLinks["staffs"]["transitmail.sentby"] = array();
		}
		$lookupTableLinks["staffs"]["transitmail.sentby"]["edit"] = array("table" => "transitmail", "field" => "sentby", "page" => "edit");
		if( !isset( $lookupTableLinks["offices"] ) ) {
			$lookupTableLinks["offices"] = array();
		}
		if( !isset( $lookupTableLinks["offices"]["mailcontents.mailsource"] )) {
			$lookupTableLinks["offices"]["mailcontents.mailsource"] = array();
		}
		$lookupTableLinks["offices"]["mailcontents.mailsource"]["edit"] = array("table" => "mailcontents", "field" => "mailsource", "page" => "edit");
		if( !isset( $lookupTableLinks["staffs"] ) ) {
			$lookupTableLinks["staffs"] = array();
		}
		if( !isset( $lookupTableLinks["staffs"]["mailcontents.uploadedby"] )) {
			$lookupTableLinks["staffs"]["mailcontents.uploadedby"] = array();
		}
		$lookupTableLinks["staffs"]["mailcontents.uploadedby"]["edit"] = array("table" => "mailcontents", "field" => "uploadedby", "page" => "edit");
}

?>
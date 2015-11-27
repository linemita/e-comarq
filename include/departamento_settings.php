<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadepartamento = array();	
	$tdatadepartamento[".truncateText"] = true;
	$tdatadepartamento[".NumberOfChars"] = 80; 
	$tdatadepartamento[".ShortName"] = "departamento";
	$tdatadepartamento[".OwnerID"] = "";
	$tdatadepartamento[".OriginalTable"] = "departamento";

//	field labels
$fieldLabelsdepartamento = array();
$fieldToolTipsdepartamento = array();
$pageTitlesdepartamento = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsdepartamento["Spanish"] = array();
	$fieldToolTipsdepartamento["Spanish"] = array();
	$pageTitlesdepartamento["Spanish"] = array();
	$fieldLabelsdepartamento["Spanish"]["id"] = "Id";
	$fieldToolTipsdepartamento["Spanish"]["id"] = "";
	$fieldLabelsdepartamento["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipsdepartamento["Spanish"]["Nombre"] = "";
	if (count($fieldToolTipsdepartamento["Spanish"]))
		$tdatadepartamento[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdepartamento[""] = array();
	$fieldToolTipsdepartamento[""] = array();
	$pageTitlesdepartamento[""] = array();
	$fieldLabelsdepartamento[""]["id"] = "Id";
	$fieldToolTipsdepartamento[""]["id"] = "";
	if (count($fieldToolTipsdepartamento[""]))
		$tdatadepartamento[".isUseToolTips"] = true;
}
	
	
	$tdatadepartamento[".NCSearch"] = true;



$tdatadepartamento[".shortTableName"] = "departamento";
$tdatadepartamento[".nSecOptions"] = 0;
$tdatadepartamento[".recsPerRowList"] = 1;
$tdatadepartamento[".mainTableOwnerID"] = "";
$tdatadepartamento[".moveNext"] = 1;
$tdatadepartamento[".nType"] = 0;

$tdatadepartamento[".strOriginalTableName"] = "departamento";




$tdatadepartamento[".showAddInPopup"] = false;

$tdatadepartamento[".showEditInPopup"] = false;

$tdatadepartamento[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadepartamento[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadepartamento[".fieldsForRegister"] = array();

$tdatadepartamento[".listAjax"] = false;

	$tdatadepartamento[".audit"] = false;

	$tdatadepartamento[".locking"] = false;

$tdatadepartamento[".edit"] = true;

$tdatadepartamento[".list"] = true;

$tdatadepartamento[".inlineEdit"] = true;
$tdatadepartamento[".inlineAdd"] = true;
$tdatadepartamento[".view"] = true;


$tdatadepartamento[".exportTo"] = true;

$tdatadepartamento[".printFriendly"] = true;

$tdatadepartamento[".delete"] = true;

$tdatadepartamento[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadepartamento[".searchSaving"] = false;
//

$tdatadepartamento[".showSearchPanel"] = true;
		$tdatadepartamento[".flexibleSearch"] = true;		

if (isMobile())
	$tdatadepartamento[".isUseAjaxSuggest"] = false;
else 
	$tdatadepartamento[".isUseAjaxSuggest"] = true;

$tdatadepartamento[".rowHighlite"] = true;



$tdatadepartamento[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadepartamento[".isUseTimeForSearch"] = false;



$tdatadepartamento[".useDetailsPreview"] = true;


$tdatadepartamento[".allSearchFields"] = array();
$tdatadepartamento[".filterFields"] = array();
$tdatadepartamento[".requiredSearchFields"] = array();

$tdatadepartamento[".allSearchFields"][] = "id";
	$tdatadepartamento[".allSearchFields"][] = "Nombre";
	

$tdatadepartamento[".googleLikeFields"] = array();
$tdatadepartamento[".googleLikeFields"][] = "id";
$tdatadepartamento[".googleLikeFields"][] = "Nombre";


$tdatadepartamento[".advSearchFields"] = array();
$tdatadepartamento[".advSearchFields"][] = "id";
$tdatadepartamento[".advSearchFields"][] = "Nombre";

$tdatadepartamento[".tableType"] = "list";

$tdatadepartamento[".printerPageOrientation"] = 0;
$tdatadepartamento[".nPrinterPageScale"] = 100;

$tdatadepartamento[".nPrinterSplitRecords"] = 40;

$tdatadepartamento[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatadepartamento[".pageSize"] = 20;

$tdatadepartamento[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadepartamento[".strOrderBy"] = $tstrOrderBy;

$tdatadepartamento[".orderindexes"] = array();

$tdatadepartamento[".sqlHead"] = "SELECT id,   Nombre";
$tdatadepartamento[".sqlFrom"] = "FROM departamento";
$tdatadepartamento[".sqlWhereExpr"] = "";
$tdatadepartamento[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadepartamento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadepartamento[".arrGroupsPerPage"] = $arrGPP;

$tdatadepartamento[".highlightSearchResults"] = true;

$tableKeysdepartamento = array();
$tableKeysdepartamento[] = "id";
$tdatadepartamento[".Keys"] = $tableKeysdepartamento;

$tdatadepartamento[".listFields"] = array();
$tdatadepartamento[".listFields"][] = "id";
$tdatadepartamento[".listFields"][] = "Nombre";

$tdatadepartamento[".hideMobileList"] = array();


$tdatadepartamento[".viewFields"] = array();
$tdatadepartamento[".viewFields"][] = "id";
$tdatadepartamento[".viewFields"][] = "Nombre";

$tdatadepartamento[".addFields"] = array();
$tdatadepartamento[".addFields"][] = "Nombre";

$tdatadepartamento[".inlineAddFields"] = array();
$tdatadepartamento[".inlineAddFields"][] = "Nombre";

$tdatadepartamento[".editFields"] = array();
$tdatadepartamento[".editFields"][] = "Nombre";

$tdatadepartamento[".inlineEditFields"] = array();
$tdatadepartamento[".inlineEditFields"][] = "Nombre";

$tdatadepartamento[".exportFields"] = array();
$tdatadepartamento[".exportFields"][] = "id";
$tdatadepartamento[".exportFields"][] = "Nombre";

$tdatadepartamento[".importFields"] = array();

$tdatadepartamento[".printFields"] = array();
$tdatadepartamento[".printFields"][] = "id";
$tdatadepartamento[".printFields"][] = "Nombre";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "departamento";
	$fdata["Label"] = GetFieldLabel("departamento","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatadepartamento["id"] = $fdata;
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "departamento";
	$fdata["Label"] = GetFieldLabel("departamento","Nombre"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Nombre"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombre";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Text field");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		
		
			$edata["HTML5InuptType"] = "text";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=45";
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatadepartamento["Nombre"] = $fdata;

	
$tables_data["departamento"]=&$tdatadepartamento;
$field_labels["departamento"] = &$fieldLabelsdepartamento;
$fieldToolTips["departamento"] = &$fieldToolTipsdepartamento;
$page_titles["departamento"] = &$pageTitlesdepartamento;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["departamento"] = array();
//	municipio
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="municipio";
		$detailsParam["dOriginalTable"] = "municipio";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "municipio";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["departamento"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["departamento"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["departamento"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["departamento"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["departamento"][$dIndex]["detailKeys"][]="Departamento_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["departamento"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_departamento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   Nombre";
$proto0["m_strFrom"] = "FROM departamento";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "departamento",
	"m_srcTableName" => "departamento"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "departamento";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "departamento",
	"m_srcTableName" => "departamento"
));

$proto7["m_sql"] = "Nombre";
$proto7["m_srcTableName"] = "departamento";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "departamento";
$proto10["m_srcTableName"] = "departamento";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "id";
$proto10["m_columns"][] = "Nombre";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "departamento";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "departamento";
$proto11=array();
$proto11["m_sql"] = "";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

$proto9["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto9);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="departamento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_departamento = createSqlQuery_departamento();


	
		
	
$tdatadepartamento[".sqlquery"] = $queryData_departamento;

$tableEvents["departamento"] = new eventsBase;
$tdatadepartamento[".hasEvents"] = false;

?>
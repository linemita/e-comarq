<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacategorias = array();	
	$tdatacategorias[".truncateText"] = true;
	$tdatacategorias[".NumberOfChars"] = 80; 
	$tdatacategorias[".ShortName"] = "categorias";
	$tdatacategorias[".OwnerID"] = "";
	$tdatacategorias[".OriginalTable"] = "categorias";

//	field labels
$fieldLabelscategorias = array();
$fieldToolTipscategorias = array();
$pageTitlescategorias = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscategorias["Spanish"] = array();
	$fieldToolTipscategorias["Spanish"] = array();
	$pageTitlescategorias["Spanish"] = array();
	$fieldLabelscategorias["Spanish"]["id"] = "Id";
	$fieldToolTipscategorias["Spanish"]["id"] = "";
	$fieldLabelscategorias["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipscategorias["Spanish"]["Nombre"] = "";
	if (count($fieldToolTipscategorias["Spanish"]))
		$tdatacategorias[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscategorias[""] = array();
	$fieldToolTipscategorias[""] = array();
	$pageTitlescategorias[""] = array();
	if (count($fieldToolTipscategorias[""]))
		$tdatacategorias[".isUseToolTips"] = true;
}
	
	
	$tdatacategorias[".NCSearch"] = true;



$tdatacategorias[".shortTableName"] = "categorias";
$tdatacategorias[".nSecOptions"] = 0;
$tdatacategorias[".recsPerRowList"] = 1;
$tdatacategorias[".mainTableOwnerID"] = "";
$tdatacategorias[".moveNext"] = 1;
$tdatacategorias[".nType"] = 0;

$tdatacategorias[".strOriginalTableName"] = "categorias";




$tdatacategorias[".showAddInPopup"] = false;

$tdatacategorias[".showEditInPopup"] = false;

$tdatacategorias[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacategorias[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacategorias[".fieldsForRegister"] = array();

$tdatacategorias[".listAjax"] = false;

	$tdatacategorias[".audit"] = false;

	$tdatacategorias[".locking"] = false;

$tdatacategorias[".edit"] = true;

$tdatacategorias[".list"] = true;

$tdatacategorias[".inlineEdit"] = true;
$tdatacategorias[".inlineAdd"] = true;
$tdatacategorias[".view"] = true;

$tdatacategorias[".import"] = true;

$tdatacategorias[".exportTo"] = true;

$tdatacategorias[".printFriendly"] = true;

$tdatacategorias[".delete"] = true;

$tdatacategorias[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacategorias[".searchSaving"] = false;
//

$tdatacategorias[".showSearchPanel"] = true;
		$tdatacategorias[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacategorias[".isUseAjaxSuggest"] = false;
else 
	$tdatacategorias[".isUseAjaxSuggest"] = true;

$tdatacategorias[".rowHighlite"] = true;



$tdatacategorias[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacategorias[".isUseTimeForSearch"] = false;



$tdatacategorias[".useDetailsPreview"] = true;


$tdatacategorias[".allSearchFields"] = array();
$tdatacategorias[".filterFields"] = array();
$tdatacategorias[".requiredSearchFields"] = array();

$tdatacategorias[".allSearchFields"][] = "id";
	$tdatacategorias[".allSearchFields"][] = "Nombre";
	

$tdatacategorias[".googleLikeFields"] = array();
$tdatacategorias[".googleLikeFields"][] = "id";
$tdatacategorias[".googleLikeFields"][] = "Nombre";


$tdatacategorias[".advSearchFields"] = array();
$tdatacategorias[".advSearchFields"][] = "id";
$tdatacategorias[".advSearchFields"][] = "Nombre";

$tdatacategorias[".tableType"] = "list";

$tdatacategorias[".printerPageOrientation"] = 0;
$tdatacategorias[".nPrinterPageScale"] = 100;

$tdatacategorias[".nPrinterSplitRecords"] = 40;

$tdatacategorias[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatacategorias[".pageSize"] = 20;

$tdatacategorias[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacategorias[".strOrderBy"] = $tstrOrderBy;

$tdatacategorias[".orderindexes"] = array();

$tdatacategorias[".sqlHead"] = "SELECT id,   Nombre";
$tdatacategorias[".sqlFrom"] = "FROM categorias";
$tdatacategorias[".sqlWhereExpr"] = "";
$tdatacategorias[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacategorias[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacategorias[".arrGroupsPerPage"] = $arrGPP;

$tdatacategorias[".highlightSearchResults"] = true;

$tableKeyscategorias = array();
$tableKeyscategorias[] = "id";
$tdatacategorias[".Keys"] = $tableKeyscategorias;

$tdatacategorias[".listFields"] = array();
$tdatacategorias[".listFields"][] = "id";
$tdatacategorias[".listFields"][] = "Nombre";

$tdatacategorias[".hideMobileList"] = array();


$tdatacategorias[".viewFields"] = array();
$tdatacategorias[".viewFields"][] = "id";
$tdatacategorias[".viewFields"][] = "Nombre";

$tdatacategorias[".addFields"] = array();
$tdatacategorias[".addFields"][] = "Nombre";

$tdatacategorias[".inlineAddFields"] = array();
$tdatacategorias[".inlineAddFields"][] = "Nombre";

$tdatacategorias[".editFields"] = array();
$tdatacategorias[".editFields"][] = "Nombre";

$tdatacategorias[".inlineEditFields"] = array();
$tdatacategorias[".inlineEditFields"][] = "Nombre";

$tdatacategorias[".exportFields"] = array();
$tdatacategorias[".exportFields"][] = "id";
$tdatacategorias[".exportFields"][] = "Nombre";

$tdatacategorias[".importFields"] = array();
$tdatacategorias[".importFields"][] = "id";
$tdatacategorias[".importFields"][] = "Nombre";

$tdatacategorias[".printFields"] = array();
$tdatacategorias[".printFields"][] = "id";
$tdatacategorias[".printFields"][] = "Nombre";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias","id"); 
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

	

	
	$tdatacategorias["id"] = $fdata;
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "categorias";
	$fdata["Label"] = GetFieldLabel("categorias","Nombre"); 
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

	

	
	$tdatacategorias["Nombre"] = $fdata;

	
$tables_data["categorias"]=&$tdatacategorias;
$field_labels["categorias"] = &$fieldLabelscategorias;
$fieldToolTips["categorias"] = &$fieldToolTipscategorias;
$page_titles["categorias"] = &$pageTitlescategorias;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["categorias"] = array();
//	productos
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="productos";
		$detailsParam["dOriginalTable"] = "productos";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "productos";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["categorias"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["categorias"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["categorias"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["categorias"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["categorias"][$dIndex]["detailKeys"][]="Categorias_id";
//	Principal
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="Principal";
		$detailsParam["dOriginalTable"] = "productos";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "Principal";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["categorias"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["categorias"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["categorias"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["categorias"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["categorias"][$dIndex]["detailKeys"][]="Categorias_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["categorias"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_categorias()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   Nombre";
$proto0["m_strFrom"] = "FROM categorias";
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
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "categorias";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "categorias",
	"m_srcTableName" => "categorias"
));

$proto7["m_sql"] = "Nombre";
$proto7["m_srcTableName"] = "categorias";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto9=array();
$proto9["m_link"] = "SQLL_MAIN";
			$proto10=array();
$proto10["m_strName"] = "categorias";
$proto10["m_srcTableName"] = "categorias";
$proto10["m_columns"] = array();
$proto10["m_columns"][] = "id";
$proto10["m_columns"][] = "Nombre";
$obj = new SQLTable($proto10);

$proto9["m_table"] = $obj;
$proto9["m_sql"] = "categorias";
$proto9["m_alias"] = "";
$proto9["m_srcTableName"] = "categorias";
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
$proto0["m_srcTableName"]="categorias";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_categorias = createSqlQuery_categorias();


	
		
	
$tdatacategorias[".sqlquery"] = $queryData_categorias;

$tableEvents["categorias"] = new eventsBase;
$tdatacategorias[".hasEvents"] = false;

?>
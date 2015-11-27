<?php
require_once(getabspath("classes/cipherer.php"));




$tdatamunicipio = array();	
	$tdatamunicipio[".truncateText"] = true;
	$tdatamunicipio[".NumberOfChars"] = 80; 
	$tdatamunicipio[".ShortName"] = "municipio";
	$tdatamunicipio[".OwnerID"] = "";
	$tdatamunicipio[".OriginalTable"] = "municipio";

//	field labels
$fieldLabelsmunicipio = array();
$fieldToolTipsmunicipio = array();
$pageTitlesmunicipio = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsmunicipio["Spanish"] = array();
	$fieldToolTipsmunicipio["Spanish"] = array();
	$pageTitlesmunicipio["Spanish"] = array();
	$fieldLabelsmunicipio["Spanish"]["id"] = "Id";
	$fieldToolTipsmunicipio["Spanish"]["id"] = "";
	$fieldLabelsmunicipio["Spanish"]["Nombre"] = "Nombre";
	$fieldToolTipsmunicipio["Spanish"]["Nombre"] = "";
	$fieldLabelsmunicipio["Spanish"]["Departamento_id"] = "departamento";
	$fieldToolTipsmunicipio["Spanish"]["Departamento_id"] = "";
	if (count($fieldToolTipsmunicipio["Spanish"]))
		$tdatamunicipio[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsmunicipio[""] = array();
	$fieldToolTipsmunicipio[""] = array();
	$pageTitlesmunicipio[""] = array();
	$fieldLabelsmunicipio[""]["id"] = "Id";
	$fieldToolTipsmunicipio[""]["id"] = "";
	if (count($fieldToolTipsmunicipio[""]))
		$tdatamunicipio[".isUseToolTips"] = true;
}
	
	
	$tdatamunicipio[".NCSearch"] = true;



$tdatamunicipio[".shortTableName"] = "municipio";
$tdatamunicipio[".nSecOptions"] = 0;
$tdatamunicipio[".recsPerRowList"] = 1;
$tdatamunicipio[".mainTableOwnerID"] = "";
$tdatamunicipio[".moveNext"] = 1;
$tdatamunicipio[".nType"] = 0;

$tdatamunicipio[".strOriginalTableName"] = "municipio";




$tdatamunicipio[".showAddInPopup"] = false;

$tdatamunicipio[".showEditInPopup"] = false;

$tdatamunicipio[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatamunicipio[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatamunicipio[".fieldsForRegister"] = array();

$tdatamunicipio[".listAjax"] = false;

	$tdatamunicipio[".audit"] = false;

	$tdatamunicipio[".locking"] = false;

$tdatamunicipio[".edit"] = true;

$tdatamunicipio[".list"] = true;

$tdatamunicipio[".view"] = true;



$tdatamunicipio[".printFriendly"] = true;

$tdatamunicipio[".delete"] = true;

$tdatamunicipio[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatamunicipio[".searchSaving"] = false;
//

$tdatamunicipio[".showSearchPanel"] = true;
		$tdatamunicipio[".flexibleSearch"] = true;		

if (isMobile())
	$tdatamunicipio[".isUseAjaxSuggest"] = false;
else 
	$tdatamunicipio[".isUseAjaxSuggest"] = true;

$tdatamunicipio[".rowHighlite"] = true;



$tdatamunicipio[".addPageEvents"] = false;

// use timepicker for search panel
$tdatamunicipio[".isUseTimeForSearch"] = false;



$tdatamunicipio[".useDetailsPreview"] = true;


$tdatamunicipio[".allSearchFields"] = array();
$tdatamunicipio[".filterFields"] = array();
$tdatamunicipio[".requiredSearchFields"] = array();

$tdatamunicipio[".allSearchFields"][] = "id";
	$tdatamunicipio[".allSearchFields"][] = "Nombre";
	$tdatamunicipio[".allSearchFields"][] = "Departamento_id";
	

$tdatamunicipio[".googleLikeFields"] = array();
$tdatamunicipio[".googleLikeFields"][] = "id";
$tdatamunicipio[".googleLikeFields"][] = "Nombre";
$tdatamunicipio[".googleLikeFields"][] = "Departamento_id";


$tdatamunicipio[".advSearchFields"] = array();
$tdatamunicipio[".advSearchFields"][] = "id";
$tdatamunicipio[".advSearchFields"][] = "Nombre";
$tdatamunicipio[".advSearchFields"][] = "Departamento_id";

$tdatamunicipio[".tableType"] = "list";

$tdatamunicipio[".printerPageOrientation"] = 0;
$tdatamunicipio[".nPrinterPageScale"] = 100;

$tdatamunicipio[".nPrinterSplitRecords"] = 40;

$tdatamunicipio[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatamunicipio[".pageSize"] = 20;

$tdatamunicipio[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatamunicipio[".strOrderBy"] = $tstrOrderBy;

$tdatamunicipio[".orderindexes"] = array();

$tdatamunicipio[".sqlHead"] = "SELECT id,   Nombre,   Departamento_id";
$tdatamunicipio[".sqlFrom"] = "FROM municipio";
$tdatamunicipio[".sqlWhereExpr"] = "";
$tdatamunicipio[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatamunicipio[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatamunicipio[".arrGroupsPerPage"] = $arrGPP;

$tdatamunicipio[".highlightSearchResults"] = true;

$tableKeysmunicipio = array();
$tableKeysmunicipio[] = "id";
$tdatamunicipio[".Keys"] = $tableKeysmunicipio;

$tdatamunicipio[".listFields"] = array();
$tdatamunicipio[".listFields"][] = "id";
$tdatamunicipio[".listFields"][] = "Nombre";
$tdatamunicipio[".listFields"][] = "Departamento_id";

$tdatamunicipio[".hideMobileList"] = array();


$tdatamunicipio[".viewFields"] = array();
$tdatamunicipio[".viewFields"][] = "id";
$tdatamunicipio[".viewFields"][] = "Nombre";
$tdatamunicipio[".viewFields"][] = "Departamento_id";

$tdatamunicipio[".addFields"] = array();
$tdatamunicipio[".addFields"][] = "Nombre";
$tdatamunicipio[".addFields"][] = "Departamento_id";

$tdatamunicipio[".inlineAddFields"] = array();

$tdatamunicipio[".editFields"] = array();
$tdatamunicipio[".editFields"][] = "Nombre";
$tdatamunicipio[".editFields"][] = "Departamento_id";

$tdatamunicipio[".inlineEditFields"] = array();

$tdatamunicipio[".exportFields"] = array();

$tdatamunicipio[".importFields"] = array();

$tdatamunicipio[".printFields"] = array();
$tdatamunicipio[".printFields"][] = "id";
$tdatamunicipio[".printFields"][] = "Nombre";
$tdatamunicipio[".printFields"][] = "Departamento_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "municipio";
	$fdata["Label"] = GetFieldLabel("municipio","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
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

	

	
	$tdatamunicipio["id"] = $fdata;
//	Nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombre";
	$fdata["GoodName"] = "Nombre";
	$fdata["ownerTable"] = "municipio";
	$fdata["Label"] = GetFieldLabel("municipio","Nombre"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
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

	

	
	$tdatamunicipio["Nombre"] = $fdata;
//	Departamento_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Departamento_id";
	$fdata["GoodName"] = "Departamento_id";
	$fdata["ownerTable"] = "municipio";
	$fdata["Label"] = GetFieldLabel("municipio","Departamento_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "Departamento_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Departamento_id";
	
		
		
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
	
	$edata = array("EditFormat" => "Lookup wizard");
	
			
	
	
// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "departamento";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nombre";
	
		
	$edata["LookupOrderBy"] = "";
	
		
			
		
				
	
	
		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatamunicipio["Departamento_id"] = $fdata;

	
$tables_data["municipio"]=&$tdatamunicipio;
$field_labels["municipio"] = &$fieldLabelsmunicipio;
$fieldToolTips["municipio"] = &$fieldToolTipsmunicipio;
$page_titles["municipio"] = &$pageTitlesmunicipio;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["municipio"] = array();
//	usuario
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="usuario";
		$detailsParam["dOriginalTable"] = "usuario";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "usuario";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["municipio"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["municipio"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["municipio"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["municipio"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["municipio"][$dIndex]["detailKeys"][]="Municipio_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["municipio"] = array();


	
				$strOriginalDetailsTable="departamento";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="departamento";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "departamento";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "1";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["municipio"][0] = $masterParams;	
				$masterTablesData["municipio"][0]["masterKeys"] = array();
	$masterTablesData["municipio"][0]["masterKeys"][]="id";
				$masterTablesData["municipio"][0]["detailKeys"] = array();
	$masterTablesData["municipio"][0]["detailKeys"][]="Departamento_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_municipio()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   Nombre,   Departamento_id";
$proto0["m_strFrom"] = "FROM municipio";
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
	"m_strTable" => "municipio",
	"m_srcTableName" => "municipio"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "municipio";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombre",
	"m_strTable" => "municipio",
	"m_srcTableName" => "municipio"
));

$proto7["m_sql"] = "Nombre";
$proto7["m_srcTableName"] = "municipio";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Departamento_id",
	"m_strTable" => "municipio",
	"m_srcTableName" => "municipio"
));

$proto9["m_sql"] = "Departamento_id";
$proto9["m_srcTableName"] = "municipio";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strName"] = "municipio";
$proto12["m_srcTableName"] = "municipio";
$proto12["m_columns"] = array();
$proto12["m_columns"][] = "id";
$proto12["m_columns"][] = "Nombre";
$proto12["m_columns"][] = "Departamento_id";
$obj = new SQLTable($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "municipio";
$proto11["m_alias"] = "";
$proto11["m_srcTableName"] = "municipio";
$proto13=array();
$proto13["m_sql"] = "";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="municipio";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_municipio = createSqlQuery_municipio();


	
			
	
$tdatamunicipio[".sqlquery"] = $queryData_municipio;

$tableEvents["municipio"] = new eventsBase;
$tdatamunicipio[".hasEvents"] = false;

?>
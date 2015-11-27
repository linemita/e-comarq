<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacalificacion = array();	
	$tdatacalificacion[".truncateText"] = true;
	$tdatacalificacion[".NumberOfChars"] = 80; 
	$tdatacalificacion[".ShortName"] = "calificacion";
	$tdatacalificacion[".OwnerID"] = "";
	$tdatacalificacion[".OriginalTable"] = "calificacion";

//	field labels
$fieldLabelscalificacion = array();
$fieldToolTipscalificacion = array();
$pageTitlescalificacion = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscalificacion["Spanish"] = array();
	$fieldToolTipscalificacion["Spanish"] = array();
	$pageTitlescalificacion["Spanish"] = array();
	$fieldLabelscalificacion["Spanish"]["id"] = "Id";
	$fieldToolTipscalificacion["Spanish"]["id"] = "";
	$fieldLabelscalificacion["Spanish"]["calificacion"] = "Calificacion";
	$fieldToolTipscalificacion["Spanish"]["calificacion"] = "";
	$fieldLabelscalificacion["Spanish"]["Productos_idProductos"] = "Producto";
	$fieldToolTipscalificacion["Spanish"]["Productos_idProductos"] = "";
	$fieldLabelscalificacion["Spanish"]["Usuario_id"] = "usuario";
	$fieldToolTipscalificacion["Spanish"]["Usuario_id"] = "";
	if (count($fieldToolTipscalificacion["Spanish"]))
		$tdatacalificacion[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscalificacion[""] = array();
	$fieldToolTipscalificacion[""] = array();
	$pageTitlescalificacion[""] = array();
	$fieldLabelscalificacion[""]["id"] = "Id";
	$fieldToolTipscalificacion[""]["id"] = "";
	if (count($fieldToolTipscalificacion[""]))
		$tdatacalificacion[".isUseToolTips"] = true;
}
	
	
	$tdatacalificacion[".NCSearch"] = true;



$tdatacalificacion[".shortTableName"] = "calificacion";
$tdatacalificacion[".nSecOptions"] = 0;
$tdatacalificacion[".recsPerRowList"] = 1;
$tdatacalificacion[".mainTableOwnerID"] = "";
$tdatacalificacion[".moveNext"] = 1;
$tdatacalificacion[".nType"] = 0;

$tdatacalificacion[".strOriginalTableName"] = "calificacion";




$tdatacalificacion[".showAddInPopup"] = false;

$tdatacalificacion[".showEditInPopup"] = false;

$tdatacalificacion[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacalificacion[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacalificacion[".fieldsForRegister"] = array();

$tdatacalificacion[".listAjax"] = false;

	$tdatacalificacion[".audit"] = false;

	$tdatacalificacion[".locking"] = false;

$tdatacalificacion[".edit"] = true;

$tdatacalificacion[".list"] = true;

$tdatacalificacion[".inlineEdit"] = true;
$tdatacalificacion[".inlineAdd"] = true;
$tdatacalificacion[".view"] = true;

$tdatacalificacion[".import"] = true;

$tdatacalificacion[".exportTo"] = true;

$tdatacalificacion[".printFriendly"] = true;

$tdatacalificacion[".delete"] = true;

$tdatacalificacion[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacalificacion[".searchSaving"] = false;
//

$tdatacalificacion[".showSearchPanel"] = true;
		$tdatacalificacion[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacalificacion[".isUseAjaxSuggest"] = false;
else 
	$tdatacalificacion[".isUseAjaxSuggest"] = true;

$tdatacalificacion[".rowHighlite"] = true;



$tdatacalificacion[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalificacion[".isUseTimeForSearch"] = false;





$tdatacalificacion[".allSearchFields"] = array();
$tdatacalificacion[".filterFields"] = array();
$tdatacalificacion[".requiredSearchFields"] = array();

$tdatacalificacion[".allSearchFields"][] = "id";
	$tdatacalificacion[".allSearchFields"][] = "calificacion";
	$tdatacalificacion[".allSearchFields"][] = "Productos_idProductos";
	$tdatacalificacion[".allSearchFields"][] = "Usuario_id";
	

$tdatacalificacion[".googleLikeFields"] = array();
$tdatacalificacion[".googleLikeFields"][] = "id";
$tdatacalificacion[".googleLikeFields"][] = "calificacion";
$tdatacalificacion[".googleLikeFields"][] = "Productos_idProductos";
$tdatacalificacion[".googleLikeFields"][] = "Usuario_id";


$tdatacalificacion[".advSearchFields"] = array();
$tdatacalificacion[".advSearchFields"][] = "id";
$tdatacalificacion[".advSearchFields"][] = "calificacion";
$tdatacalificacion[".advSearchFields"][] = "Productos_idProductos";
$tdatacalificacion[".advSearchFields"][] = "Usuario_id";

$tdatacalificacion[".tableType"] = "list";

$tdatacalificacion[".printerPageOrientation"] = 0;
$tdatacalificacion[".nPrinterPageScale"] = 100;

$tdatacalificacion[".nPrinterSplitRecords"] = 40;

$tdatacalificacion[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatacalificacion[".pageSize"] = 20;

$tdatacalificacion[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacalificacion[".strOrderBy"] = $tstrOrderBy;

$tdatacalificacion[".orderindexes"] = array();

$tdatacalificacion[".sqlHead"] = "SELECT id,  calificacion,  Productos_idProductos,  Usuario_id";
$tdatacalificacion[".sqlFrom"] = "FROM calificacion";
$tdatacalificacion[".sqlWhereExpr"] = "";
$tdatacalificacion[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalificacion[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalificacion[".arrGroupsPerPage"] = $arrGPP;

$tdatacalificacion[".highlightSearchResults"] = true;

$tableKeyscalificacion = array();
$tableKeyscalificacion[] = "id";
$tdatacalificacion[".Keys"] = $tableKeyscalificacion;

$tdatacalificacion[".listFields"] = array();
$tdatacalificacion[".listFields"][] = "id";
$tdatacalificacion[".listFields"][] = "calificacion";
$tdatacalificacion[".listFields"][] = "Productos_idProductos";
$tdatacalificacion[".listFields"][] = "Usuario_id";

$tdatacalificacion[".hideMobileList"] = array();


$tdatacalificacion[".viewFields"] = array();
$tdatacalificacion[".viewFields"][] = "id";
$tdatacalificacion[".viewFields"][] = "calificacion";
$tdatacalificacion[".viewFields"][] = "Productos_idProductos";
$tdatacalificacion[".viewFields"][] = "Usuario_id";

$tdatacalificacion[".addFields"] = array();
$tdatacalificacion[".addFields"][] = "calificacion";
$tdatacalificacion[".addFields"][] = "Productos_idProductos";
$tdatacalificacion[".addFields"][] = "Usuario_id";

$tdatacalificacion[".inlineAddFields"] = array();
$tdatacalificacion[".inlineAddFields"][] = "calificacion";
$tdatacalificacion[".inlineAddFields"][] = "Productos_idProductos";
$tdatacalificacion[".inlineAddFields"][] = "Usuario_id";

$tdatacalificacion[".editFields"] = array();
$tdatacalificacion[".editFields"][] = "calificacion";
$tdatacalificacion[".editFields"][] = "Productos_idProductos";
$tdatacalificacion[".editFields"][] = "Usuario_id";

$tdatacalificacion[".inlineEditFields"] = array();
$tdatacalificacion[".inlineEditFields"][] = "calificacion";
$tdatacalificacion[".inlineEditFields"][] = "Productos_idProductos";
$tdatacalificacion[".inlineEditFields"][] = "Usuario_id";

$tdatacalificacion[".exportFields"] = array();
$tdatacalificacion[".exportFields"][] = "id";
$tdatacalificacion[".exportFields"][] = "calificacion";
$tdatacalificacion[".exportFields"][] = "Productos_idProductos";
$tdatacalificacion[".exportFields"][] = "Usuario_id";

$tdatacalificacion[".importFields"] = array();
$tdatacalificacion[".importFields"][] = "id";
$tdatacalificacion[".importFields"][] = "calificacion";
$tdatacalificacion[".importFields"][] = "Productos_idProductos";
$tdatacalificacion[".importFields"][] = "Usuario_id";

$tdatacalificacion[".printFields"] = array();
$tdatacalificacion[".printFields"][] = "id";
$tdatacalificacion[".printFields"][] = "calificacion";
$tdatacalificacion[".printFields"][] = "Productos_idProductos";
$tdatacalificacion[".printFields"][] = "Usuario_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calificacion";
	$fdata["Label"] = GetFieldLabel("calificacion","id"); 
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

	

	
	$tdatacalificacion["id"] = $fdata;
//	calificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "calificacion";
	$fdata["GoodName"] = "calificacion";
	$fdata["ownerTable"] = "calificacion";
	$fdata["Label"] = GetFieldLabel("calificacion","calificacion"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "calificacion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calificacion";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "number";
	
		$edata["EditParams"] = "";
			
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");	
								
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatacalificacion["calificacion"] = $fdata;
//	Productos_idProductos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Productos_idProductos";
	$fdata["GoodName"] = "Productos_idProductos";
	$fdata["ownerTable"] = "calificacion";
	$fdata["Label"] = GetFieldLabel("calificacion","Productos_idProductos"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Productos_idProductos"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Productos_idProductos";
	
		
		
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
	$edata["LookupTable"] = "productos";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "nombre";
	
		
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

	

	
	$tdatacalificacion["Productos_idProductos"] = $fdata;
//	Usuario_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Usuario_id";
	$fdata["GoodName"] = "Usuario_id";
	$fdata["ownerTable"] = "calificacion";
	$fdata["Label"] = GetFieldLabel("calificacion","Usuario_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "Usuario_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Usuario_id";
	
		
		
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
	$edata["LookupTable"] = "usuario";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
			
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Nombres";
	
		
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

	

	
	$tdatacalificacion["Usuario_id"] = $fdata;

	
$tables_data["calificacion"]=&$tdatacalificacion;
$field_labels["calificacion"] = &$fieldLabelscalificacion;
$fieldToolTips["calificacion"] = &$fieldToolTipscalificacion;
$page_titles["calificacion"] = &$pageTitlescalificacion;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["calificacion"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["calificacion"] = array();


	
				$strOriginalDetailsTable="productos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="productos";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "productos";
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
					$masterTablesData["calificacion"][0] = $masterParams;	
				$masterTablesData["calificacion"][0]["masterKeys"] = array();
	$masterTablesData["calificacion"][0]["masterKeys"][]="id";
				$masterTablesData["calificacion"][0]["detailKeys"] = array();
	$masterTablesData["calificacion"][0]["detailKeys"][]="Productos_idProductos";
		
	
				$strOriginalDetailsTable="usuario";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="usuario";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "usuario";
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
					$masterTablesData["calificacion"][1] = $masterParams;	
				$masterTablesData["calificacion"][1]["masterKeys"] = array();
	$masterTablesData["calificacion"][1]["masterKeys"][]="id";
				$masterTablesData["calificacion"][1]["detailKeys"] = array();
	$masterTablesData["calificacion"][1]["detailKeys"][]="Usuario_id";
		
	
				$strOriginalDetailsTable="productos";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="Principal";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "Principal";
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
					$masterTablesData["calificacion"][2] = $masterParams;	
				$masterTablesData["calificacion"][2]["masterKeys"] = array();
	$masterTablesData["calificacion"][2]["masterKeys"][]="id";
				$masterTablesData["calificacion"][2]["detailKeys"] = array();
	$masterTablesData["calificacion"][2]["detailKeys"][]="Productos_idProductos";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_calificacion()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  calificacion,  Productos_idProductos,  Usuario_id";
$proto0["m_strFrom"] = "FROM calificacion";
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
	"m_strTable" => "calificacion",
	"m_srcTableName" => "calificacion"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "calificacion";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "calificacion",
	"m_strTable" => "calificacion",
	"m_srcTableName" => "calificacion"
));

$proto7["m_sql"] = "calificacion";
$proto7["m_srcTableName"] = "calificacion";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Productos_idProductos",
	"m_strTable" => "calificacion",
	"m_srcTableName" => "calificacion"
));

$proto9["m_sql"] = "Productos_idProductos";
$proto9["m_srcTableName"] = "calificacion";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario_id",
	"m_strTable" => "calificacion",
	"m_srcTableName" => "calificacion"
));

$proto11["m_sql"] = "Usuario_id";
$proto11["m_srcTableName"] = "calificacion";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "calificacion";
$proto14["m_srcTableName"] = "calificacion";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "calificacion";
$proto14["m_columns"][] = "Productos_idProductos";
$proto14["m_columns"][] = "Usuario_id";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "calificacion";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "calificacion";
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto13["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto13);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="calificacion";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calificacion = createSqlQuery_calificacion();


	
				
	
$tdatacalificacion[".sqlquery"] = $queryData_calificacion;

$tableEvents["calificacion"] = new eventsBase;
$tdatacalificacion[".hasEvents"] = false;

?>
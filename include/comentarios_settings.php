<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacomentarios = array();	
	$tdatacomentarios[".truncateText"] = true;
	$tdatacomentarios[".NumberOfChars"] = 80; 
	$tdatacomentarios[".ShortName"] = "comentarios";
	$tdatacomentarios[".OwnerID"] = "";
	$tdatacomentarios[".OriginalTable"] = "comentarios";

//	field labels
$fieldLabelscomentarios = array();
$fieldToolTipscomentarios = array();
$pageTitlescomentarios = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelscomentarios["Spanish"] = array();
	$fieldToolTipscomentarios["Spanish"] = array();
	$pageTitlescomentarios["Spanish"] = array();
	$fieldLabelscomentarios["Spanish"]["id"] = "Id";
	$fieldToolTipscomentarios["Spanish"]["id"] = "";
	$fieldLabelscomentarios["Spanish"]["descripcion"] = "Descripcion";
	$fieldToolTipscomentarios["Spanish"]["descripcion"] = "";
	$fieldLabelscomentarios["Spanish"]["Productos_id"] = "producto";
	$fieldToolTipscomentarios["Spanish"]["Productos_id"] = "";
	$fieldLabelscomentarios["Spanish"]["Usuario_id"] = "usuario";
	$fieldToolTipscomentarios["Spanish"]["Usuario_id"] = "";
	if (count($fieldToolTipscomentarios["Spanish"]))
		$tdatacomentarios[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscomentarios[""] = array();
	$fieldToolTipscomentarios[""] = array();
	$pageTitlescomentarios[""] = array();
	if (count($fieldToolTipscomentarios[""]))
		$tdatacomentarios[".isUseToolTips"] = true;
}
	
	
	$tdatacomentarios[".NCSearch"] = true;



$tdatacomentarios[".shortTableName"] = "comentarios";
$tdatacomentarios[".nSecOptions"] = 0;
$tdatacomentarios[".recsPerRowList"] = 1;
$tdatacomentarios[".mainTableOwnerID"] = "";
$tdatacomentarios[".moveNext"] = 1;
$tdatacomentarios[".nType"] = 0;

$tdatacomentarios[".strOriginalTableName"] = "comentarios";




$tdatacomentarios[".showAddInPopup"] = false;

$tdatacomentarios[".showEditInPopup"] = false;

$tdatacomentarios[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacomentarios[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacomentarios[".fieldsForRegister"] = array();

$tdatacomentarios[".listAjax"] = false;

	$tdatacomentarios[".audit"] = false;

	$tdatacomentarios[".locking"] = false;

$tdatacomentarios[".edit"] = true;

$tdatacomentarios[".list"] = true;

$tdatacomentarios[".inlineEdit"] = true;
$tdatacomentarios[".inlineAdd"] = true;
$tdatacomentarios[".view"] = true;

$tdatacomentarios[".import"] = true;

$tdatacomentarios[".exportTo"] = true;

$tdatacomentarios[".printFriendly"] = true;

$tdatacomentarios[".delete"] = true;

$tdatacomentarios[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacomentarios[".searchSaving"] = false;
//

$tdatacomentarios[".showSearchPanel"] = true;
		$tdatacomentarios[".flexibleSearch"] = true;		

if (isMobile())
	$tdatacomentarios[".isUseAjaxSuggest"] = false;
else 
	$tdatacomentarios[".isUseAjaxSuggest"] = true;

$tdatacomentarios[".rowHighlite"] = true;



$tdatacomentarios[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacomentarios[".isUseTimeForSearch"] = false;





$tdatacomentarios[".allSearchFields"] = array();
$tdatacomentarios[".filterFields"] = array();
$tdatacomentarios[".requiredSearchFields"] = array();

$tdatacomentarios[".allSearchFields"][] = "id";
	$tdatacomentarios[".allSearchFields"][] = "descripcion";
	$tdatacomentarios[".allSearchFields"][] = "Productos_id";
	$tdatacomentarios[".allSearchFields"][] = "Usuario_id";
	

$tdatacomentarios[".googleLikeFields"] = array();
$tdatacomentarios[".googleLikeFields"][] = "id";
$tdatacomentarios[".googleLikeFields"][] = "descripcion";
$tdatacomentarios[".googleLikeFields"][] = "Productos_id";
$tdatacomentarios[".googleLikeFields"][] = "Usuario_id";


$tdatacomentarios[".advSearchFields"] = array();
$tdatacomentarios[".advSearchFields"][] = "id";
$tdatacomentarios[".advSearchFields"][] = "descripcion";
$tdatacomentarios[".advSearchFields"][] = "Productos_id";
$tdatacomentarios[".advSearchFields"][] = "Usuario_id";

$tdatacomentarios[".tableType"] = "list";

$tdatacomentarios[".printerPageOrientation"] = 0;
$tdatacomentarios[".nPrinterPageScale"] = 100;

$tdatacomentarios[".nPrinterSplitRecords"] = 40;

$tdatacomentarios[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatacomentarios[".pageSize"] = 20;

$tdatacomentarios[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacomentarios[".strOrderBy"] = $tstrOrderBy;

$tdatacomentarios[".orderindexes"] = array();

$tdatacomentarios[".sqlHead"] = "SELECT id,   descripcion,   Productos_id,   Usuario_id";
$tdatacomentarios[".sqlFrom"] = "FROM comentarios";
$tdatacomentarios[".sqlWhereExpr"] = "";
$tdatacomentarios[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacomentarios[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacomentarios[".arrGroupsPerPage"] = $arrGPP;

$tdatacomentarios[".highlightSearchResults"] = true;

$tableKeyscomentarios = array();
$tableKeyscomentarios[] = "id";
$tdatacomentarios[".Keys"] = $tableKeyscomentarios;

$tdatacomentarios[".listFields"] = array();
$tdatacomentarios[".listFields"][] = "id";
$tdatacomentarios[".listFields"][] = "descripcion";
$tdatacomentarios[".listFields"][] = "Productos_id";
$tdatacomentarios[".listFields"][] = "Usuario_id";

$tdatacomentarios[".hideMobileList"] = array();


$tdatacomentarios[".viewFields"] = array();
$tdatacomentarios[".viewFields"][] = "id";
$tdatacomentarios[".viewFields"][] = "descripcion";
$tdatacomentarios[".viewFields"][] = "Productos_id";
$tdatacomentarios[".viewFields"][] = "Usuario_id";

$tdatacomentarios[".addFields"] = array();
$tdatacomentarios[".addFields"][] = "descripcion";
$tdatacomentarios[".addFields"][] = "Productos_id";
$tdatacomentarios[".addFields"][] = "Usuario_id";

$tdatacomentarios[".inlineAddFields"] = array();
$tdatacomentarios[".inlineAddFields"][] = "descripcion";
$tdatacomentarios[".inlineAddFields"][] = "Productos_id";
$tdatacomentarios[".inlineAddFields"][] = "Usuario_id";

$tdatacomentarios[".editFields"] = array();
$tdatacomentarios[".editFields"][] = "descripcion";
$tdatacomentarios[".editFields"][] = "Productos_id";
$tdatacomentarios[".editFields"][] = "Usuario_id";

$tdatacomentarios[".inlineEditFields"] = array();
$tdatacomentarios[".inlineEditFields"][] = "descripcion";
$tdatacomentarios[".inlineEditFields"][] = "Productos_id";
$tdatacomentarios[".inlineEditFields"][] = "Usuario_id";

$tdatacomentarios[".exportFields"] = array();
$tdatacomentarios[".exportFields"][] = "id";
$tdatacomentarios[".exportFields"][] = "descripcion";
$tdatacomentarios[".exportFields"][] = "Productos_id";
$tdatacomentarios[".exportFields"][] = "Usuario_id";

$tdatacomentarios[".importFields"] = array();
$tdatacomentarios[".importFields"][] = "id";
$tdatacomentarios[".importFields"][] = "descripcion";
$tdatacomentarios[".importFields"][] = "Productos_id";
$tdatacomentarios[".importFields"][] = "Usuario_id";

$tdatacomentarios[".printFields"] = array();
$tdatacomentarios[".printFields"][] = "id";
$tdatacomentarios[".printFields"][] = "descripcion";
$tdatacomentarios[".printFields"][] = "Productos_id";
$tdatacomentarios[".printFields"][] = "Usuario_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "comentarios";
	$fdata["Label"] = GetFieldLabel("comentarios","id"); 
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

	

	
	$tdatacomentarios["id"] = $fdata;
//	descripcion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "descripcion";
	$fdata["GoodName"] = "descripcion";
	$fdata["ownerTable"] = "comentarios";
	$fdata["Label"] = GetFieldLabel("comentarios","descripcion"); 
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
	
		$fdata["strField"] = "descripcion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "descripcion";
	
		
		
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
			$edata["EditParams"].= " maxlength=600";
	
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

	

	
	$tdatacomentarios["descripcion"] = $fdata;
//	Productos_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Productos_id";
	$fdata["GoodName"] = "Productos_id";
	$fdata["ownerTable"] = "comentarios";
	$fdata["Label"] = GetFieldLabel("comentarios","Productos_id"); 
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
	
		$fdata["strField"] = "Productos_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Productos_id";
	
		
		
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

	

	
	$tdatacomentarios["Productos_id"] = $fdata;
//	Usuario_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Usuario_id";
	$fdata["GoodName"] = "Usuario_id";
	$fdata["ownerTable"] = "comentarios";
	$fdata["Label"] = GetFieldLabel("comentarios","Usuario_id"); 
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

	

	
	$tdatacomentarios["Usuario_id"] = $fdata;

	
$tables_data["comentarios"]=&$tdatacomentarios;
$field_labels["comentarios"] = &$fieldLabelscomentarios;
$fieldToolTips["comentarios"] = &$fieldToolTipscomentarios;
$page_titles["comentarios"] = &$pageTitlescomentarios;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["comentarios"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["comentarios"] = array();


	
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
					$masterTablesData["comentarios"][0] = $masterParams;	
				$masterTablesData["comentarios"][0]["masterKeys"] = array();
	$masterTablesData["comentarios"][0]["masterKeys"][]="id";
				$masterTablesData["comentarios"][0]["detailKeys"] = array();
	$masterTablesData["comentarios"][0]["detailKeys"][]="Productos_id";
		
	
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
					$masterTablesData["comentarios"][1] = $masterParams;	
				$masterTablesData["comentarios"][1]["masterKeys"] = array();
	$masterTablesData["comentarios"][1]["masterKeys"][]="id";
				$masterTablesData["comentarios"][1]["detailKeys"] = array();
	$masterTablesData["comentarios"][1]["detailKeys"][]="Usuario_id";
		
	
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
					$masterTablesData["comentarios"][2] = $masterParams;	
				$masterTablesData["comentarios"][2]["masterKeys"] = array();
	$masterTablesData["comentarios"][2]["masterKeys"][]="id";
				$masterTablesData["comentarios"][2]["detailKeys"] = array();
	$masterTablesData["comentarios"][2]["detailKeys"][]="Productos_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_comentarios()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   descripcion,   Productos_id,   Usuario_id";
$proto0["m_strFrom"] = "FROM comentarios";
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
	"m_strTable" => "comentarios",
	"m_srcTableName" => "comentarios"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "comentarios";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "descripcion",
	"m_strTable" => "comentarios",
	"m_srcTableName" => "comentarios"
));

$proto7["m_sql"] = "descripcion";
$proto7["m_srcTableName"] = "comentarios";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Productos_id",
	"m_strTable" => "comentarios",
	"m_srcTableName" => "comentarios"
));

$proto9["m_sql"] = "Productos_id";
$proto9["m_srcTableName"] = "comentarios";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario_id",
	"m_strTable" => "comentarios",
	"m_srcTableName" => "comentarios"
));

$proto11["m_sql"] = "Usuario_id";
$proto11["m_srcTableName"] = "comentarios";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto13=array();
$proto13["m_link"] = "SQLL_MAIN";
			$proto14=array();
$proto14["m_strName"] = "comentarios";
$proto14["m_srcTableName"] = "comentarios";
$proto14["m_columns"] = array();
$proto14["m_columns"][] = "id";
$proto14["m_columns"][] = "descripcion";
$proto14["m_columns"][] = "Productos_id";
$proto14["m_columns"][] = "Usuario_id";
$obj = new SQLTable($proto14);

$proto13["m_table"] = $obj;
$proto13["m_sql"] = "comentarios";
$proto13["m_alias"] = "";
$proto13["m_srcTableName"] = "comentarios";
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
$proto0["m_srcTableName"]="comentarios";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_comentarios = createSqlQuery_comentarios();


	
				
	
$tdatacomentarios[".sqlquery"] = $queryData_comentarios;

$tableEvents["comentarios"] = new eventsBase;
$tdatacomentarios[".hasEvents"] = false;

?>
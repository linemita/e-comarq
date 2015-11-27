<?php
require_once(getabspath("classes/cipherer.php"));




$tdatausuario = array();	
	$tdatausuario[".truncateText"] = true;
	$tdatausuario[".NumberOfChars"] = 80; 
	$tdatausuario[".ShortName"] = "usuario";
	$tdatausuario[".OwnerID"] = "";
	$tdatausuario[".OriginalTable"] = "usuario";

//	field labels
$fieldLabelsusuario = array();
$fieldToolTipsusuario = array();
$pageTitlesusuario = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsusuario["Spanish"] = array();
	$fieldToolTipsusuario["Spanish"] = array();
	$pageTitlesusuario["Spanish"] = array();
	$fieldLabelsusuario["Spanish"]["id"] = "Id";
	$fieldToolTipsusuario["Spanish"]["id"] = "";
	$fieldLabelsusuario["Spanish"]["Nombres"] = "Nombres";
	$fieldToolTipsusuario["Spanish"]["Nombres"] = "";
	$fieldLabelsusuario["Spanish"]["Apellidos"] = "Apellidos";
	$fieldToolTipsusuario["Spanish"]["Apellidos"] = "";
	$fieldLabelsusuario["Spanish"]["Telefono"] = "Telefono";
	$fieldToolTipsusuario["Spanish"]["Telefono"] = "";
	$fieldLabelsusuario["Spanish"]["Usuario"] = "Usuario";
	$fieldToolTipsusuario["Spanish"]["Usuario"] = "";
	$fieldLabelsusuario["Spanish"]["Password"] = "Password";
	$fieldToolTipsusuario["Spanish"]["Password"] = "";
	$fieldLabelsusuario["Spanish"]["Email"] = "Email";
	$fieldToolTipsusuario["Spanish"]["Email"] = "";
	$fieldLabelsusuario["Spanish"]["Rol"] = "Rol";
	$fieldToolTipsusuario["Spanish"]["Rol"] = "";
	$fieldLabelsusuario["Spanish"]["Municipio_id"] = "Municipio";
	$fieldToolTipsusuario["Spanish"]["Municipio_id"] = "";
	if (count($fieldToolTipsusuario["Spanish"]))
		$tdatausuario[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsusuario[""] = array();
	$fieldToolTipsusuario[""] = array();
	$pageTitlesusuario[""] = array();
	$fieldLabelsusuario[""]["id"] = "Id";
	$fieldToolTipsusuario[""]["id"] = "";
	if (count($fieldToolTipsusuario[""]))
		$tdatausuario[".isUseToolTips"] = true;
}
	
	
	$tdatausuario[".NCSearch"] = true;



$tdatausuario[".shortTableName"] = "usuario";
$tdatausuario[".nSecOptions"] = 0;
$tdatausuario[".recsPerRowList"] = 1;
$tdatausuario[".mainTableOwnerID"] = "";
$tdatausuario[".moveNext"] = 1;
$tdatausuario[".nType"] = 0;

$tdatausuario[".strOriginalTableName"] = "usuario";




$tdatausuario[".showAddInPopup"] = false;

$tdatausuario[".showEditInPopup"] = false;

$tdatausuario[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatausuario[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatausuario[".fieldsForRegister"] = array();

$tdatausuario[".listAjax"] = false;

	$tdatausuario[".audit"] = false;

	$tdatausuario[".locking"] = false;

$tdatausuario[".edit"] = true;

$tdatausuario[".list"] = true;

$tdatausuario[".inlineEdit"] = true;
$tdatausuario[".inlineAdd"] = true;
$tdatausuario[".view"] = true;

$tdatausuario[".import"] = true;

$tdatausuario[".exportTo"] = true;

$tdatausuario[".printFriendly"] = true;

$tdatausuario[".delete"] = true;

$tdatausuario[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatausuario[".searchSaving"] = false;
//

$tdatausuario[".showSearchPanel"] = true;
		$tdatausuario[".flexibleSearch"] = true;		

if (isMobile())
	$tdatausuario[".isUseAjaxSuggest"] = false;
else 
	$tdatausuario[".isUseAjaxSuggest"] = true;

$tdatausuario[".rowHighlite"] = true;



$tdatausuario[".addPageEvents"] = false;

// use timepicker for search panel
$tdatausuario[".isUseTimeForSearch"] = false;



$tdatausuario[".useDetailsPreview"] = true;


$tdatausuario[".allSearchFields"] = array();
$tdatausuario[".filterFields"] = array();
$tdatausuario[".requiredSearchFields"] = array();

$tdatausuario[".allSearchFields"][] = "id";
	$tdatausuario[".allSearchFields"][] = "Nombres";
	$tdatausuario[".allSearchFields"][] = "Apellidos";
	$tdatausuario[".allSearchFields"][] = "Telefono";
	$tdatausuario[".allSearchFields"][] = "Usuario";
	$tdatausuario[".allSearchFields"][] = "Password";
	$tdatausuario[".allSearchFields"][] = "Email";
	$tdatausuario[".allSearchFields"][] = "Rol";
	$tdatausuario[".allSearchFields"][] = "Municipio_id";
	

$tdatausuario[".googleLikeFields"] = array();
$tdatausuario[".googleLikeFields"][] = "id";
$tdatausuario[".googleLikeFields"][] = "Nombres";
$tdatausuario[".googleLikeFields"][] = "Apellidos";
$tdatausuario[".googleLikeFields"][] = "Telefono";
$tdatausuario[".googleLikeFields"][] = "Usuario";
$tdatausuario[".googleLikeFields"][] = "Password";
$tdatausuario[".googleLikeFields"][] = "Email";
$tdatausuario[".googleLikeFields"][] = "Rol";
$tdatausuario[".googleLikeFields"][] = "Municipio_id";


$tdatausuario[".advSearchFields"] = array();
$tdatausuario[".advSearchFields"][] = "id";
$tdatausuario[".advSearchFields"][] = "Nombres";
$tdatausuario[".advSearchFields"][] = "Apellidos";
$tdatausuario[".advSearchFields"][] = "Telefono";
$tdatausuario[".advSearchFields"][] = "Usuario";
$tdatausuario[".advSearchFields"][] = "Password";
$tdatausuario[".advSearchFields"][] = "Email";
$tdatausuario[".advSearchFields"][] = "Rol";
$tdatausuario[".advSearchFields"][] = "Municipio_id";

$tdatausuario[".tableType"] = "list";

$tdatausuario[".printerPageOrientation"] = 0;
$tdatausuario[".nPrinterPageScale"] = 100;

$tdatausuario[".nPrinterSplitRecords"] = 40;

$tdatausuario[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatausuario[".pageSize"] = 20;

$tdatausuario[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatausuario[".strOrderBy"] = $tstrOrderBy;

$tdatausuario[".orderindexes"] = array();

$tdatausuario[".sqlHead"] = "SELECT id,   Nombres,   Apellidos,   Telefono,   Usuario,   Password,   Email,   Rol,   Municipio_id";
$tdatausuario[".sqlFrom"] = "FROM usuario";
$tdatausuario[".sqlWhereExpr"] = "";
$tdatausuario[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatausuario[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatausuario[".arrGroupsPerPage"] = $arrGPP;

$tdatausuario[".highlightSearchResults"] = true;

$tableKeysusuario = array();
$tableKeysusuario[] = "id";
$tdatausuario[".Keys"] = $tableKeysusuario;

$tdatausuario[".listFields"] = array();
$tdatausuario[".listFields"][] = "id";
$tdatausuario[".listFields"][] = "Nombres";
$tdatausuario[".listFields"][] = "Apellidos";
$tdatausuario[".listFields"][] = "Telefono";
$tdatausuario[".listFields"][] = "Usuario";
$tdatausuario[".listFields"][] = "Password";
$tdatausuario[".listFields"][] = "Email";
$tdatausuario[".listFields"][] = "Rol";
$tdatausuario[".listFields"][] = "Municipio_id";

$tdatausuario[".hideMobileList"] = array();


$tdatausuario[".viewFields"] = array();
$tdatausuario[".viewFields"][] = "id";
$tdatausuario[".viewFields"][] = "Nombres";
$tdatausuario[".viewFields"][] = "Apellidos";
$tdatausuario[".viewFields"][] = "Telefono";
$tdatausuario[".viewFields"][] = "Usuario";
$tdatausuario[".viewFields"][] = "Password";
$tdatausuario[".viewFields"][] = "Email";
$tdatausuario[".viewFields"][] = "Rol";
$tdatausuario[".viewFields"][] = "Municipio_id";

$tdatausuario[".addFields"] = array();
$tdatausuario[".addFields"][] = "Nombres";
$tdatausuario[".addFields"][] = "Apellidos";
$tdatausuario[".addFields"][] = "Telefono";
$tdatausuario[".addFields"][] = "Usuario";
$tdatausuario[".addFields"][] = "Password";
$tdatausuario[".addFields"][] = "Email";
$tdatausuario[".addFields"][] = "Rol";
$tdatausuario[".addFields"][] = "Municipio_id";

$tdatausuario[".inlineAddFields"] = array();
$tdatausuario[".inlineAddFields"][] = "Nombres";
$tdatausuario[".inlineAddFields"][] = "Apellidos";
$tdatausuario[".inlineAddFields"][] = "Telefono";
$tdatausuario[".inlineAddFields"][] = "Usuario";
$tdatausuario[".inlineAddFields"][] = "Password";
$tdatausuario[".inlineAddFields"][] = "Email";
$tdatausuario[".inlineAddFields"][] = "Rol";
$tdatausuario[".inlineAddFields"][] = "Municipio_id";

$tdatausuario[".editFields"] = array();
$tdatausuario[".editFields"][] = "Nombres";
$tdatausuario[".editFields"][] = "Apellidos";
$tdatausuario[".editFields"][] = "Telefono";
$tdatausuario[".editFields"][] = "Usuario";
$tdatausuario[".editFields"][] = "Password";
$tdatausuario[".editFields"][] = "Email";
$tdatausuario[".editFields"][] = "Rol";
$tdatausuario[".editFields"][] = "Municipio_id";

$tdatausuario[".inlineEditFields"] = array();
$tdatausuario[".inlineEditFields"][] = "Nombres";
$tdatausuario[".inlineEditFields"][] = "Apellidos";
$tdatausuario[".inlineEditFields"][] = "Telefono";
$tdatausuario[".inlineEditFields"][] = "Usuario";
$tdatausuario[".inlineEditFields"][] = "Password";
$tdatausuario[".inlineEditFields"][] = "Email";
$tdatausuario[".inlineEditFields"][] = "Rol";
$tdatausuario[".inlineEditFields"][] = "Municipio_id";

$tdatausuario[".exportFields"] = array();
$tdatausuario[".exportFields"][] = "id";
$tdatausuario[".exportFields"][] = "Nombres";
$tdatausuario[".exportFields"][] = "Apellidos";
$tdatausuario[".exportFields"][] = "Telefono";
$tdatausuario[".exportFields"][] = "Usuario";
$tdatausuario[".exportFields"][] = "Password";
$tdatausuario[".exportFields"][] = "Email";
$tdatausuario[".exportFields"][] = "Rol";
$tdatausuario[".exportFields"][] = "Municipio_id";

$tdatausuario[".importFields"] = array();
$tdatausuario[".importFields"][] = "id";
$tdatausuario[".importFields"][] = "Nombres";
$tdatausuario[".importFields"][] = "Apellidos";
$tdatausuario[".importFields"][] = "Telefono";
$tdatausuario[".importFields"][] = "Usuario";
$tdatausuario[".importFields"][] = "Password";
$tdatausuario[".importFields"][] = "Email";
$tdatausuario[".importFields"][] = "Rol";
$tdatausuario[".importFields"][] = "Municipio_id";

$tdatausuario[".printFields"] = array();
$tdatausuario[".printFields"][] = "id";
$tdatausuario[".printFields"][] = "Nombres";
$tdatausuario[".printFields"][] = "Apellidos";
$tdatausuario[".printFields"][] = "Telefono";
$tdatausuario[".printFields"][] = "Usuario";
$tdatausuario[".printFields"][] = "Password";
$tdatausuario[".printFields"][] = "Email";
$tdatausuario[".printFields"][] = "Rol";
$tdatausuario[".printFields"][] = "Municipio_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","id"); 
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

	

	
	$tdatausuario["id"] = $fdata;
//	Nombres
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nombres";
	$fdata["GoodName"] = "Nombres";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","Nombres"); 
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
	
		$fdata["strField"] = "Nombres"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Nombres";
	
		
		
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
			$edata["EditParams"].= " maxlength=115";
	
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

	

	
	$tdatausuario["Nombres"] = $fdata;
//	Apellidos
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Apellidos";
	$fdata["GoodName"] = "Apellidos";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","Apellidos"); 
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
	
		$fdata["strField"] = "Apellidos"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Apellidos";
	
		
		
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
			$edata["EditParams"].= " maxlength=115";
	
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

	

	
	$tdatausuario["Apellidos"] = $fdata;
//	Telefono
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Telefono";
	$fdata["GoodName"] = "Telefono";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","Telefono"); 
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
	
		$fdata["strField"] = "Telefono"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Telefono";
	
		
		
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
			$edata["EditParams"].= " maxlength=25";
	
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

	

	
	$tdatausuario["Telefono"] = $fdata;
//	Usuario
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Usuario";
	$fdata["GoodName"] = "Usuario";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","Usuario"); 
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
	
		$fdata["strField"] = "Usuario"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Usuario";
	
		
		
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
			$edata["EditParams"].= " maxlength=100";
	
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

	

	
	$tdatausuario["Usuario"] = $fdata;
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","Password"); 
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
	
		$fdata["strField"] = "Password"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Password";
	
		
		
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
			$edata["EditParams"].= " maxlength=100";
	
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

	

	
	$tdatausuario["Password"] = $fdata;
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","Email"); 
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
	
		$fdata["strField"] = "Email"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";
	
		
		
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
	
		
		
		
		
			$edata["HTML5InuptType"] = "email";
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=300";
	
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

	

	
	$tdatausuario["Email"] = $fdata;
//	Rol
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Rol";
	$fdata["GoodName"] = "Rol";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","Rol"); 
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
	
		$fdata["strField"] = "Rol"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rol";
	
		
		
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
	
	$edata = array("EditFormat" => "Readonly");
	
			
	
	


		
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatausuario["Rol"] = $fdata;
//	Municipio_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Municipio_id";
	$fdata["GoodName"] = "Municipio_id";
	$fdata["ownerTable"] = "usuario";
	$fdata["Label"] = GetFieldLabel("usuario","Municipio_id"); 
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
	
		$fdata["strField"] = "Municipio_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Municipio_id";
	
		
		
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
	$edata["LookupTable"] = "municipio";
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

	

	
	$tdatausuario["Municipio_id"] = $fdata;

	
$tables_data["usuario"]=&$tdatausuario;
$field_labels["usuario"] = &$fieldLabelsusuario;
$fieldToolTips["usuario"] = &$fieldToolTipsusuario;
$page_titles["usuario"] = &$pageTitlesusuario;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["usuario"] = array();
//	calificacion
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="calificacion";
		$detailsParam["dOriginalTable"] = "calificacion";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "calificacion";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["usuario"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["usuario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["usuario"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["usuario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["usuario"][$dIndex]["detailKeys"][]="Usuario_id";
//	comentarios
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="comentarios";
		$detailsParam["dOriginalTable"] = "comentarios";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "comentarios";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["usuario"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["usuario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["usuario"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["usuario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["usuario"][$dIndex]["detailKeys"][]="Usuario_id";
//	productos
	
	

		$dIndex = 2;
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
			
	$detailsTablesData["usuario"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["usuario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["usuario"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["usuario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["usuario"][$dIndex]["detailKeys"][]="Usuario_id";
//	tipopago
	
	

		$dIndex = 3;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tipopago";
		$detailsParam["dOriginalTable"] = "tipopago";
				$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tipopago";
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();
	$detailsParam["dispChildCount"] = "1";
		$detailsParam["hideChild"] = false;
	$detailsParam["previewOnList"] = 1;
	$detailsParam["previewOnAdd"] = 0;
	$detailsParam["previewOnEdit"] = 0;
	$detailsParam["previewOnView"] = 0;
			
	$detailsTablesData["usuario"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["usuario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["usuario"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["usuario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["usuario"][$dIndex]["detailKeys"][]="Usuario_id";
//	Principal
	
	

		$dIndex = 4;
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
			
	$detailsTablesData["usuario"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["usuario"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["usuario"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["usuario"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["usuario"][$dIndex]["detailKeys"][]="Usuario_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["usuario"] = array();


	
				$strOriginalDetailsTable="municipio";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="municipio";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "municipio";
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
					$masterTablesData["usuario"][0] = $masterParams;	
				$masterTablesData["usuario"][0]["masterKeys"] = array();
	$masterTablesData["usuario"][0]["masterKeys"][]="id";
				$masterTablesData["usuario"][0]["detailKeys"] = array();
	$masterTablesData["usuario"][0]["detailKeys"][]="Municipio_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_usuario()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   Nombres,   Apellidos,   Telefono,   Usuario,   Password,   Email,   Rol,   Municipio_id";
$proto0["m_strFrom"] = "FROM usuario";
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
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "usuario";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "Nombres",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto7["m_sql"] = "Nombres";
$proto7["m_srcTableName"] = "usuario";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Apellidos",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto9["m_sql"] = "Apellidos";
$proto9["m_srcTableName"] = "usuario";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Telefono",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto11["m_sql"] = "Telefono";
$proto11["m_srcTableName"] = "usuario";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto13["m_sql"] = "Usuario";
$proto13["m_srcTableName"] = "usuario";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto15["m_sql"] = "Password";
$proto15["m_srcTableName"] = "usuario";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto17["m_sql"] = "Email";
$proto17["m_srcTableName"] = "usuario";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Rol",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto19["m_sql"] = "Rol";
$proto19["m_srcTableName"] = "usuario";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "Municipio_id",
	"m_strTable" => "usuario",
	"m_srcTableName" => "usuario"
));

$proto21["m_sql"] = "Municipio_id";
$proto21["m_srcTableName"] = "usuario";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strName"] = "usuario";
$proto24["m_srcTableName"] = "usuario";
$proto24["m_columns"] = array();
$proto24["m_columns"][] = "id";
$proto24["m_columns"][] = "Nombres";
$proto24["m_columns"][] = "Apellidos";
$proto24["m_columns"][] = "Telefono";
$proto24["m_columns"][] = "Usuario";
$proto24["m_columns"][] = "Password";
$proto24["m_columns"][] = "Email";
$proto24["m_columns"][] = "Rol";
$proto24["m_columns"][] = "Municipio_id";
$obj = new SQLTable($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "usuario";
$proto23["m_alias"] = "";
$proto23["m_srcTableName"] = "usuario";
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="usuario";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_usuario = createSqlQuery_usuario();


	
									
	
$tdatausuario[".sqlquery"] = $queryData_usuario;

$tableEvents["usuario"] = new eventsBase;
$tdatausuario[".hasEvents"] = false;

?>
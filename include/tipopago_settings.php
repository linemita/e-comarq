<?php
require_once(getabspath("classes/cipherer.php"));




$tdatatipopago = array();	
	$tdatatipopago[".truncateText"] = true;
	$tdatatipopago[".NumberOfChars"] = 80; 
	$tdatatipopago[".ShortName"] = "tipopago";
	$tdatatipopago[".OwnerID"] = "";
	$tdatatipopago[".OriginalTable"] = "tipopago";

//	field labels
$fieldLabelstipopago = array();
$fieldToolTipstipopago = array();
$pageTitlestipopago = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelstipopago["Spanish"] = array();
	$fieldToolTipstipopago["Spanish"] = array();
	$pageTitlestipopago["Spanish"] = array();
	$fieldLabelstipopago["Spanish"]["id"] = "Id";
	$fieldToolTipstipopago["Spanish"]["id"] = "";
	$fieldLabelstipopago["Spanish"]["no_tarjeta"] = "No Tarjeta";
	$fieldToolTipstipopago["Spanish"]["no_tarjeta"] = "";
	$fieldLabelstipopago["Spanish"]["TipoPago"] = "Tipo Pago";
	$fieldToolTipstipopago["Spanish"]["TipoPago"] = "";
	$fieldLabelstipopago["Spanish"]["fechadevencimiento"] = "Fechadevencimiento";
	$fieldToolTipstipopago["Spanish"]["fechadevencimiento"] = "";
	$fieldLabelstipopago["Spanish"]["codverificacion"] = "Codverificacion";
	$fieldToolTipstipopago["Spanish"]["codverificacion"] = "";
	$fieldLabelstipopago["Spanish"]["fechanacimiento"] = "Fechanacimiento";
	$fieldToolTipstipopago["Spanish"]["fechanacimiento"] = "";
	$fieldLabelstipopago["Spanish"]["Usuario_id"] = "Usuario";
	$fieldToolTipstipopago["Spanish"]["Usuario_id"] = "";
	if (count($fieldToolTipstipopago["Spanish"]))
		$tdatatipopago[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelstipopago[""] = array();
	$fieldToolTipstipopago[""] = array();
	$pageTitlestipopago[""] = array();
	if (count($fieldToolTipstipopago[""]))
		$tdatatipopago[".isUseToolTips"] = true;
}
	
	
	$tdatatipopago[".NCSearch"] = true;



$tdatatipopago[".shortTableName"] = "tipopago";
$tdatatipopago[".nSecOptions"] = 0;
$tdatatipopago[".recsPerRowList"] = 1;
$tdatatipopago[".mainTableOwnerID"] = "";
$tdatatipopago[".moveNext"] = 1;
$tdatatipopago[".nType"] = 0;

$tdatatipopago[".strOriginalTableName"] = "tipopago";




$tdatatipopago[".showAddInPopup"] = false;

$tdatatipopago[".showEditInPopup"] = false;

$tdatatipopago[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatipopago[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatipopago[".fieldsForRegister"] = array();

$tdatatipopago[".listAjax"] = false;

	$tdatatipopago[".audit"] = false;

	$tdatatipopago[".locking"] = false;

$tdatatipopago[".edit"] = true;

$tdatatipopago[".list"] = true;

$tdatatipopago[".inlineEdit"] = true;
$tdatatipopago[".inlineAdd"] = true;
$tdatatipopago[".view"] = true;

$tdatatipopago[".import"] = true;

$tdatatipopago[".exportTo"] = true;

$tdatatipopago[".printFriendly"] = true;

$tdatatipopago[".delete"] = true;

$tdatatipopago[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatatipopago[".searchSaving"] = false;
//

$tdatatipopago[".showSearchPanel"] = true;
		$tdatatipopago[".flexibleSearch"] = true;		

if (isMobile())
	$tdatatipopago[".isUseAjaxSuggest"] = false;
else 
	$tdatatipopago[".isUseAjaxSuggest"] = true;

$tdatatipopago[".rowHighlite"] = true;



$tdatatipopago[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatipopago[".isUseTimeForSearch"] = false;





$tdatatipopago[".allSearchFields"] = array();
$tdatatipopago[".filterFields"] = array();
$tdatatipopago[".requiredSearchFields"] = array();

$tdatatipopago[".allSearchFields"][] = "id";
	$tdatatipopago[".allSearchFields"][] = "no_tarjeta";
	$tdatatipopago[".allSearchFields"][] = "TipoPago";
	$tdatatipopago[".allSearchFields"][] = "fechadevencimiento";
	$tdatatipopago[".allSearchFields"][] = "codverificacion";
	$tdatatipopago[".allSearchFields"][] = "fechanacimiento";
	$tdatatipopago[".allSearchFields"][] = "Usuario_id";
	

$tdatatipopago[".googleLikeFields"] = array();
$tdatatipopago[".googleLikeFields"][] = "id";
$tdatatipopago[".googleLikeFields"][] = "no_tarjeta";
$tdatatipopago[".googleLikeFields"][] = "TipoPago";
$tdatatipopago[".googleLikeFields"][] = "fechadevencimiento";
$tdatatipopago[".googleLikeFields"][] = "codverificacion";
$tdatatipopago[".googleLikeFields"][] = "fechanacimiento";
$tdatatipopago[".googleLikeFields"][] = "Usuario_id";


$tdatatipopago[".advSearchFields"] = array();
$tdatatipopago[".advSearchFields"][] = "id";
$tdatatipopago[".advSearchFields"][] = "no_tarjeta";
$tdatatipopago[".advSearchFields"][] = "TipoPago";
$tdatatipopago[".advSearchFields"][] = "fechadevencimiento";
$tdatatipopago[".advSearchFields"][] = "codverificacion";
$tdatatipopago[".advSearchFields"][] = "fechanacimiento";
$tdatatipopago[".advSearchFields"][] = "Usuario_id";

$tdatatipopago[".tableType"] = "list";

$tdatatipopago[".printerPageOrientation"] = 0;
$tdatatipopago[".nPrinterPageScale"] = 100;

$tdatatipopago[".nPrinterSplitRecords"] = 40;

$tdatatipopago[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdatatipopago[".pageSize"] = 20;

$tdatatipopago[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatipopago[".strOrderBy"] = $tstrOrderBy;

$tdatatipopago[".orderindexes"] = array();

$tdatatipopago[".sqlHead"] = "SELECT id,   no_tarjeta,   TipoPago,   fechadevencimiento,   codverificacion,   fechanacimiento,   Usuario_id";
$tdatatipopago[".sqlFrom"] = "FROM tipopago";
$tdatatipopago[".sqlWhereExpr"] = "";
$tdatatipopago[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatipopago[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatipopago[".arrGroupsPerPage"] = $arrGPP;

$tdatatipopago[".highlightSearchResults"] = true;

$tableKeystipopago = array();
$tableKeystipopago[] = "id";
$tdatatipopago[".Keys"] = $tableKeystipopago;

$tdatatipopago[".listFields"] = array();
$tdatatipopago[".listFields"][] = "id";
$tdatatipopago[".listFields"][] = "no_tarjeta";
$tdatatipopago[".listFields"][] = "TipoPago";
$tdatatipopago[".listFields"][] = "fechadevencimiento";
$tdatatipopago[".listFields"][] = "codverificacion";
$tdatatipopago[".listFields"][] = "fechanacimiento";
$tdatatipopago[".listFields"][] = "Usuario_id";

$tdatatipopago[".hideMobileList"] = array();


$tdatatipopago[".viewFields"] = array();
$tdatatipopago[".viewFields"][] = "id";
$tdatatipopago[".viewFields"][] = "no_tarjeta";
$tdatatipopago[".viewFields"][] = "TipoPago";
$tdatatipopago[".viewFields"][] = "fechadevencimiento";
$tdatatipopago[".viewFields"][] = "codverificacion";
$tdatatipopago[".viewFields"][] = "fechanacimiento";
$tdatatipopago[".viewFields"][] = "Usuario_id";

$tdatatipopago[".addFields"] = array();
$tdatatipopago[".addFields"][] = "no_tarjeta";
$tdatatipopago[".addFields"][] = "TipoPago";
$tdatatipopago[".addFields"][] = "fechadevencimiento";
$tdatatipopago[".addFields"][] = "codverificacion";
$tdatatipopago[".addFields"][] = "fechanacimiento";
$tdatatipopago[".addFields"][] = "Usuario_id";

$tdatatipopago[".inlineAddFields"] = array();
$tdatatipopago[".inlineAddFields"][] = "no_tarjeta";
$tdatatipopago[".inlineAddFields"][] = "TipoPago";
$tdatatipopago[".inlineAddFields"][] = "fechadevencimiento";
$tdatatipopago[".inlineAddFields"][] = "codverificacion";
$tdatatipopago[".inlineAddFields"][] = "fechanacimiento";
$tdatatipopago[".inlineAddFields"][] = "Usuario_id";

$tdatatipopago[".editFields"] = array();
$tdatatipopago[".editFields"][] = "no_tarjeta";
$tdatatipopago[".editFields"][] = "TipoPago";
$tdatatipopago[".editFields"][] = "fechadevencimiento";
$tdatatipopago[".editFields"][] = "codverificacion";
$tdatatipopago[".editFields"][] = "fechanacimiento";
$tdatatipopago[".editFields"][] = "Usuario_id";

$tdatatipopago[".inlineEditFields"] = array();
$tdatatipopago[".inlineEditFields"][] = "no_tarjeta";
$tdatatipopago[".inlineEditFields"][] = "TipoPago";
$tdatatipopago[".inlineEditFields"][] = "fechadevencimiento";
$tdatatipopago[".inlineEditFields"][] = "codverificacion";
$tdatatipopago[".inlineEditFields"][] = "fechanacimiento";
$tdatatipopago[".inlineEditFields"][] = "Usuario_id";

$tdatatipopago[".exportFields"] = array();
$tdatatipopago[".exportFields"][] = "id";
$tdatatipopago[".exportFields"][] = "no_tarjeta";
$tdatatipopago[".exportFields"][] = "TipoPago";
$tdatatipopago[".exportFields"][] = "fechadevencimiento";
$tdatatipopago[".exportFields"][] = "codverificacion";
$tdatatipopago[".exportFields"][] = "fechanacimiento";
$tdatatipopago[".exportFields"][] = "Usuario_id";

$tdatatipopago[".importFields"] = array();
$tdatatipopago[".importFields"][] = "id";
$tdatatipopago[".importFields"][] = "no_tarjeta";
$tdatatipopago[".importFields"][] = "TipoPago";
$tdatatipopago[".importFields"][] = "fechadevencimiento";
$tdatatipopago[".importFields"][] = "codverificacion";
$tdatatipopago[".importFields"][] = "fechanacimiento";
$tdatatipopago[".importFields"][] = "Usuario_id";

$tdatatipopago[".printFields"] = array();
$tdatatipopago[".printFields"][] = "id";
$tdatatipopago[".printFields"][] = "no_tarjeta";
$tdatatipopago[".printFields"][] = "TipoPago";
$tdatatipopago[".printFields"][] = "fechadevencimiento";
$tdatatipopago[".printFields"][] = "codverificacion";
$tdatatipopago[".printFields"][] = "fechanacimiento";
$tdatatipopago[".printFields"][] = "Usuario_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "tipopago";
	$fdata["Label"] = GetFieldLabel("tipopago","id"); 
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

	

	
	$tdatatipopago["id"] = $fdata;
//	no_tarjeta
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "no_tarjeta";
	$fdata["GoodName"] = "no_tarjeta";
	$fdata["ownerTable"] = "tipopago";
	$fdata["Label"] = GetFieldLabel("tipopago","no_tarjeta"); 
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
	
		$fdata["strField"] = "no_tarjeta"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "no_tarjeta";
	
		
		
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

	

	
	$tdatatipopago["no_tarjeta"] = $fdata;
//	TipoPago
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TipoPago";
	$fdata["GoodName"] = "TipoPago";
	$fdata["ownerTable"] = "tipopago";
	$fdata["Label"] = GetFieldLabel("tipopago","TipoPago"); 
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
	
		$fdata["strField"] = "TipoPago"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TipoPago";
	
		
		
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

	

	
	$tdatatipopago["TipoPago"] = $fdata;
//	fechadevencimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "fechadevencimiento";
	$fdata["GoodName"] = "fechadevencimiento";
	$fdata["ownerTable"] = "tipopago";
	$fdata["Label"] = GetFieldLabel("tipopago","fechadevencimiento"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
		$fdata["strField"] = "fechadevencimiento"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fechadevencimiento";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Short Date");
	
		
		
		
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Date");
	
			
	
	


		$edata["IsRequired"] = true; 
	
		
		
		
			$edata["acceptFileTypes"] = ".+$";
	
		$edata["maxNumberOfFiles"] = 1;
	
		
		
		$edata["DateEditType"] = 13; 
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
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatatipopago["fechadevencimiento"] = $fdata;
//	codverificacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "codverificacion";
	$fdata["GoodName"] = "codverificacion";
	$fdata["ownerTable"] = "tipopago";
	$fdata["Label"] = GetFieldLabel("tipopago","codverificacion"); 
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
	
		$fdata["strField"] = "codverificacion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "codverificacion";
	
		
		
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

	

	
	$tdatatipopago["codverificacion"] = $fdata;
//	fechanacimiento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "fechanacimiento";
	$fdata["GoodName"] = "fechanacimiento";
	$fdata["ownerTable"] = "tipopago";
	$fdata["Label"] = GetFieldLabel("tipopago","fechanacimiento"); 
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
	
		$fdata["strField"] = "fechanacimiento"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fechanacimiento";
	
		
		
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

	

	
	$tdatatipopago["fechanacimiento"] = $fdata;
//	Usuario_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Usuario_id";
	$fdata["GoodName"] = "Usuario_id";
	$fdata["ownerTable"] = "tipopago";
	$fdata["Label"] = GetFieldLabel("tipopago","Usuario_id"); 
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

	

	
	$tdatatipopago["Usuario_id"] = $fdata;

	
$tables_data["tipopago"]=&$tdatatipopago;
$field_labels["tipopago"] = &$fieldLabelstipopago;
$fieldToolTips["tipopago"] = &$fieldToolTipstipopago;
$page_titles["tipopago"] = &$pageTitlestipopago;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tipopago"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["tipopago"] = array();


	
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
					$masterTablesData["tipopago"][0] = $masterParams;	
				$masterTablesData["tipopago"][0]["masterKeys"] = array();
	$masterTablesData["tipopago"][0]["masterKeys"][]="id";
				$masterTablesData["tipopago"][0]["detailKeys"] = array();
	$masterTablesData["tipopago"][0]["detailKeys"][]="Usuario_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_tipopago()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,   no_tarjeta,   TipoPago,   fechadevencimiento,   codverificacion,   fechanacimiento,   Usuario_id";
$proto0["m_strFrom"] = "FROM tipopago";
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
	"m_strTable" => "tipopago",
	"m_srcTableName" => "tipopago"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "tipopago";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "no_tarjeta",
	"m_strTable" => "tipopago",
	"m_srcTableName" => "tipopago"
));

$proto7["m_sql"] = "no_tarjeta";
$proto7["m_srcTableName"] = "tipopago";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "TipoPago",
	"m_strTable" => "tipopago",
	"m_srcTableName" => "tipopago"
));

$proto9["m_sql"] = "TipoPago";
$proto9["m_srcTableName"] = "tipopago";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "fechadevencimiento",
	"m_strTable" => "tipopago",
	"m_srcTableName" => "tipopago"
));

$proto11["m_sql"] = "fechadevencimiento";
$proto11["m_srcTableName"] = "tipopago";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "codverificacion",
	"m_strTable" => "tipopago",
	"m_srcTableName" => "tipopago"
));

$proto13["m_sql"] = "codverificacion";
$proto13["m_srcTableName"] = "tipopago";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "fechanacimiento",
	"m_strTable" => "tipopago",
	"m_srcTableName" => "tipopago"
));

$proto15["m_sql"] = "fechanacimiento";
$proto15["m_srcTableName"] = "tipopago";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario_id",
	"m_strTable" => "tipopago",
	"m_srcTableName" => "tipopago"
));

$proto17["m_sql"] = "Usuario_id";
$proto17["m_srcTableName"] = "tipopago";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "tipopago";
$proto20["m_srcTableName"] = "tipopago";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "id";
$proto20["m_columns"][] = "no_tarjeta";
$proto20["m_columns"][] = "TipoPago";
$proto20["m_columns"][] = "fechadevencimiento";
$proto20["m_columns"][] = "codverificacion";
$proto20["m_columns"][] = "fechanacimiento";
$proto20["m_columns"][] = "Usuario_id";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "tipopago";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "tipopago";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tipopago";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tipopago = createSqlQuery_tipopago();


	
							
	
$tdatatipopago[".sqlquery"] = $queryData_tipopago;

$tableEvents["tipopago"] = new eventsBase;
$tdatatipopago[".hasEvents"] = false;

?>
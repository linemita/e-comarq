<?php
require_once(getabspath("classes/cipherer.php"));




$tdataPrincipal = array();	
	$tdataPrincipal[".truncateText"] = true;
	$tdataPrincipal[".NumberOfChars"] = 80; 
	$tdataPrincipal[".ShortName"] = "Principal";
	$tdataPrincipal[".OwnerID"] = "";
	$tdataPrincipal[".OriginalTable"] = "productos";

//	field labels
$fieldLabelsPrincipal = array();
$fieldToolTipsPrincipal = array();
$pageTitlesPrincipal = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsPrincipal["Spanish"] = array();
	$fieldToolTipsPrincipal["Spanish"] = array();
	$pageTitlesPrincipal["Spanish"] = array();
	$fieldLabelsPrincipal["Spanish"]["id"] = "Id";
	$fieldToolTipsPrincipal["Spanish"]["id"] = "";
	$fieldLabelsPrincipal["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipsPrincipal["Spanish"]["tipo"] = "";
	$fieldLabelsPrincipal["Spanish"]["Observacion"] = "Observacion";
	$fieldToolTipsPrincipal["Spanish"]["Observacion"] = "";
	$fieldLabelsPrincipal["Spanish"]["Precio"] = "Precio";
	$fieldToolTipsPrincipal["Spanish"]["Precio"] = "";
	$fieldLabelsPrincipal["Spanish"]["Exitencia"] = "Exitencia";
	$fieldToolTipsPrincipal["Spanish"]["Exitencia"] = "";
	$fieldLabelsPrincipal["Spanish"]["foto1"] = "Foto1";
	$fieldToolTipsPrincipal["Spanish"]["foto1"] = "";
	$fieldLabelsPrincipal["Spanish"]["foto2"] = "Foto2";
	$fieldToolTipsPrincipal["Spanish"]["foto2"] = "";
	$fieldLabelsPrincipal["Spanish"]["foto3"] = "Foto3";
	$fieldToolTipsPrincipal["Spanish"]["foto3"] = "";
	$fieldLabelsPrincipal["Spanish"]["foto4"] = "Foto4";
	$fieldToolTipsPrincipal["Spanish"]["foto4"] = "";
	$fieldLabelsPrincipal["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsPrincipal["Spanish"]["nombre"] = "";
	$fieldLabelsPrincipal["Spanish"]["modelo"] = "Modelo";
	$fieldToolTipsPrincipal["Spanish"]["modelo"] = "";
	$fieldLabelsPrincipal["Spanish"]["marca"] = "Marca";
	$fieldToolTipsPrincipal["Spanish"]["marca"] = "";
	$fieldLabelsPrincipal["Spanish"]["color"] = "Color";
	$fieldToolTipsPrincipal["Spanish"]["color"] = "";
	$fieldLabelsPrincipal["Spanish"]["tama_o"] = "Tamaño";
	$fieldToolTipsPrincipal["Spanish"]["tamaño"] = "";
	$fieldLabelsPrincipal["Spanish"]["Categorias_id"] = "Categoria";
	$fieldToolTipsPrincipal["Spanish"]["Categorias_id"] = "";
	$fieldLabelsPrincipal["Spanish"]["Usuario_id"] = "Usuario";
	$fieldToolTipsPrincipal["Spanish"]["Usuario_id"] = "";
	if (count($fieldToolTipsPrincipal["Spanish"]))
		$tdataPrincipal[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsPrincipal[""] = array();
	$fieldToolTipsPrincipal[""] = array();
	$pageTitlesPrincipal[""] = array();
	$fieldLabelsPrincipal[""]["id"] = "Id";
	$fieldToolTipsPrincipal[""]["id"] = "";
	if (count($fieldToolTipsPrincipal[""]))
		$tdataPrincipal[".isUseToolTips"] = true;
}
	
	
	$tdataPrincipal[".NCSearch"] = true;



$tdataPrincipal[".shortTableName"] = "Principal";
$tdataPrincipal[".nSecOptions"] = 0;
$tdataPrincipal[".recsPerRowList"] = 1;
$tdataPrincipal[".mainTableOwnerID"] = "";
$tdataPrincipal[".moveNext"] = 1;
$tdataPrincipal[".nType"] = 1;

$tdataPrincipal[".strOriginalTableName"] = "productos";




$tdataPrincipal[".showAddInPopup"] = false;

$tdataPrincipal[".showEditInPopup"] = false;

$tdataPrincipal[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataPrincipal[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataPrincipal[".fieldsForRegister"] = array();

$tdataPrincipal[".listAjax"] = false;

	$tdataPrincipal[".audit"] = false;

	$tdataPrincipal[".locking"] = false;

$tdataPrincipal[".edit"] = true;

$tdataPrincipal[".list"] = true;

$tdataPrincipal[".view"] = true;



$tdataPrincipal[".printFriendly"] = true;

$tdataPrincipal[".delete"] = true;

$tdataPrincipal[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataPrincipal[".searchSaving"] = false;
//

$tdataPrincipal[".showSearchPanel"] = true;
		$tdataPrincipal[".flexibleSearch"] = true;		

if (isMobile())
	$tdataPrincipal[".isUseAjaxSuggest"] = false;
else 
	$tdataPrincipal[".isUseAjaxSuggest"] = true;



														
$tdataPrincipal[".addPageEvents"] = false;

// use timepicker for search panel
$tdataPrincipal[".isUseTimeForSearch"] = false;



$tdataPrincipal[".useDetailsPreview"] = true;


$tdataPrincipal[".allSearchFields"] = array();
$tdataPrincipal[".filterFields"] = array();
$tdataPrincipal[".requiredSearchFields"] = array();

$tdataPrincipal[".allSearchFields"][] = "id";
	$tdataPrincipal[".allSearchFields"][] = "tipo";
	$tdataPrincipal[".allSearchFields"][] = "Precio";
	$tdataPrincipal[".allSearchFields"][] = "nombre";
	$tdataPrincipal[".allSearchFields"][] = "modelo";
	$tdataPrincipal[".allSearchFields"][] = "marca";
	$tdataPrincipal[".allSearchFields"][] = "Categorias_id";
	$tdataPrincipal[".allSearchFields"][] = "Usuario_id";
	

$tdataPrincipal[".googleLikeFields"] = array();
$tdataPrincipal[".googleLikeFields"][] = "id";
$tdataPrincipal[".googleLikeFields"][] = "tipo";
$tdataPrincipal[".googleLikeFields"][] = "Observacion";
$tdataPrincipal[".googleLikeFields"][] = "Precio";
$tdataPrincipal[".googleLikeFields"][] = "Exitencia";
$tdataPrincipal[".googleLikeFields"][] = "nombre";
$tdataPrincipal[".googleLikeFields"][] = "modelo";
$tdataPrincipal[".googleLikeFields"][] = "marca";
$tdataPrincipal[".googleLikeFields"][] = "color";
$tdataPrincipal[".googleLikeFields"][] = "tamaño";
$tdataPrincipal[".googleLikeFields"][] = "Categorias_id";
$tdataPrincipal[".googleLikeFields"][] = "Usuario_id";


$tdataPrincipal[".advSearchFields"] = array();
$tdataPrincipal[".advSearchFields"][] = "id";
$tdataPrincipal[".advSearchFields"][] = "tipo";
$tdataPrincipal[".advSearchFields"][] = "Precio";
$tdataPrincipal[".advSearchFields"][] = "nombre";
$tdataPrincipal[".advSearchFields"][] = "modelo";
$tdataPrincipal[".advSearchFields"][] = "marca";
$tdataPrincipal[".advSearchFields"][] = "Categorias_id";
$tdataPrincipal[".advSearchFields"][] = "Usuario_id";

$tdataPrincipal[".tableType"] = "list";

$tdataPrincipal[".printerPageOrientation"] = 0;
$tdataPrincipal[".nPrinterPageScale"] = 100;

$tdataPrincipal[".nPrinterSplitRecords"] = 40;

$tdataPrincipal[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataPrincipal[".pageSize"] = 20;

$tdataPrincipal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataPrincipal[".strOrderBy"] = $tstrOrderBy;

$tdataPrincipal[".orderindexes"] = array();

$tdataPrincipal[".sqlHead"] = "SELECT id,  tipo,  Observacion,  Precio,  Exitencia,  foto1,  foto2,  foto3,  foto4,  nombre,  modelo,  marca,  color,  `tamaño`,  Categorias_id,  Usuario_id";
$tdataPrincipal[".sqlFrom"] = "FROM productos";
$tdataPrincipal[".sqlWhereExpr"] = "";
$tdataPrincipal[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataPrincipal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataPrincipal[".arrGroupsPerPage"] = $arrGPP;

$tdataPrincipal[".highlightSearchResults"] = true;

$tableKeysPrincipal = array();
$tableKeysPrincipal[] = "id";
$tdataPrincipal[".Keys"] = $tableKeysPrincipal;

$tdataPrincipal[".listFields"] = array();
$tdataPrincipal[".listFields"][] = "Precio";
$tdataPrincipal[".listFields"][] = "Categorias_id";
$tdataPrincipal[".listFields"][] = "id";
$tdataPrincipal[".listFields"][] = "nombre";
$tdataPrincipal[".listFields"][] = "modelo";
$tdataPrincipal[".listFields"][] = "marca";
$tdataPrincipal[".listFields"][] = "tipo";
$tdataPrincipal[".listFields"][] = "foto1";
$tdataPrincipal[".listFields"][] = "Usuario_id";

$tdataPrincipal[".hideMobileList"] = array();


$tdataPrincipal[".viewFields"] = array();
$tdataPrincipal[".viewFields"][] = "tipo";
$tdataPrincipal[".viewFields"][] = "Precio";
$tdataPrincipal[".viewFields"][] = "foto1";
$tdataPrincipal[".viewFields"][] = "nombre";
$tdataPrincipal[".viewFields"][] = "modelo";
$tdataPrincipal[".viewFields"][] = "marca";
$tdataPrincipal[".viewFields"][] = "Categorias_id";
$tdataPrincipal[".viewFields"][] = "Usuario_id";

$tdataPrincipal[".addFields"] = array();
$tdataPrincipal[".addFields"][] = "tipo";
$tdataPrincipal[".addFields"][] = "Precio";
$tdataPrincipal[".addFields"][] = "foto1";
$tdataPrincipal[".addFields"][] = "nombre";
$tdataPrincipal[".addFields"][] = "modelo";
$tdataPrincipal[".addFields"][] = "marca";
$tdataPrincipal[".addFields"][] = "Categorias_id";

$tdataPrincipal[".inlineAddFields"] = array();

$tdataPrincipal[".editFields"] = array();
$tdataPrincipal[".editFields"][] = "tipo";
$tdataPrincipal[".editFields"][] = "Precio";
$tdataPrincipal[".editFields"][] = "foto1";
$tdataPrincipal[".editFields"][] = "nombre";
$tdataPrincipal[".editFields"][] = "modelo";
$tdataPrincipal[".editFields"][] = "marca";
$tdataPrincipal[".editFields"][] = "Categorias_id";

$tdataPrincipal[".inlineEditFields"] = array();

$tdataPrincipal[".exportFields"] = array();

$tdataPrincipal[".importFields"] = array();

$tdataPrincipal[".printFields"] = array();
$tdataPrincipal[".printFields"][] = "tipo";
$tdataPrincipal[".printFields"][] = "Precio";
$tdataPrincipal[".printFields"][] = "foto1";
$tdataPrincipal[".printFields"][] = "nombre";
$tdataPrincipal[".printFields"][] = "modelo";
$tdataPrincipal[".printFields"][] = "marca";
$tdataPrincipal[".printFields"][] = "Categorias_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("Principal","id"); 
	$fdata["FieldType"] = 3;
	
		
		$fdata["AutoInc"] = true;
	
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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

	

	
	$tdataPrincipal["id"] = $fdata;
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("Principal","tipo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "tipo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "tipo";
	
		
		
				$fdata["FieldPermissions"] = true;
	
					
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
		
		
		
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "Nuevo";
	$edata["LookupValues"][] = "Usado";

		
		$edata["SelectSize"] = 1;
		
// End Lookup Settings


		
		
		
		
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
		$fdata["defaultSearchOption"] = "Equals";
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataPrincipal["tipo"] = $fdata;
//	Observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Observacion";
	$fdata["GoodName"] = "Observacion";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("Principal","Observacion"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Observacion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observacion";
	
		
		
				
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
			$edata["EditParams"].= " maxlength=150";
	
		$edata["controlWidth"] = 200;
	
//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
		
		
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataPrincipal["Observacion"] = $fdata;
//	Precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Precio";
	$fdata["GoodName"] = "Precio";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("Principal","Precio"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "Precio"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Precio";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Number");
	
		
		
		
		
		
		
		$vdata["DecimalDigits"] = 2;
	
		
		
		
		
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

	

	
	$tdataPrincipal["Precio"] = $fdata;
//	Exitencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Exitencia";
	$fdata["GoodName"] = "Exitencia";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("Principal","Exitencia"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "Exitencia"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Exitencia";
	
		
		
				
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
	
	
	
	

	

	
	$tdataPrincipal["Exitencia"] = $fdata;
//	foto1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "foto1";
	$fdata["GoodName"] = "foto1";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("Principal","foto1"); 
	$fdata["FieldType"] = 128;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "foto1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "foto1";
	
		
		
				$fdata["FieldPermissions"] = true;
	
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Database Image");
	
		
		
						$vdata["ImageWidth"] = 150;
	$vdata["ImageHeight"] = 150;
	
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Database image");
	
			
	
	


		
		
		
		
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
	
	
	
	

	

	
	$tdataPrincipal["foto1"] = $fdata;
//	foto2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "foto2";
	$fdata["GoodName"] = "foto2";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("Principal","foto2"); 
	$fdata["FieldType"] = 128;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "foto2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "foto2";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Database Image");
	
		
		
						$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;
	
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Database image");
	
			
	
	


		
		
		
		
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
	
	
	
	

	

	
	$tdataPrincipal["foto2"] = $fdata;
//	foto3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "foto3";
	$fdata["GoodName"] = "foto3";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("Principal","foto3"); 
	$fdata["FieldType"] = 128;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "foto3"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "foto3";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Database Image");
	
		
		
						$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;
	
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Database image");
	
			
	
	


		
		
		
		
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
	
	
	
	

	

	
	$tdataPrincipal["foto3"] = $fdata;
//	foto4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "foto4";
	$fdata["GoodName"] = "foto4";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("Principal","foto4"); 
	$fdata["FieldType"] = 128;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "foto4"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "foto4";
	
		
		
				
				$fdata["UploadFolder"] = "files";
		
//  Begin View Formats
	$fdata["ViewFormats"] = array();
	
	$vdata = array("ViewFormat" => "Database Image");
	
		
		
						$vdata["ImageWidth"] = 457;
	$vdata["ImageHeight"] = 0;
	
		
		
		
		
		
		
		
		
		$vdata["NeedEncode"] = true;
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats 	
	$fdata["EditFormats"] = array();
	
	$edata = array("EditFormat" => "Database image");
	
			
	
	


		
		
		
		
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
	
	
	
	

	

	
	$tdataPrincipal["foto4"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("Principal","nombre"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "nombre"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nombre";
	
		
		
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
			$edata["EditParams"].= " maxlength=75";
	
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

	

	
	$tdataPrincipal["nombre"] = $fdata;
//	modelo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "modelo";
	$fdata["GoodName"] = "modelo";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("Principal","modelo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "modelo"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "modelo";
	
		
		
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

	

	
	$tdataPrincipal["modelo"] = $fdata;
//	marca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "marca";
	$fdata["GoodName"] = "marca";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("Principal","marca"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "marca"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "marca";
	
		
		
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

	

	
	$tdataPrincipal["marca"] = $fdata;
//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("Principal","color"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "color"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "color";
	
		
		
				
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
	
	
	
	

	

	
	$tdataPrincipal["color"] = $fdata;
//	tamaño
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "tamaño";
	$fdata["GoodName"] = "tama_o";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("Principal","tama_o"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		
		
		
		
		
		
		
		
		
		$fdata["strField"] = "tamaño"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tamaño`";
	
		
		
				
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
	
	
	
	

	

	
	$tdataPrincipal["tamaño"] = $fdata;
//	Categorias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Categorias_id";
	$fdata["GoodName"] = "Categorias_id";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("Principal","Categorias_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		
		$fdata["bEditPage"] = true; 
	
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "Categorias_id"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Categorias_id";
	
		
		
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
	$edata["LookupTable"] = "categorias";
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

	

	
	$tdataPrincipal["Categorias_id"] = $fdata;
//	Usuario_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Usuario_id";
	$fdata["GoodName"] = "Usuario_id";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("Principal","Usuario_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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

	

	
	$tdataPrincipal["Usuario_id"] = $fdata;

	
$tables_data["Principal"]=&$tdataPrincipal;
$field_labels["Principal"] = &$fieldLabelsPrincipal;
$fieldToolTips["Principal"] = &$fieldToolTipsPrincipal;
$page_titles["Principal"] = &$pageTitlesPrincipal;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["Principal"] = array();
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
			
	$detailsTablesData["Principal"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Principal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Principal"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Principal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Principal"][$dIndex]["detailKeys"][]="Productos_idProductos";
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
			
	$detailsTablesData["Principal"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["Principal"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["Principal"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["Principal"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["Principal"][$dIndex]["detailKeys"][]="Productos_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["Principal"] = array();


	
				$strOriginalDetailsTable="categorias";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="categorias";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "categorias";
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
					$masterTablesData["Principal"][0] = $masterParams;	
				$masterTablesData["Principal"][0]["masterKeys"] = array();
	$masterTablesData["Principal"][0]["masterKeys"][]="id";
				$masterTablesData["Principal"][0]["detailKeys"] = array();
	$masterTablesData["Principal"][0]["detailKeys"][]="Categorias_id";
		
	
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
					$masterTablesData["Principal"][1] = $masterParams;	
				$masterTablesData["Principal"][1]["masterKeys"] = array();
	$masterTablesData["Principal"][1]["masterKeys"][]="id";
				$masterTablesData["Principal"][1]["detailKeys"] = array();
	$masterTablesData["Principal"][1]["detailKeys"][]="Usuario_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_Principal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  tipo,  Observacion,  Precio,  Exitencia,  foto1,  foto2,  foto3,  foto4,  nombre,  modelo,  marca,  color,  `tamaño`,  Categorias_id,  Usuario_id";
$proto0["m_strFrom"] = "FROM productos";
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
	"m_strTable" => "productos",
	"m_srcTableName" => "Principal"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "Principal";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "productos",
	"m_srcTableName" => "Principal"
));

$proto7["m_sql"] = "tipo";
$proto7["m_srcTableName"] = "Principal";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Observacion",
	"m_strTable" => "productos",
	"m_srcTableName" => "Principal"
));

$proto9["m_sql"] = "Observacion";
$proto9["m_srcTableName"] = "Principal";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Precio",
	"m_strTable" => "productos",
	"m_srcTableName" => "Principal"
));

$proto11["m_sql"] = "Precio";
$proto11["m_srcTableName"] = "Principal";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Exitencia",
	"m_strTable" => "productos",
	"m_srcTableName" => "Principal"
));

$proto13["m_sql"] = "Exitencia";
$proto13["m_srcTableName"] = "Principal";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "foto1",
	"m_strTable" => "productos",
	"m_srcTableName" => "Principal"
));

$proto15["m_sql"] = "foto1";
$proto15["m_srcTableName"] = "Principal";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "foto2",
	"m_strTable" => "productos",
	"m_srcTableName" => "Principal"
));

$proto17["m_sql"] = "foto2";
$proto17["m_srcTableName"] = "Principal";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "foto3",
	"m_strTable" => "productos",
	"m_srcTableName" => "Principal"
));

$proto19["m_sql"] = "foto3";
$proto19["m_srcTableName"] = "Principal";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "foto4",
	"m_strTable" => "productos",
	"m_srcTableName" => "Principal"
));

$proto21["m_sql"] = "foto4";
$proto21["m_srcTableName"] = "Principal";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "productos",
	"m_srcTableName" => "Principal"
));

$proto23["m_sql"] = "nombre";
$proto23["m_srcTableName"] = "Principal";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "modelo",
	"m_strTable" => "productos",
	"m_srcTableName" => "Principal"
));

$proto25["m_sql"] = "modelo";
$proto25["m_srcTableName"] = "Principal";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "marca",
	"m_strTable" => "productos",
	"m_srcTableName" => "Principal"
));

$proto27["m_sql"] = "marca";
$proto27["m_srcTableName"] = "Principal";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "color",
	"m_strTable" => "productos",
	"m_srcTableName" => "Principal"
));

$proto29["m_sql"] = "color";
$proto29["m_srcTableName"] = "Principal";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "tamaño",
	"m_strTable" => "productos",
	"m_srcTableName" => "Principal"
));

$proto31["m_sql"] = "`tamaño`";
$proto31["m_srcTableName"] = "Principal";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Categorias_id",
	"m_strTable" => "productos",
	"m_srcTableName" => "Principal"
));

$proto33["m_sql"] = "Categorias_id";
$proto33["m_srcTableName"] = "Principal";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario_id",
	"m_strTable" => "productos",
	"m_srcTableName" => "Principal"
));

$proto35["m_sql"] = "Usuario_id";
$proto35["m_srcTableName"] = "Principal";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "productos";
$proto38["m_srcTableName"] = "Principal";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "id";
$proto38["m_columns"][] = "tipo";
$proto38["m_columns"][] = "Observacion";
$proto38["m_columns"][] = "Precio";
$proto38["m_columns"][] = "Exitencia";
$proto38["m_columns"][] = "foto1";
$proto38["m_columns"][] = "foto2";
$proto38["m_columns"][] = "foto3";
$proto38["m_columns"][] = "foto4";
$proto38["m_columns"][] = "nombre";
$proto38["m_columns"][] = "modelo";
$proto38["m_columns"][] = "marca";
$proto38["m_columns"][] = "color";
$proto38["m_columns"][] = "tamaño";
$proto38["m_columns"][] = "Categorias_id";
$proto38["m_columns"][] = "Usuario_id";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "productos";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "Principal";
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="Principal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_Principal = createSqlQuery_Principal();


	
																
	
$tdataPrincipal[".sqlquery"] = $queryData_Principal;

include_once(getabspath("include/Principal_events.php"));
$tableEvents["Principal"] = new eventclass_Principal;
$tdataPrincipal[".hasEvents"] = true;

?>
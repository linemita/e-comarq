<?php
require_once(getabspath("classes/cipherer.php"));




$tdataproductos = array();	
	$tdataproductos[".truncateText"] = true;
	$tdataproductos[".NumberOfChars"] = 80; 
	$tdataproductos[".ShortName"] = "productos";
	$tdataproductos[".OwnerID"] = "";
	$tdataproductos[".OriginalTable"] = "productos";

//	field labels
$fieldLabelsproductos = array();
$fieldToolTipsproductos = array();
$pageTitlesproductos = array();

if(mlang_getcurrentlang()=="Spanish")
{
	$fieldLabelsproductos["Spanish"] = array();
	$fieldToolTipsproductos["Spanish"] = array();
	$pageTitlesproductos["Spanish"] = array();
	$fieldLabelsproductos["Spanish"]["id"] = "Id";
	$fieldToolTipsproductos["Spanish"]["id"] = "";
	$fieldLabelsproductos["Spanish"]["tipo"] = "Tipo";
	$fieldToolTipsproductos["Spanish"]["tipo"] = "";
	$fieldLabelsproductos["Spanish"]["Observacion"] = "Observacion";
	$fieldToolTipsproductos["Spanish"]["Observacion"] = "";
	$fieldLabelsproductos["Spanish"]["Precio"] = "Precio";
	$fieldToolTipsproductos["Spanish"]["Precio"] = "";
	$fieldLabelsproductos["Spanish"]["Exitencia"] = "Exitencia";
	$fieldToolTipsproductos["Spanish"]["Exitencia"] = "";
	$fieldLabelsproductos["Spanish"]["foto1"] = "Foto1";
	$fieldToolTipsproductos["Spanish"]["foto1"] = "";
	$fieldLabelsproductos["Spanish"]["foto2"] = "Foto2";
	$fieldToolTipsproductos["Spanish"]["foto2"] = "";
	$fieldLabelsproductos["Spanish"]["foto3"] = "Foto3";
	$fieldToolTipsproductos["Spanish"]["foto3"] = "";
	$fieldLabelsproductos["Spanish"]["foto4"] = "Foto4";
	$fieldToolTipsproductos["Spanish"]["foto4"] = "";
	$fieldLabelsproductos["Spanish"]["nombre"] = "Nombre";
	$fieldToolTipsproductos["Spanish"]["nombre"] = "";
	$fieldLabelsproductos["Spanish"]["modelo"] = "Modelo";
	$fieldToolTipsproductos["Spanish"]["modelo"] = "";
	$fieldLabelsproductos["Spanish"]["marca"] = "Marca";
	$fieldToolTipsproductos["Spanish"]["marca"] = "";
	$fieldLabelsproductos["Spanish"]["color"] = "Color";
	$fieldToolTipsproductos["Spanish"]["color"] = "";
	$fieldLabelsproductos["Spanish"]["tama_o"] = "Tamaño";
	$fieldToolTipsproductos["Spanish"]["tamaño"] = "";
	$fieldLabelsproductos["Spanish"]["Categorias_id"] = "Categoria";
	$fieldToolTipsproductos["Spanish"]["Categorias_id"] = "";
	$fieldLabelsproductos["Spanish"]["Usuario_id"] = "Usuario";
	$fieldToolTipsproductos["Spanish"]["Usuario_id"] = "";
	if (count($fieldToolTipsproductos["Spanish"]))
		$tdataproductos[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsproductos[""] = array();
	$fieldToolTipsproductos[""] = array();
	$pageTitlesproductos[""] = array();
	$fieldLabelsproductos[""]["id"] = "Id";
	$fieldToolTipsproductos[""]["id"] = "";
	if (count($fieldToolTipsproductos[""]))
		$tdataproductos[".isUseToolTips"] = true;
}
	
	
	$tdataproductos[".NCSearch"] = true;



$tdataproductos[".shortTableName"] = "productos";
$tdataproductos[".nSecOptions"] = 0;
$tdataproductos[".recsPerRowList"] = 1;
$tdataproductos[".mainTableOwnerID"] = "";
$tdataproductos[".moveNext"] = 1;
$tdataproductos[".nType"] = 0;

$tdataproductos[".strOriginalTableName"] = "productos";




$tdataproductos[".showAddInPopup"] = false;

$tdataproductos[".showEditInPopup"] = false;

$tdataproductos[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataproductos[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataproductos[".fieldsForRegister"] = array();

$tdataproductos[".listAjax"] = false;

	$tdataproductos[".audit"] = false;

	$tdataproductos[".locking"] = false;

$tdataproductos[".edit"] = true;

$tdataproductos[".list"] = true;

$tdataproductos[".inlineEdit"] = true;
$tdataproductos[".inlineAdd"] = true;
$tdataproductos[".view"] = true;

$tdataproductos[".import"] = true;

$tdataproductos[".exportTo"] = true;

$tdataproductos[".printFriendly"] = true;

$tdataproductos[".delete"] = true;

$tdataproductos[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataproductos[".searchSaving"] = false;
//

$tdataproductos[".showSearchPanel"] = true;
		$tdataproductos[".flexibleSearch"] = true;		

if (isMobile())
	$tdataproductos[".isUseAjaxSuggest"] = false;
else 
	$tdataproductos[".isUseAjaxSuggest"] = true;

$tdataproductos[".rowHighlite"] = true;


														
$tdataproductos[".addPageEvents"] = false;

// use timepicker for search panel
$tdataproductos[".isUseTimeForSearch"] = false;



$tdataproductos[".useDetailsPreview"] = true;


$tdataproductos[".allSearchFields"] = array();
$tdataproductos[".filterFields"] = array();
$tdataproductos[".requiredSearchFields"] = array();

$tdataproductos[".allSearchFields"][] = "id";
	$tdataproductos[".allSearchFields"][] = "tipo";
	$tdataproductos[".allSearchFields"][] = "Observacion";
	$tdataproductos[".allSearchFields"][] = "Precio";
	$tdataproductos[".allSearchFields"][] = "Exitencia";
	$tdataproductos[".allSearchFields"][] = "nombre";
	$tdataproductos[".allSearchFields"][] = "modelo";
	$tdataproductos[".allSearchFields"][] = "marca";
	$tdataproductos[".allSearchFields"][] = "color";
	$tdataproductos[".allSearchFields"][] = "tamaño";
	$tdataproductos[".allSearchFields"][] = "Categorias_id";
	

$tdataproductos[".googleLikeFields"] = array();
$tdataproductos[".googleLikeFields"][] = "id";
$tdataproductos[".googleLikeFields"][] = "tipo";
$tdataproductos[".googleLikeFields"][] = "Observacion";
$tdataproductos[".googleLikeFields"][] = "Precio";
$tdataproductos[".googleLikeFields"][] = "Exitencia";
$tdataproductos[".googleLikeFields"][] = "nombre";
$tdataproductos[".googleLikeFields"][] = "modelo";
$tdataproductos[".googleLikeFields"][] = "marca";
$tdataproductos[".googleLikeFields"][] = "color";
$tdataproductos[".googleLikeFields"][] = "tamaño";
$tdataproductos[".googleLikeFields"][] = "Categorias_id";
$tdataproductos[".googleLikeFields"][] = "Usuario_id";


$tdataproductos[".advSearchFields"] = array();
$tdataproductos[".advSearchFields"][] = "id";
$tdataproductos[".advSearchFields"][] = "tipo";
$tdataproductos[".advSearchFields"][] = "Observacion";
$tdataproductos[".advSearchFields"][] = "Precio";
$tdataproductos[".advSearchFields"][] = "Exitencia";
$tdataproductos[".advSearchFields"][] = "nombre";
$tdataproductos[".advSearchFields"][] = "modelo";
$tdataproductos[".advSearchFields"][] = "marca";
$tdataproductos[".advSearchFields"][] = "color";
$tdataproductos[".advSearchFields"][] = "tamaño";
$tdataproductos[".advSearchFields"][] = "Categorias_id";

$tdataproductos[".tableType"] = "list";

$tdataproductos[".printerPageOrientation"] = 0;
$tdataproductos[".nPrinterPageScale"] = 100;

$tdataproductos[".nPrinterSplitRecords"] = 40;

$tdataproductos[".nPrinterPDFSplitRecords"] = 40;





	





// view page pdf

// print page pdf


$tdataproductos[".pageSize"] = 20;

$tdataproductos[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataproductos[".strOrderBy"] = $tstrOrderBy;

$tdataproductos[".orderindexes"] = array();

$tdataproductos[".sqlHead"] = "SELECT id,  tipo,  Observacion,  Precio,  Exitencia,  foto1,  foto2,  foto3,  foto4,  nombre,  modelo,  marca,  color,  `tamaño`,  Categorias_id,  Usuario_id";
$tdataproductos[".sqlFrom"] = "FROM productos";
$tdataproductos[".sqlWhereExpr"] = "";
$tdataproductos[".sqlTail"] = "";




//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataproductos[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataproductos[".arrGroupsPerPage"] = $arrGPP;

$tdataproductos[".highlightSearchResults"] = true;

$tableKeysproductos = array();
$tableKeysproductos[] = "id";
$tdataproductos[".Keys"] = $tableKeysproductos;

$tdataproductos[".listFields"] = array();
$tdataproductos[".listFields"][] = "id";
$tdataproductos[".listFields"][] = "Categorias_id";
$tdataproductos[".listFields"][] = "nombre";
$tdataproductos[".listFields"][] = "modelo";
$tdataproductos[".listFields"][] = "marca";
$tdataproductos[".listFields"][] = "tipo";
$tdataproductos[".listFields"][] = "color";
$tdataproductos[".listFields"][] = "tamaño";
$tdataproductos[".listFields"][] = "Precio";
$tdataproductos[".listFields"][] = "Observacion";
$tdataproductos[".listFields"][] = "Exitencia";
$tdataproductos[".listFields"][] = "foto1";
$tdataproductos[".listFields"][] = "foto2";
$tdataproductos[".listFields"][] = "foto3";
$tdataproductos[".listFields"][] = "foto4";

$tdataproductos[".hideMobileList"] = array();


$tdataproductos[".viewFields"] = array();
$tdataproductos[".viewFields"][] = "id";
$tdataproductos[".viewFields"][] = "tipo";
$tdataproductos[".viewFields"][] = "Observacion";
$tdataproductos[".viewFields"][] = "Precio";
$tdataproductos[".viewFields"][] = "Exitencia";
$tdataproductos[".viewFields"][] = "foto1";
$tdataproductos[".viewFields"][] = "foto2";
$tdataproductos[".viewFields"][] = "foto3";
$tdataproductos[".viewFields"][] = "foto4";
$tdataproductos[".viewFields"][] = "nombre";
$tdataproductos[".viewFields"][] = "modelo";
$tdataproductos[".viewFields"][] = "marca";
$tdataproductos[".viewFields"][] = "color";
$tdataproductos[".viewFields"][] = "tamaño";
$tdataproductos[".viewFields"][] = "Categorias_id";
$tdataproductos[".viewFields"][] = "Usuario_id";

$tdataproductos[".addFields"] = array();
$tdataproductos[".addFields"][] = "tipo";
$tdataproductos[".addFields"][] = "Observacion";
$tdataproductos[".addFields"][] = "Precio";
$tdataproductos[".addFields"][] = "Exitencia";
$tdataproductos[".addFields"][] = "foto1";
$tdataproductos[".addFields"][] = "foto2";
$tdataproductos[".addFields"][] = "foto3";
$tdataproductos[".addFields"][] = "foto4";
$tdataproductos[".addFields"][] = "nombre";
$tdataproductos[".addFields"][] = "modelo";
$tdataproductos[".addFields"][] = "marca";
$tdataproductos[".addFields"][] = "color";
$tdataproductos[".addFields"][] = "tamaño";
$tdataproductos[".addFields"][] = "Categorias_id";
$tdataproductos[".addFields"][] = "Usuario_id";

$tdataproductos[".inlineAddFields"] = array();
$tdataproductos[".inlineAddFields"][] = "Categorias_id";
$tdataproductos[".inlineAddFields"][] = "nombre";
$tdataproductos[".inlineAddFields"][] = "modelo";
$tdataproductos[".inlineAddFields"][] = "marca";
$tdataproductos[".inlineAddFields"][] = "tipo";
$tdataproductos[".inlineAddFields"][] = "color";
$tdataproductos[".inlineAddFields"][] = "tamaño";
$tdataproductos[".inlineAddFields"][] = "Precio";
$tdataproductos[".inlineAddFields"][] = "Observacion";
$tdataproductos[".inlineAddFields"][] = "Exitencia";
$tdataproductos[".inlineAddFields"][] = "foto1";
$tdataproductos[".inlineAddFields"][] = "foto2";
$tdataproductos[".inlineAddFields"][] = "foto3";
$tdataproductos[".inlineAddFields"][] = "foto4";

$tdataproductos[".editFields"] = array();
$tdataproductos[".editFields"][] = "tipo";
$tdataproductos[".editFields"][] = "Observacion";
$tdataproductos[".editFields"][] = "Precio";
$tdataproductos[".editFields"][] = "Exitencia";
$tdataproductos[".editFields"][] = "foto1";
$tdataproductos[".editFields"][] = "foto2";
$tdataproductos[".editFields"][] = "foto3";
$tdataproductos[".editFields"][] = "foto4";
$tdataproductos[".editFields"][] = "nombre";
$tdataproductos[".editFields"][] = "modelo";
$tdataproductos[".editFields"][] = "marca";
$tdataproductos[".editFields"][] = "color";
$tdataproductos[".editFields"][] = "tamaño";
$tdataproductos[".editFields"][] = "Categorias_id";

$tdataproductos[".inlineEditFields"] = array();
$tdataproductos[".inlineEditFields"][] = "Categorias_id";
$tdataproductos[".inlineEditFields"][] = "nombre";
$tdataproductos[".inlineEditFields"][] = "modelo";
$tdataproductos[".inlineEditFields"][] = "marca";
$tdataproductos[".inlineEditFields"][] = "tipo";
$tdataproductos[".inlineEditFields"][] = "color";
$tdataproductos[".inlineEditFields"][] = "tamaño";
$tdataproductos[".inlineEditFields"][] = "Precio";
$tdataproductos[".inlineEditFields"][] = "Observacion";
$tdataproductos[".inlineEditFields"][] = "Exitencia";
$tdataproductos[".inlineEditFields"][] = "foto1";
$tdataproductos[".inlineEditFields"][] = "foto2";
$tdataproductos[".inlineEditFields"][] = "foto3";
$tdataproductos[".inlineEditFields"][] = "foto4";

$tdataproductos[".exportFields"] = array();
$tdataproductos[".exportFields"][] = "id";
$tdataproductos[".exportFields"][] = "tipo";
$tdataproductos[".exportFields"][] = "Observacion";
$tdataproductos[".exportFields"][] = "Precio";
$tdataproductos[".exportFields"][] = "Exitencia";
$tdataproductos[".exportFields"][] = "nombre";
$tdataproductos[".exportFields"][] = "modelo";
$tdataproductos[".exportFields"][] = "marca";
$tdataproductos[".exportFields"][] = "color";
$tdataproductos[".exportFields"][] = "tamaño";
$tdataproductos[".exportFields"][] = "Categorias_id";

$tdataproductos[".importFields"] = array();
$tdataproductos[".importFields"][] = "id";
$tdataproductos[".importFields"][] = "tipo";
$tdataproductos[".importFields"][] = "Observacion";
$tdataproductos[".importFields"][] = "Precio";
$tdataproductos[".importFields"][] = "Exitencia";
$tdataproductos[".importFields"][] = "nombre";
$tdataproductos[".importFields"][] = "modelo";
$tdataproductos[".importFields"][] = "marca";
$tdataproductos[".importFields"][] = "color";
$tdataproductos[".importFields"][] = "tamaño";
$tdataproductos[".importFields"][] = "Categorias_id";

$tdataproductos[".printFields"] = array();
$tdataproductos[".printFields"][] = "id";
$tdataproductos[".printFields"][] = "tipo";
$tdataproductos[".printFields"][] = "Observacion";
$tdataproductos[".printFields"][] = "Precio";
$tdataproductos[".printFields"][] = "Exitencia";
$tdataproductos[".printFields"][] = "foto1";
$tdataproductos[".printFields"][] = "foto2";
$tdataproductos[".printFields"][] = "foto3";
$tdataproductos[".printFields"][] = "foto4";
$tdataproductos[".printFields"][] = "nombre";
$tdataproductos[".printFields"][] = "modelo";
$tdataproductos[".printFields"][] = "marca";
$tdataproductos[".printFields"][] = "color";
$tdataproductos[".printFields"][] = "tamaño";
$tdataproductos[".printFields"][] = "Categorias_id";

//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","id"); 
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

	

	
	$tdataproductos["id"] = $fdata;
//	tipo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "tipo";
	$fdata["GoodName"] = "tipo";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","tipo"); 
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

	

	
	$tdataproductos["tipo"] = $fdata;
//	Observacion
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Observacion";
	$fdata["GoodName"] = "Observacion";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","Observacion"); 
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
	
		$fdata["strField"] = "Observacion"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Observacion";
	
		
		
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
	
	
	
	
// the field's search options settings
		
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdataproductos["Observacion"] = $fdata;
//	Precio
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Precio";
	$fdata["GoodName"] = "Precio";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","Precio"); 
	$fdata["FieldType"] = 5;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		$fdata["bAdvancedSearch"] = true; 
	
		$fdata["bPrinterPage"] = true; 
	
		$fdata["bExportPage"] = true; 
	
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

	

	
	$tdataproductos["Precio"] = $fdata;
//	Exitencia
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Exitencia";
	$fdata["GoodName"] = "Exitencia";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","Exitencia"); 
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
	
		$fdata["strField"] = "Exitencia"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Exitencia";
	
		
		
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

	

	
	$tdataproductos["Exitencia"] = $fdata;
//	foto1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "foto1";
	$fdata["GoodName"] = "foto1";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","foto1"); 
	$fdata["FieldType"] = 128;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
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
	
		
				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 200;
	
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataproductos["foto1"] = $fdata;
//	foto2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "foto2";
	$fdata["GoodName"] = "foto2";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","foto2"); 
	$fdata["FieldType"] = 128;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "foto2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "foto2";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
	
	
	
	

	

	
	$tdataproductos["foto2"] = $fdata;
//	foto3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "foto3";
	$fdata["GoodName"] = "foto3";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","foto3"); 
	$fdata["FieldType"] = 128;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "foto3"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "foto3";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
	
	
	
	

	

	
	$tdataproductos["foto3"] = $fdata;
//	foto4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "foto4";
	$fdata["GoodName"] = "foto4";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","foto4"); 
	$fdata["FieldType"] = 128;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		$fdata["bAddPage"] = true; 
	
		$fdata["bInlineAdd"] = true; 
	
		$fdata["bEditPage"] = true; 
	
		$fdata["bInlineEdit"] = true; 
	
		$fdata["bViewPage"] = true; 
	
		
		$fdata["bPrinterPage"] = true; 
	
		
		$fdata["strField"] = "foto4"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "foto4";
	
		
		
				$fdata["FieldPermissions"] = true;
	
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
	
	
	
	

	

	
	$tdataproductos["foto4"] = $fdata;
//	nombre
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "nombre";
	$fdata["GoodName"] = "nombre";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","nombre"); 
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

	

	
	$tdataproductos["nombre"] = $fdata;
//	modelo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "modelo";
	$fdata["GoodName"] = "modelo";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","modelo"); 
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

	

	
	$tdataproductos["modelo"] = $fdata;
//	marca
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "marca";
	$fdata["GoodName"] = "marca";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","marca"); 
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

	

	
	$tdataproductos["marca"] = $fdata;
//	color
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "color";
	$fdata["GoodName"] = "color";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","color"); 
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
	
		$fdata["strField"] = "color"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "color";
	
		
		
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

	

	
	$tdataproductos["color"] = $fdata;
//	tamaño
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "tamaño";
	$fdata["GoodName"] = "tama_o";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","tama_o"); 
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
	
		$fdata["strField"] = "tamaño"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`tamaño`";
	
		
		
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

	

	
	$tdataproductos["tamaño"] = $fdata;
//	Categorias_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Categorias_id";
	$fdata["GoodName"] = "Categorias_id";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","Categorias_id"); 
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

	

	
	$tdataproductos["Categorias_id"] = $fdata;
//	Usuario_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Usuario_id";
	$fdata["GoodName"] = "Usuario_id";
	$fdata["ownerTable"] = "productos";
	$fdata["Label"] = GetFieldLabel("productos","Usuario_id"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		
		$fdata["bAddPage"] = true; 
	
		
		
		
		$fdata["bViewPage"] = true; 
	
		
		
		
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
	$edata["DisplayField"] = "id";
	
		
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
			
		$edata["autoUpdatable"] = true;
	
	//	End validation
	
		
				
		
	
		
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats
	
	
	$fdata["isSeparate"] = false;
	
	
	
	

	

	
	$tdataproductos["Usuario_id"] = $fdata;

	
$tables_data["productos"]=&$tdataproductos;
$field_labels["productos"] = &$fieldLabelsproductos;
$fieldToolTips["productos"] = &$fieldToolTipsproductos;
$page_titles["productos"] = &$pageTitlesproductos;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["productos"] = array();
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
			
	$detailsTablesData["productos"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["productos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["productos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["productos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["productos"][$dIndex]["detailKeys"][]="Productos_idProductos";
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
			
	$detailsTablesData["productos"][$dIndex] = $detailsParam;
	
		
		$detailsTablesData["productos"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["productos"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["productos"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["productos"][$dIndex]["detailKeys"][]="Productos_id";
	
// tables which are master tables for current table (detail)
$masterTablesData["productos"] = array();


	
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
					$masterTablesData["productos"][0] = $masterParams;	
				$masterTablesData["productos"][0]["masterKeys"] = array();
	$masterTablesData["productos"][0]["masterKeys"][]="id";
				$masterTablesData["productos"][0]["detailKeys"] = array();
	$masterTablesData["productos"][0]["detailKeys"][]="Categorias_id";
		
	
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
					$masterTablesData["productos"][1] = $masterParams;	
				$masterTablesData["productos"][1]["masterKeys"] = array();
	$masterTablesData["productos"][1]["masterKeys"][]="id";
				$masterTablesData["productos"][1]["detailKeys"] = array();
	$masterTablesData["productos"][1]["detailKeys"][]="Usuario_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_productos()
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
	"m_srcTableName" => "productos"
));

$proto5["m_sql"] = "id";
$proto5["m_srcTableName"] = "productos";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "tipo",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto7["m_sql"] = "tipo";
$proto7["m_srcTableName"] = "productos";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Observacion",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto9["m_sql"] = "Observacion";
$proto9["m_srcTableName"] = "productos";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Precio",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto11["m_sql"] = "Precio";
$proto11["m_srcTableName"] = "productos";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Exitencia",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto13["m_sql"] = "Exitencia";
$proto13["m_srcTableName"] = "productos";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "foto1",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto15["m_sql"] = "foto1";
$proto15["m_srcTableName"] = "productos";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "foto2",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto17["m_sql"] = "foto2";
$proto17["m_srcTableName"] = "productos";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "foto3",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto19["m_sql"] = "foto3";
$proto19["m_srcTableName"] = "productos";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "foto4",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto21["m_sql"] = "foto4";
$proto21["m_srcTableName"] = "productos";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "nombre",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto23["m_sql"] = "nombre";
$proto23["m_srcTableName"] = "productos";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "modelo",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto25["m_sql"] = "modelo";
$proto25["m_srcTableName"] = "productos";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "marca",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto27["m_sql"] = "marca";
$proto27["m_srcTableName"] = "productos";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "color",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto29["m_sql"] = "color";
$proto29["m_srcTableName"] = "productos";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "tamaño",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto31["m_sql"] = "`tamaño`";
$proto31["m_srcTableName"] = "productos";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "Categorias_id",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto33["m_sql"] = "Categorias_id";
$proto33["m_srcTableName"] = "productos";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "Usuario_id",
	"m_strTable" => "productos",
	"m_srcTableName" => "productos"
));

$proto35["m_sql"] = "Usuario_id";
$proto35["m_srcTableName"] = "productos";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "productos";
$proto38["m_srcTableName"] = "productos";
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
$proto37["m_srcTableName"] = "productos";
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
$proto0["m_srcTableName"]="productos";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_productos = createSqlQuery_productos();


	
																
	
$tdataproductos[".sqlquery"] = $queryData_productos;

include_once(getabspath("include/productos_events.php"));
$tableEvents["productos"] = new eventclass_productos;
$tdataproductos[".hasEvents"] = true;

?>
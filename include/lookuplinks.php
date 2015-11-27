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

	$lookupTableLinks["productos"]["calificacion.Productos_idProductos"]["edit"] = array("table" => "calificacion", "field" => "Productos_idProductos", "page" => "edit");
	$lookupTableLinks["usuario"]["calificacion.Usuario_id"]["edit"] = array("table" => "calificacion", "field" => "Usuario_id", "page" => "edit");
	$lookupTableLinks["productos"]["comentarios.Productos_id"]["edit"] = array("table" => "comentarios", "field" => "Productos_id", "page" => "edit");
	$lookupTableLinks["usuario"]["comentarios.Usuario_id"]["edit"] = array("table" => "comentarios", "field" => "Usuario_id", "page" => "edit");
	$lookupTableLinks["departamento"]["municipio.Departamento_id"]["edit"] = array("table" => "municipio", "field" => "Departamento_id", "page" => "edit");
	$lookupTableLinks["categorias"]["productos.Categorias_id"]["edit"] = array("table" => "productos", "field" => "Categorias_id", "page" => "edit");
	$lookupTableLinks["usuario"]["productos.Usuario_id"]["edit"] = array("table" => "productos", "field" => "Usuario_id", "page" => "edit");
	$lookupTableLinks["usuario"]["tipopago.Usuario_id"]["edit"] = array("table" => "tipopago", "field" => "Usuario_id", "page" => "edit");
	$lookupTableLinks["municipio"]["usuario.Municipio_id"]["edit"] = array("table" => "usuario", "field" => "Municipio_id", "page" => "edit");
	$lookupTableLinks["categorias"]["Principal.Categorias_id"]["edit"] = array("table" => "Principal", "field" => "Categorias_id", "page" => "edit");
	$lookupTableLinks["usuario"]["Principal.Usuario_id"]["edit"] = array("table" => "Principal", "field" => "Usuario_id", "page" => "edit");
}

?>
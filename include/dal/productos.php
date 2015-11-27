<?php
$dalTableproductos = array();
$dalTableproductos["id"] = array("type"=>3,"varname"=>"id");
$dalTableproductos["tipo"] = array("type"=>200,"varname"=>"tipo");
$dalTableproductos["Observacion"] = array("type"=>200,"varname"=>"Observacion");
$dalTableproductos["Precio"] = array("type"=>5,"varname"=>"Precio");
$dalTableproductos["Exitencia"] = array("type"=>3,"varname"=>"Exitencia");
$dalTableproductos["foto1"] = array("type"=>128,"varname"=>"foto1");
$dalTableproductos["foto2"] = array("type"=>128,"varname"=>"foto2");
$dalTableproductos["foto3"] = array("type"=>128,"varname"=>"foto3");
$dalTableproductos["foto4"] = array("type"=>128,"varname"=>"foto4");
$dalTableproductos["nombre"] = array("type"=>200,"varname"=>"nombre");
$dalTableproductos["modelo"] = array("type"=>200,"varname"=>"modelo");
$dalTableproductos["marca"] = array("type"=>200,"varname"=>"marca");
$dalTableproductos["color"] = array("type"=>200,"varname"=>"color");
$dalTableproductos["tamaño"] = array("type"=>200,"varname"=>"tama_o");
$dalTableproductos["Categorias_id"] = array("type"=>3,"varname"=>"Categorias_id");
$dalTableproductos["Usuario_id"] = array("type"=>3,"varname"=>"Usuario_id");
	$dalTableproductos["id"]["key"]=true;
$dal_info["productos"]=&$dalTableproductos;

?>
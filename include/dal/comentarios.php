<?php
$dalTablecomentarios = array();
$dalTablecomentarios["id"] = array("type"=>3,"varname"=>"id");
$dalTablecomentarios["descripcion"] = array("type"=>200,"varname"=>"descripcion");
$dalTablecomentarios["Productos_id"] = array("type"=>3,"varname"=>"Productos_id");
$dalTablecomentarios["Usuario_id"] = array("type"=>3,"varname"=>"Usuario_id");
	$dalTablecomentarios["id"]["key"]=true;
$dal_info["comentarios"]=&$dalTablecomentarios;

?>
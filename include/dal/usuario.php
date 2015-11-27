<?php
$dalTableusuario = array();
$dalTableusuario["id"] = array("type"=>3,"varname"=>"id");
$dalTableusuario["Nombres"] = array("type"=>200,"varname"=>"Nombres");
$dalTableusuario["Apellidos"] = array("type"=>200,"varname"=>"Apellidos");
$dalTableusuario["Telefono"] = array("type"=>200,"varname"=>"Telefono");
$dalTableusuario["Usuario"] = array("type"=>200,"varname"=>"Usuario");
$dalTableusuario["Password"] = array("type"=>200,"varname"=>"Password");
$dalTableusuario["Email"] = array("type"=>200,"varname"=>"Email");
$dalTableusuario["Rol"] = array("type"=>200,"varname"=>"Rol");
$dalTableusuario["Municipio_id"] = array("type"=>3,"varname"=>"Municipio_id");
	$dalTableusuario["id"]["key"]=true;
$dal_info["usuario"]=&$dalTableusuario;

?>
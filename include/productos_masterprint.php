<?php
function DisplayMasterTableInfoForPrint_productos($params)
{
	global $cman;
	
	$detailtable = $params["detailtable"];
	$keys = $params["keys"];
	
	$xt = new Xtempl();
	
	$tName = "productos";

	$cipherer = new RunnerCipherer( $tName );
	$settings = new ProjectSettings($tName, PAGE_PRINT);
	$connection = $cman->byTable( $tName );
	
	$masterQuery = $settings->getSQLQuery();
	$viewControls = new ViewControlsContainer($settings, PAGE_PRINT);

	$where = "";
	$keysAssoc = array();
	$showKeys = "";

	if( $detailtable == "calificacion" )
	{
		$keysAssoc["id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("productos","id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( $detailtable == "comentarios" )
	{
		$keysAssoc["id"] = $keys[1-1];
				$where.= RunnerPage::_getFieldSQLDecrypt("id", $connection , $settings , $cipherer) . "=" . $cipherer->MakeDBValue("id", $keys[1-1], "", true);

				$keyValue = $viewControls->showDBValue("id", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("productos","id").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);	
	}

	if( !$where )
		return;

	$str = SecuritySQL("Export");
	if( strlen($str) )
		$where.= " and ".$str;
	
	$strWhere = whereAdd( $masterQuery->m_where->toSql($masterQuery), $where );
	if( strlen($strWhere) )
		$strWhere= " where ".$strWhere." ";
		
	$strSQL = $masterQuery->HeadToSql().' '.$masterQuery->FromToSql().$strWhere.$masterQuery->TailToSql();
	LogInfo($strSQL);
	
	$data = $cipherer->DecryptFetchedArray( $connection->query( $strSQL )->fetchAssoc() );
	if( !$data )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));	
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["id"]));
	
	$xt->assign("id_mastervalue", $viewControls->showDBValue("id", $data, $keylink));
	$format = $settings->getViewFormat("id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("id")))
		$class = ' rnr-field-number';
		
	$xt->assign("id_class", $class); // add class for field header as field value
	$xt->assign("tipo_mastervalue", $viewControls->showDBValue("tipo", $data, $keylink));
	$format = $settings->getViewFormat("tipo");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("tipo")))
		$class = ' rnr-field-number';
		
	$xt->assign("tipo_class", $class); // add class for field header as field value
	$xt->assign("Observacion_mastervalue", $viewControls->showDBValue("Observacion", $data, $keylink));
	$format = $settings->getViewFormat("Observacion");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Observacion")))
		$class = ' rnr-field-number';
		
	$xt->assign("Observacion_class", $class); // add class for field header as field value
	$xt->assign("Precio_mastervalue", $viewControls->showDBValue("Precio", $data, $keylink));
	$format = $settings->getViewFormat("Precio");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Precio")))
		$class = ' rnr-field-number';
		
	$xt->assign("Precio_class", $class); // add class for field header as field value
	$xt->assign("Exitencia_mastervalue", $viewControls->showDBValue("Exitencia", $data, $keylink));
	$format = $settings->getViewFormat("Exitencia");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Exitencia")))
		$class = ' rnr-field-number';
		
	$xt->assign("Exitencia_class", $class); // add class for field header as field value
	$xt->assign("foto1_mastervalue", $viewControls->showDBValue("foto1", $data, $keylink));
	$format = $settings->getViewFormat("foto1");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("foto1")))
		$class = ' rnr-field-number';
		
	$xt->assign("foto1_class", $class); // add class for field header as field value
	$xt->assign("foto2_mastervalue", $viewControls->showDBValue("foto2", $data, $keylink));
	$format = $settings->getViewFormat("foto2");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("foto2")))
		$class = ' rnr-field-number';
		
	$xt->assign("foto2_class", $class); // add class for field header as field value
	$xt->assign("foto3_mastervalue", $viewControls->showDBValue("foto3", $data, $keylink));
	$format = $settings->getViewFormat("foto3");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("foto3")))
		$class = ' rnr-field-number';
		
	$xt->assign("foto3_class", $class); // add class for field header as field value
	$xt->assign("foto4_mastervalue", $viewControls->showDBValue("foto4", $data, $keylink));
	$format = $settings->getViewFormat("foto4");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("foto4")))
		$class = ' rnr-field-number';
		
	$xt->assign("foto4_class", $class); // add class for field header as field value
	$xt->assign("nombre_mastervalue", $viewControls->showDBValue("nombre", $data, $keylink));
	$format = $settings->getViewFormat("nombre");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("nombre")))
		$class = ' rnr-field-number';
		
	$xt->assign("nombre_class", $class); // add class for field header as field value
	$xt->assign("modelo_mastervalue", $viewControls->showDBValue("modelo", $data, $keylink));
	$format = $settings->getViewFormat("modelo");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("modelo")))
		$class = ' rnr-field-number';
		
	$xt->assign("modelo_class", $class); // add class for field header as field value
	$xt->assign("marca_mastervalue", $viewControls->showDBValue("marca", $data, $keylink));
	$format = $settings->getViewFormat("marca");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("marca")))
		$class = ' rnr-field-number';
		
	$xt->assign("marca_class", $class); // add class for field header as field value
	$xt->assign("color_mastervalue", $viewControls->showDBValue("color", $data, $keylink));
	$format = $settings->getViewFormat("color");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("color")))
		$class = ' rnr-field-number';
		
	$xt->assign("color_class", $class); // add class for field header as field value
	$xt->assign("tama_o_mastervalue", $viewControls->showDBValue("tamaño", $data, $keylink));
	$format = $settings->getViewFormat("tamaño");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("tamaño")))
		$class = ' rnr-field-number';
		
	$xt->assign("tama_o_class", $class); // add class for field header as field value
	$xt->assign("Categorias_id_mastervalue", $viewControls->showDBValue("Categorias_id", $data, $keylink));
	$format = $settings->getViewFormat("Categorias_id");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Categorias_id")))
		$class = ' rnr-field-number';
		
	$xt->assign("Categorias_id_class", $class); // add class for field header as field value

	$layout = GetPageLayout("productos", 'masterprint');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');

	$xt->displayPartial(GetTemplateName("productos", "masterprint"));
}

?>
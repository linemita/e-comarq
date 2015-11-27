<?php 
class eventclass_productos  extends eventsBase
{ 
	function eventclass_productos()
	{
	// fill list of events

//	onscreen events
		$this->events["productos_snippet"] = true;


	}
// Captchas functions	

//	handlers
//	onscreen events
function productos_snippet(&$params)
{
?>
<div class="ec-stars-wrapper">
	<a href="#" data-value="1" title="Votar con 1 estrellas">&#9733;</a>
	<a href="#" data-value="2" title="Votar con 2 estrellas">&#9733;</a>
	<a href="#" data-value="3" title="Votar con 3 estrellas">&#9733;</a>
	<a href="#" data-value="4" title="Votar con 4 estrellas">&#9733;</a>
	<a href="#" data-value="5" title="Votar con 5 estrellas">&#9733;</a>

</div>
<noscript>Necesitas tener habilitado javascript para poder votar</noscript>
<?php

;
}

} 
?>

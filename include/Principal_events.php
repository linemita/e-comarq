<?php 
class eventclass_Principal  extends eventsBase
{ 
	function eventclass_Principal()
	{
	// fill list of events

//	onscreen events
		$this->events["productos_snippet1"] = true;


	}
// Captchas functions	

//	handlers
//	onscreen events
function productos_snippet1(&$params)
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

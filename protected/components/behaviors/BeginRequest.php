<?php

class BeginRequest extends CBehavior
{
	// The attachEventHandler() mathod attaches an event handler to an event.
	// So: onBeginRequest, the handleBeginRequest() method will be called.
	public function attach($owner)
	{
		$owner->attachEventHandler('onBeginRequest', array ($this,'handleBeginRequest' ));
	}

	public function handleBeginRequest($event)
	{
		if (isset($_POST['varLang']))
		{
			$_SESSION['idioma'] = $_POST['varLang'];
			Yii::app()->language = $_POST['varLang'];
		}
	}
}
?>

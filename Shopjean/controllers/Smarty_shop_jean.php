<?php
include("Smarty/libs/Smarty.class.php");
class Smarty_shop_jean extends Smarty
{
	function Smarty_shop_jean()
	{
		parent::__construct();
		$this->setCacheDir("Smarty/cache/");
		$this->setCompileDir("Smarty/templates_c/");
		$this->setConfigDir("Smarty/configs/");
		$this->setTemplateDir("Smarty/templates/");
	}
	function Hien_thi_giao_dien($layout)
	{
		$this->display($layout);
	}


}

?>

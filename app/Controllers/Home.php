<?php 
namespace App\Controllers;

use App\Helpers\LoadTemplate;

class Home extends BaseController
{
	

	public function index()
	{
		$loadTemplate = new LoadTemplate();
		$loadTemplate->loadTemplateWithView('lista_clientes');
		
	}


}

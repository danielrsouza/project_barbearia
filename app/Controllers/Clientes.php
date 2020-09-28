<?php 

namespace App\Controllers;

use App\Models\ClientesModel;
use App\Helpers\LoadTemplate;

class Clientes extends BaseController
{
	public function index()
	{
        $ClienteModel = new ClientesModel();
        $data['clientes'] = $ClienteModel->findAll();


        $loadTemplateHelper = new LoadTemplate();
        $loadTemplateHelper->loadTemplateWithView('lista_clientes', $data);

    }

    public function adicionar()
    {
        $loadTemplateHelper = new LoadTemplate();
        $loadTemplateHelper->loadTemplateWithView('index');
    }
    
    public function store()
    {
        $loadTemplateHelper = new LoadTemplate();
        $data['sucesso'] = false;

        if ($this->request->getMethod() === 'post') 
        {
            $data['sucesso'];
            $ClienteModel = new ClientesModel();

            $ClienteModel->save([
                'nome' => $this->request->getPost('nome'),
                'num_whats' => $this->request->getPost('telefone'),
                'perfil_instagram' => $this->request->getPost('instagram'), 
                'perfil_face' => $this->request->getPost('facebook'),
                'profissao' => $this->request->getPost('profissao'), 
                'data_cadastro' => date("Y-m-d\TH:i:sP")
            ]);

            $data['sucesso'] = true;
            
            $loadTemplateHelper->loadTemplateWithView('lista_clientes', $data);
        }
    }


}

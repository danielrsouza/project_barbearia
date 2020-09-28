<?php 

namespace App\Controllers;

use App\Models\ClientesModel;
use App\Helpers\LoadTemplate;

class Clientes extends BaseController
{

    protected $loadTemplateHelper;
    protected $ClienteModel;


    function __construct()
    {
       $this->ClienteModel = new ClientesModel();
       $this->loadTemplateHelper = new LoadTemplate();
    }

	public function index()
	{
        $data['clientes'] = $this->ClienteModel->findAll();
        $this->loadTemplateHelper->loadTemplateWithView('lista_clientes', $data);

    }

    public function add()
    {
        $this->loadTemplateHelper->loadTemplateWithView('index');
    }
    
    public function store()
    {
        $data['sucesso'] = false;

        if ($this->request->getMethod() === 'post') {
            $data['sucesso'];
    
            $this->ClienteModel->save([
                'nome' => $this->request->getPost('nome'),
                'num_whats' => $this->request->getPost('telefone'),
                'perfil_instagram' => $this->request->getPost('instagram'), 
                'perfil_face' => $this->request->getPost('facebook'),
                'profissao' => $this->request->getPost('profissao'), 
                'data_cadastro' => date("Y-m-d\TH:i:sP")
            ]);

            $data['sucesso'] = true;
            
            $data['clientes'] = $this->ClienteModel->findAll();
            $this->loadTemplateHelper->loadTemplateWithView('lista_clientes', $data);
        }
    }


}

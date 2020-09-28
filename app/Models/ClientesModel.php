<?php 

namespace App\Models;
use CodeIgniter\Model;

class ClientesModel extends Model
{
    protected $table = 'cliente';
    protected $primaryKey = 'idcliente';
    protected $allowedFields = ['nome', 'num_whats', 'perfil_instagram', 'perfil_face', 'profissao', 'data_cadastro'];

}
<?php

namespace App\Helpers;

class LoadTemplate 
{
    public function loadTemplateWithView($view, $data = null)
    {
        echo view("template/header");
        if (isset($data)) {
            echo view($view, $data);
        } else {
            echo view($view);
        }
		echo view("template/footer");
    }
}
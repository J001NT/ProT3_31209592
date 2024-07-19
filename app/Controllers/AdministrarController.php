<?php

namespace App\Controllers;
use App\Models\usuario_Model;
use CodeIgniter\Controller;


class AdministrarController extends Controller
{
    public function index()
    {
        $dato['titulo']='Administrar';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/Admin_usuarios');
        echo view('front/footer_view');
    }


}
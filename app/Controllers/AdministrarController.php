<?php

namespace App\Controllers;
use App\Models\usuario_Model;
use CodeIgniter\Controller;


class AdministrarController extends Controller
{
    public function index()
    {
        
        
        $model = new usuario_Model();
        $datos = $model->getUsuarios();
        

        $dato['titulo']='Administrar';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/Admin_usuarios', compact('datos'));
        echo view('front/footer_view');
    }

    public function store(){

        $validacion=$this->validate([
            'nombre' => 'required',
            'apellido' => 'required' ,
            'usuario' => 'required' , 
            'email' => 'required|valid_email|is_unique[usuarios.email]']);

        if ($_POST && $validacion){

            //print_r($_POST);exit;

        $datos = [

            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'usuario' => $_POST['usuario'],
            'email' => $_POST['email'],
        ];

        $model = new usuario_Model();

        $model->add($datos);

        session()->setFlashdata('msj', 'Registro guardado exitosmente');

        return redirect()->to(base_url('administrar'));

        }else{

            $error = $this->validator->listErrors();

            session()->setFlashdata('msj', $error);
            return redirect()->to(base_url('add'));
            
        }
    }

    public function add(){

        $dato['titulo']='Agregar';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/add_usuarios');
        echo view('front/footer_view');
    }

    public function edit($id_usuario){

        $model = new usuario_Model();


        $dato = $model->getUsuario($id_usuario);

        $dato['titulo']='Editar';
        echo view('front/head_view', $dato);
        echo view('front/navbar_view');
        echo view('back/usuario/edit', compact('dato'));
        echo view('front/footer_view');

    }

    public function update() {

        $validacion=$this->validate([
            'nombre' => 'required',
            'apellido' => 'required' ,
            'usuario' => 'required' , 
            'email' => 'required']);

        if ($validacion){

            //print_r($_POST);exit;

        $datos = [

            'id_usuario' => $_POST['id_usuario'],
            'nombre' => $_POST['nombre'],
            'apellido' => $_POST['apellido'],
            'usuario' => $_POST['usuario'],
            'email' => $_POST['email'],
        ];

        $id_usuario=$_POST['id_usuario'];
        
        $model = new usuario_Model();
        $model->updateDatos($id_usuario, $datos);

        session()->setFlashdata('msj', 'Registro editado exitosmente');

        return redirect()->to(base_url('administrar'));

        }else{

            $error = $this->validator->listErrors();

            session()->setFlashdata('msj', $error);
            return redirect()->to(base_url('edit'));
            
        }

    }

    public function delete($id_usuario){

        $model = new usuario_Model();
        $model->delete($id_usuario);
        session()->setFlashdata('msj', 'Registro eliminado');
            return redirect()->to(base_url('administrar'));

    }


}
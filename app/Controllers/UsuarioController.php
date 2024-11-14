<?php
namespace App\Controllers;
use App\Models\UsuarioModel;

class UsuarioController extends BaseController{
    protected $usuarioModel ;
    function __construct(){
        $this->usuarioModel = new UsuarioModel();
    }

    //Lista de usuarios (es una VIEW)
    public function index(){
        //Crear, buscar, editar, eliminar usuarios
        $usuarios = $this->usuarioModel -> findAll();
        $data=array(
            "usuario"=> $usuarios
        );
       return view("usuarios/index", $data);

    }

    //informacion de un usario (VIEW)
    public function show($id){
        $usuario = $this->usuarioModel->find($id);
        echo "<h1> informaicon del usuario $id </h1>";
        echo "<p>$usuario[nombre] </p>";

    }

    //formulario para crear usuario (VIEW)
    public function create(){
        return view("usuarios/create");
    }
    /*
    codigo para guardaar
     usuario en la base de datos(redict -> index)
    */
    public function store(){
        $data=array(
            "nombre" => $this->request->getPost("nombre"),
            "telefono" => $this->request->getPost("telefono"),
            "correo" => $this->request->getPost("correo"),
            "password_usuario" => $this->request->getPost("password_usuario")
        );
        $this->usuarioModel->save($data);
        return redirect()->to("/usuarios");

    }
    //formulario para editar usuairo
    public function edit($id){
        $usuario=$this->usuarioModel->find($id);
        //la palabra data se utiliza cuando van datos
        $data = array(
            "usuario"=>$usuario
        );
        //estamos vargando una vista
        return view("usuarios/edit", $data);// el view le podemos enviar variables como segundo parametro


    }

    //codigo para actualizar usuraio (redirect -> view)
    public function update($id){
        $data=array(
            "nombre" => $this->request->getPost("nombre"),
            "telefono" => $this->request->getPost("telefono"),
            "correo" => $this->request->getPost("correo"),
            "password_usuario" => $this->request->getPost("password_usuario")
        );
        $this->usuarioModel->update($id,$data);
        return redirect()->to("/usuarios/$id");

    }

    //codigo para eliminar un usuario de la base de datos (redirect -> index)
    public function delete($id){
        $this->usuarioModel->delete($id);
        return redirect()->to("/usuarios");

    }




}



?>
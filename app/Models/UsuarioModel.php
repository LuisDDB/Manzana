<?php
namespace App\Models;
use CodeIgniter\Model;

class UsuarioModel extends Model{

    protected $table = "usuarios";
    protected $primatyKey = "Id";

    protected $allowedFields =["nombre", "correo", "password_usuario", "telefono"];

    //llena los campos create_at y update_at 
    protected $useTimestamps =true;

}
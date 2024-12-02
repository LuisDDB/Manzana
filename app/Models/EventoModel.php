<?php
namespace App\Models;
use CodeIgniter\Model;

class EventoModel extends Model{

    protected $table = "eventos";
    protected $primatyKey = "id";

    protected $allowedFields =["categoria_id", "cliente_id", 
    "fecha_evento", "paquete_id","estado","nombre"];

    //llena los campos create_at y update_at 
    protected $useTimestamps =true;

    public function obtenerEventos() {
        return $this->select('eventos.*, clientes.nombre AS nombre_cliente, categorias.nombre AS nombre_categoria')
                    ->join('clientes', 'eventos.cliente_id = clientes.id') // Une las tablas
                    ->join('categorias', 'eventos.categoria_id = categorias.id');
    }
   

}

<?php
namespace App\Controllers;
use App\Models\EventoModel;

    class EventoController extends BaseController{
        protected $eventosModel;
        function __construct(){
            $this->eventosModel = new EventoModel(); 

        }


        public function index(){
            $eventos= $this->eventosModel->obtenerEventos()->findAll();
            $data=array( "evento" => $eventos);
            return view("eventos/index", $data);
        }

        public function show($id){
            $evento=$this->eventosModel->obtenerEventos()->find($id);
            $data=array( "evento" =>$evento);
            return view("eventos/show", $data);
        }

        public function create(){
            return view("eventos/create");
        }

        public function store(){
            $data=array(
                "nombre"=>$this->request->getPost("nombre"),
                "categoria_id"=>$this->request->getPost("categoria_id"),
                "cliente_id"=> $this->request->getPost("cliente_id"),
                "fecha_evento"=> $this->request->getPost("fecha_evento"),
                "paquete_id"=> $this->request->getPost("paquete_id"),
                "estado"=> $this->request->getPost("estado")
            );
            $this->eventosModel->save($data);
            return redirect()->to("eventos");
        }

        public function edit($id){
            $evento=$this->eventosModel->find($id);
            $data=array("evento"=>$evento);
            return view("eventos/edit", $data);
        }
        public function update($id){
            $data=array(
                "nombre"=>$this->request->getPost("nombre"),
                "categoria_id"=>(int) $this->request->getPost("categoria_id"),
                "cliente_id"=> $this->request->getPost("cliente_id"),
                "fecha_evento"=> $this->request->getPost("fecha_evento"),
                "paquete_id"=> $this->request->getPost("paquete_id"),
                "estado"=> $this->request->getPost("estado")
            );
            $this->eventosModel->update($id,$data);
            return redirect()->to("eventos");
        }

        public function delete($id){
            $this->eventosModel->delete($id);
            return redirect()->to("eventos");
        }
       


    }
?>
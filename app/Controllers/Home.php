<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    //imprimir algo
    public function saludar(){
        echo "<h1 style='text-align:center;'> Hola <br> ¿Quieres ser tu propio jefe?</h1>";
    }
    public function saludar2 ($nombre){
        echo "<h1 style='text-align:center;'> Hola $nombre <br> ¿Quieres ser tu propio jefe?</h1>";

    }
    public function saludar3 ($nombre, $edad){
        echo " hola $nombre <br>";
        echo ($edad >= 18)? "eres mayor de edad" : "Eres menor de edad";
    }

    public function operaciones ($numero1, $numero2, $operacion){
        switch($operacion){
            case 's': echo "Suma:", ($numero1 + $numero2), "<br>"; break;
            case 'r': echo "resta:", ($numero1 - $numero2), "<br>"; break;
            case 'm': echo "multiplicacion:", ($numero1 * $numero2), "<br>"; break;
            case 'd': echo "divicion:", ($numero1 / $numero2), "<br>"; break;
            default: echo ("Esa operacion no existe"); break;

        }
        
    
    }

    public function plantilla(){
        return view("plantilla");
    }
}

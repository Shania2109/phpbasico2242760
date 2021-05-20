<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //acciones para mostrar el formulario de busqueda
    public function formulario_buscador(){
    // mostrar la vista del metabuscador
    return view('metabuscador');
    }

    //accion para realizar la busqueda
    public function buscar(){
        //datos llegan al arreglo $_POST
        //echo "<pre>";
        //print_r($_POST);
        //echo "</pre>";

        $termino = $_POST["termino"];
        $motor = $_POST["motores"];
        //Redirrecionar al motor correcto, junto con el terminology//querystring
        switch($motor){
            case 1:
                return redirect()->to("https://www.google.com/search?q=$termino");
                break;

            case 2:
                return redirect()->to("https://www.bing.com/search?q=$termino");
                break;

            case 3:
                return redirect()->to("https://www.youtube.com/results?search_query=$termino");
                break;

            case 4:
                return redirect()->to("https://www.facebook.com/search/top/?q=$termino");
                break;

            case 5:
                return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
            case 6:
                return redirect()->to("https://www.baidu.com/s?ie=utf-8&f=8&rsv_bp=1&rsv_idx=1&ch=&tn=baidu&bar=&wd=$termino");
                break;
            case 7:
                return redirect()->to("https://yandex.com/search/?text=$termino");
            case 8:
                return redirect()->to("https://duckduckgo.com/?q=$termino");
            case 9:
                return redirect()->to("https://www.qwant.com/?l=es&q=$termino");
            case 10:
                return redirect()->to("https://co.pinterest.com/search/pins/?q=$termino");

        }

    }
}

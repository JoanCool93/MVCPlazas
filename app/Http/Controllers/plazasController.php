<?php

namespace PlazasMVC\Http\Controllers;

use Redirect;
use Session;
use PlazasMVC\Plaza;
use Illuminate\Http\Request;
use PlazasMVC\Http\Requests;
use PlazasMVC\Http\Controllers\Controller;

class plazasController extends Controller
{
    public function inicio()
    {
        return view('panel');
    }
    public function index()
    {
        // Obtener todos los bodegas
        $plazas = Plaza::paginate(5);

        // Carga la vista a la cual le pasa todos los plazas.
        return \View::make('plazas.plazas', compact('plazas'));
    }
    public function paginaCrear()
    {
        return view('plazas.crearPlaza');
    }
    public function paginaModificar()
    {
        return view('plazas.modificarPlaza');
    }

    public function crear(Request $r)
    {
        //  Procesa la validación si hay algun error regresa a la pagina de registro
        //mostrando un mensaje con el error que se dio y manteniendo los datos..
        $validador = Plaza::validar($r);
        if ($validador->fails()) {
            return Redirect::to('/crearPlaza')
                ->withErrors($validador)
                ->withInput($r->all());
        } else {
            Plaza::insertar($r);
            // Session manda un mensaje de exito.
            Session::flash('message', 'Se ha creado exitosamente la plaza');
            // Redireccionmiento.
            return Redirect::to('/listaPlazas');
        }
    }

    public function modificar(Request $r)
    {
        Plaza::modificar($r);
        // Session manda un mensaje de exito.
        Session::flash('message', 'Se ha modificado exitosamente las plazas');
        // Redireccionmiento.
        return Redirect::to('/listaPlazas');
    }

    public function eliminar($id)
    {
        Plaza::eliminar($id);
        // Session manda un mensaje de exito.
        Session::flash('message', 'Se ha eliminado exitosamente la plaza');
        // Redireccionmiento.
        return Redirect::to('/listaPlazas');
    }
}

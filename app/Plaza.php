<?php

namespace PlazasMVC;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Validator;
use Redirect;
use Session;
use DB;

class Plaza extends Model
{
    protected $primaryKey = 'idPlaza';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descripcion', 'sueldo', 'sobresueldo', 'estimulo',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    public static function validar(Request $r)
    {
        //Se crea un arreglo contra el cual se cotejaran los datos que se reciban.
        $reglas = array(
            'descripcion'   => 'required|max:255',
            'sueldo'        => 'required|max:255',
            'sobresueldo'   => 'required|max:255',
            'estimulo'      => 'required|max:255'
        );
        //  Se crea una instancia de Validator con todos los datos que obtuvo del
        //formulario usando la clase Input y los coteja con el arreglo rules.
        $validador = Validator::make($r->all(), $reglas);
        return $validador;
    }
    
    public static function insertar(Request $r)
    {
        // Crea una instancia de especie y se modifican sus atributos con los 
        //datos que se obtuvieron del formulario y se almacena en disco.
        Plaza::create($r->all());
    }

    public static function modificar(Request $r)
    {
        $porcentaje = 1 + ($r->porcentaje / 100);
        $campo = $r->columna;
        DB::update('update plazas set '.$campo.'= '.$campo.'*'.$porcentaje);
    }

    public static function eliminar($id)
    {
        Plaza::destroy($id);
    }
}
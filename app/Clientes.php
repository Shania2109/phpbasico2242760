<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    //vincular modelo a tabla
    protected $table = 'customer';
    //estableces la PK para la entidad (por defecto id)
    protected $primaryKey = "CustomerId";
    //omitir campos de auditoria
    public $timestamps = false;

    //relacion de uno a muchos entre clientes a facturas
    public function facturas() {
        //utilizo el metodo de eloquent:
        return $this->hasMany('App\Factura' ,  'CustomerId');
    }
}

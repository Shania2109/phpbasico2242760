<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //vincular modelo a tabla
    protected $table = 'employee';
    //estableces la PK para la entidad (por defecto id)
    protected $primaryKey = "EmployeeId";
    //omitir campos de auditoria
    public $timestamps = false;

    //relacion 1 a muchos clientes
    public function clientes(){
        return $this->hasmany('App\Clientes' , 'SupportRepId');
    }
    public function facturas(){
        return $this->hasManyThrough('App\Factura' ,
                                    'App\Clientes',
                                    'SupportRepId', //fk del abuelo en el papa
                                    'CustomerId',
                                    'EmployeeId',
                                    'CustomerId');
    }
}

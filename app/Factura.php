<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table="invoice";
    //establecer la PK para la entidad(por defecto: id)
    protected $primaryKey = "InvoiceId";
    //Omitir campos de auditoria
    public $timestamps = false;

    //relacion de m:m entre factura y canciones
    public function canciones(){
        return $this->belongsToMany('App\Cancion',
                            'invoiceline',
                            'InvoiceId',
                            'TrackId',);
    }
}

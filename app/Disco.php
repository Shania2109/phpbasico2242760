<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
//vincular modelo a tabla
protected $table = 'album';
//estableces la PK para la entidad (por defecto id)
protected $primaryKey = "AlbumId";
//omitir campos de auditoria
public $timestamps = false;

//Inversa de la relacion mucho a 1
public function artista(){
    //belogsTo: Relacion m a 1
    return $this->belongsTo('App\Artista' , 'ArtistId');
}
}

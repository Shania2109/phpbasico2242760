<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    protected $table="playlist";
    //establecer la PK para la entidad(por defecto: id)
    protected $primaryKey = "PlaylistId";
    //Omitir campos de auditoria
    public $timestamps = false;

//RELACION mm(playlist y cancion)
public function canciones(){
    return $this->belongsToMany('App\Cancion',
                                'playlisttrack',
                                'PlaylistId',
                                'TrackId');
}
}

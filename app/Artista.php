<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    //vincular modelo a tabla
    protected $table = 'artist';
    //estableces la PK para la esntidad (por defecto id)
    protected $primaryKey = "ArtistId";
    //omitir campos de auditoria
    public $timestamps = false;

    //definir relacion entre artista y albums
    public function discos(){
    //hasmany parametros
    //1.Modelo a relacionar
    //2.Llave foranea del modelo papa
    //3. PK del modelo hijo
        return $this->HasMany('App\Disco', 'ArtistId' );

    }

    //definir relacion de multitabla entre
    //artista y sus canciones(tracks)
    public function canciones(){
        //HasmanyThorouhg : parametros:
        //1.Modelo Nieto
        //2.Modelo Papa
        //3.FK del abuelo con el papa
        //4.FK del papa en el nieto
        //5. Clave Primary del abuelo
        //6.Clave primary del papa

        //hasManyThrough: tiene muchos atraves de
        return $this->hasManyThrough('App\Cancion' ,
                                    'App\Disco',
                                    'ArtistId',
                                    'AlbumId',
                                    'ArtistId',
                                    'AlbumId');
    }
}

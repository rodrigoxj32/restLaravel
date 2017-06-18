<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{

		protected $table = "documentos";

        protected $fillable = [
        'nombre', 'descripcion', 'cantidad',
        	];



        public function user(){
        	return $this->belongsTo('App\User');
    	}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelBook extends Model
{
    use HasFactory;

    protected $table='books';


    protected $fillable = [
        'id_autor','title', 'pages', 'price',
    ];

    protected  $primaryKey = 'id';

    public function relAutors(){
        return $this->hasOne('App\Models\AutorModel','id','id_autor');
    }

}

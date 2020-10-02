<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AutorModel extends Model
{
    use HasFactory;

    protected $table='autor';


    protected $fillable = [
        'id','name', 'email',
    ];

    protected  $primaryKey = 'id';

    public function relBooks(){
        return $this->hasMany('App\Models\ModelBook','id_autor');
    }




}

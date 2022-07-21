<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tdocumento extends Model
{
    use HasFactory;
    protected $table = 'tipo_documentos';
    protected $fillable =
    [
        'descripcion',
    ];

    public $timestamps = false;

    public function datos()
    {
        return $this->hasMany('App\Models\Dato');
    }
}

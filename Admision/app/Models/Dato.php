<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    use HasFactory;
    protected $table = 'datos';
    protected $fillable =
    [
        'apellidos_nombres',
        'fecha_nacimiento',
        'sexo_id',
        'nacionalidad',
        'tipo_documento_id',
        'dni',
        'direccion',
        'telefono',
        'email',
        'imagen',
    ];

    public $timestamps = false;

    public function sexo()
    {
        return $this->belongsTo('App\Models\Sexo');
    }
    public function tipoDocumento()
    {
        return $this->belongsTo('App\Models\TDocumento');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


}

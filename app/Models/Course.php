<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Course extends Model
{
    use HasFactory;
    //permite que solo estos campos puedan ser asignados masivamente los demas no los permite
    /*

    protected $fillable = [
        'name',
        'description',
        'category',
    ];*/

    //permite que solo estos campos no puedan ser asignados masivamente los demas si los permite
    //util para cuando son muchos campos y solo se quiere proteger uno o dos
    //como no quiero proteger ningun campo y los demas si estan permitidos se deja vacio
    protected $guarded = [];

    protected function name(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => strtolower($value),
        );
    }

    protected function description(): Attribute
    {
        return new Attribute(
            get: fn ($value) => strtoupper($value),
            set: fn ($value) => strtolower($value),
        );
    }

    protected function category(): Attribute
    {
        return new Attribute(
            get: fn ($value) => ucwords($value),
            set: fn ($value) => strtolower($value),
        );
    }
}

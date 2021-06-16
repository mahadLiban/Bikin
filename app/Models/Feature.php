<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;
    protected $table = 'features';

    protected $fillable = [
        'img',
        'petitTitre',
        'sousTitre',
        'li1',
        'li2',
        'li3',
        'description',
    ];

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filtre extends Model
{
    use HasFactory;

    protected $table = 'filtres';

    protected $fillable = [
        'app',
        'card',
        'web',
    ];

    public function imgortfolios(){
        return $this->hasMany(Imgortfolio::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imgortfolio extends Model
{
    use HasFactory;

    protected $table = 'imgortfolios';

    protected $fillable = [
        'img',
        
    ];
    public function filtre(){
        return $this->belongsTo(Filtre::class);
    }
}

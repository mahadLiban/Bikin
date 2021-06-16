<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;
    protected $table = 'footers';

    protected $fillable = [
        'footerTitre',
        'description',
        'phone',
        'email',
        'li1',
        'li2',
        'li3',
        'li4',
        'li5',
        'li6',
        'li7',
        'li8',
        'li9',
        "li10",
        'btnTxt',
    ];
}

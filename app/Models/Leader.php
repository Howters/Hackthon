<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    use HasFactory;

    protected $fillable=[

            'name',
            'email',
            'whatsapp',
            'line',
            'github',
            'birth_place',
            'birth_date',
            'cv',
            'flazz',
            'ktp',
            'bukti'
    ];

    public function group(){
        return $this->belongsTo(Group::class);
    }
}

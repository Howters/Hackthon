<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable=[

        'name',
        'group_id',
        'email',
        'whatsapp',
        'line',
        'github',
        'birth_place',
        'birth_date',
        'cv',
        'flazz',
        'ktp'
];
    public function group(){

        return $this->belongsTo(Group::class);
    }
}

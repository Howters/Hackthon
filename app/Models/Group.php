<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Group extends Model implements Authenticatable
{
    protected $fillable=[

        'name',
        'password',
        'leader_id',
        'binusian',
        'bukti',
        'memberCount'
];
    // add any other necessary fields or methods here

    public function getAuthIdentifierName()
    {
        return 'name';
    }

    public function getAuthIdentifier()
    {
        return $this->name;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function setAuthPassword($password)
    {
        $this->password = Hash::make($password);
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    public function leader(){

        return $this->belongsTo(Leader::class);
    }

    public function member(){

        return $this->hasMany(Member::class);
    }
}

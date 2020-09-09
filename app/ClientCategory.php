<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientCategory extends Model
{
    protected $fillable = [
        'name', 'client_id'
    ];

    public function client()
    {
        return $this->hasOne('Client::class');
    }
}

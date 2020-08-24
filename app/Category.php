<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    public function menus()
    {
        return $this->hasMany(Menu::class);
        //return $this->belongsTo(Menu::class);
    }
}

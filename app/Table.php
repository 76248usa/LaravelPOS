<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = ['name', 'image', 'category_id', 'menu_id'];

    public function menus()
    {
        return $this->belongsToMany(Menu::class);
    }
}

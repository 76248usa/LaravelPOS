<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = [
        'name', 'image', 'category_id',
        'menu_id2', 'menu_id1'
    ];

    public function menus()
    {
        return $this->belongsToMany(Menu::class);
    }

    public function clients()
    {

        return $this->belongsToMany(Client::class);
    }
}

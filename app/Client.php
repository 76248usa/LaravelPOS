<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $fillable = [
        'menu_id', 'name', 'table_id'
    ];

    public function table()
    {
        return $this->hasOne('Table::class');
    }


    public function clientCategory()
    {
        return $this->belongsTo('ClientCategory::class');
    }

    public function menus()
    {
        return $this->belongsToMany('App\Menu');
    }
}

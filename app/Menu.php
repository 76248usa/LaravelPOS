<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected $fillable = [
        'name', 'price', 'image', 'description',
        'category_id', 'client_id', 'table_id'
    ];




    public function category()
    {
        return $this->belongsTo(Category::class);
        //return $this->hasOne(Category::class);
    }

    public function table()
    {
        return $this->belongsToMany(Table::class);
    }



    public function client()
    {
        return $this->belongsToMany('App\Client');
    }
}

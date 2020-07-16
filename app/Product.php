<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model

{
    protected $primaryKey = 'product_id';
    protected $fillable=['name','image'];

    public function vote()
    {
        return $this->hasMany('App\Voter');
    }
}

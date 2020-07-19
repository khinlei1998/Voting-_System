<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model

{
    protected $primaryKey = 'product_id';
    protected $fillable=['name','image','description'];

    public function users()
    {
        return $this->belongsToMany("App\User");
    }
}
